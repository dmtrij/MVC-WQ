<?php

// подключаем файлы ядра
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';

/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/Router.php';
Router::start(); // запускаем маршрутизатор
