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
        $this->layout->view('home');
    }

    public function signup()
    {
        $this->layout->view('signup');
    }
}