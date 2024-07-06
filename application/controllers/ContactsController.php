<?php

class ContactsController extends BaseController
{
    public function index(): void
    {
        $this->view->generate('contacts.php', 'template.php');
    }
}