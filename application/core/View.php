<?php

class View
{
    /*
    $contentView - вид, отображающий контент страниц;
    $templateView - общий для всех страниц шаблон;
    $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
    */
    public function generate($contentView, $templateView, $data = null)
    {
        // Преобразуем элементы массива в переменные
        if (is_array($data)) {
            extract($data, EXTR_SKIP);
        }

        // Подключаем общий шаблон, внутри которого будет встраиваться вид
        include 'application/views/' . htmlspecialchars($templateView, ENT_QUOTES, 'UTF-8');
    }
}

