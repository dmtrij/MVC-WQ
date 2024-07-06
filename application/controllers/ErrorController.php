<?php

class ErrorController extends BaseController
{
	
	function index(): void
	{
		$this->view->generate('error.php', 'template.php');
	}

}
