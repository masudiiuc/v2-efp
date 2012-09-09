<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Index extends MX_Controller
{
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('layout/organic');
    }

    public function home()
    {
        $this->layout->view('home', $this->data);
    }

    public function login()
    {
        $this->layout->view('login', $this->data);
    }

    public function signup()
    {
        $this->layout->view('signup', $this->data);
    }

    public function basic_info()
    {
        $this->layout->view('basic_info', $this->data);
    }

    public function choose_category()
    {
        $this->layout->view('choose_category', $this->data);
    }

    public function payment()
    {
        $this->layout->view('payment', $this->data);
    }

    public function confirmation()
    {
        $this->layout->view('confirmation', $this->data);
    }
}