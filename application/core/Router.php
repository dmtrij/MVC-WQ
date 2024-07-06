<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Router
{
    public static function start()
    {
        // Контроллер и действие по умолчанию
        $controllerName = 'Home';
        $actionName = 'index';

        // Разбиваем URI на сегменты и фильтруем ввод
        $routes = explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));

        // Получаем имя контроллера
        if (!empty($routes[0])) {
            $controllerName = ucfirst($routes[0]);
        }

        // Получаем имя действия
        if (!empty($routes[1])) {
            $actionName = $routes[1];
        }

        // Добавляем префиксы
        $modelName = $controllerName . 'Model';
        $controllerName = $controllerName . 'Controller';

        try {
            // Подключаем файл с классом модели (файла модели может и не быть)
            $modelFile = strtolower($modelName) . '.php';
            $modelPath = "application/models/" . $modelFile;
            if (file_exists($modelPath)) {
                include $modelPath;
            }

            // Подключаем файл с классом контроллера
            $controllerFile = strtolower($controllerName) . '.php';
            $controllerPath = "application/controllers/" . $controllerFile;
            if (!file_exists($controllerPath)) {
                throw new Exception("Контроллер $controllerName не найден");
            }

            include $controllerPath;

            // Создаем контроллер
            if (!class_exists($controllerName)) {
                throw new Exception("Класс $controllerName не существует");
            }

            $controller = new $controllerName();
            $action = $actionName;

            // Проверяем наличие метода и вызываем действие контроллера
            if (!method_exists($controller, $action)) {
                throw new Exception("Метод $action не найден в контроллере $controllerName");
            }

            $controller->$action();
        } catch (Exception $e) {
            // Логгирование ошибки
            error_log($e->getMessage());

            // Перенаправляем на страницу 404
            self::errorPage404();
        }
    }

    public static function errorPage404(): void
    {
        // Получаем хост и защищаем от XSS-атак
        $host = 'https://' . htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8') . '/';

        // Устанавливаем заголовки о том, что страница не найдена
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');

        // Перенаправляем на страницу ошибки
        header('Location: ' . $host . 'error');

        // Останавливаем выполнение скрипта
        exit();
    }
}
