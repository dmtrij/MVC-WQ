<?php

class HomeController extends BaseController
{

	function index(): void
	{	
		$this->view->generate('home.php', 'template.php');
	}
}