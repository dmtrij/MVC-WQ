<?php

class PortfolioController extends BaseController
{

	function __construct()
	{
		$this->model = new PortfolioModel();
		$this->view = new View();
	}
	
	function index()
	{
		$data = $this->model->getData();		
		$this->view->generate('portfolio.php', 'template.php', $data);
	}
}
