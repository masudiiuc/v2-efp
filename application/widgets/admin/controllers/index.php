<?php

Class Index extends MX_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();

        $this->layout->setLayout('layout/admin');
    }

    public function login()
    {
        $this->load->view('index/login', $this->data);
    }

    public function dashboard()
    {
        $this->layout->view('index/dashboard', $this->data);
    }
}