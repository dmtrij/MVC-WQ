<?php

class ServicesController extends BaseController
{

	function index(): void
	{
		$this->view->generate('services.php', 'template.php');
	}
}
