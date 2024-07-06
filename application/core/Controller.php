<?php

class BaseController
{
    protected ?BaseModel $model = null;
	
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * Default action method.
     */
    public function index()
    {
        // to do
    }
}
