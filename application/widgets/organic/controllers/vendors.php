<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Vendors extends MX_Controller
{
    /**
     * @var     protected
     */
    protected $data = array();

    /**
     * default constuct
     *
     * @access  public
     * @param   none
     * @return  none
     */
    public function __construct(){
        parent::__construct();
        $this->layout->setLayout('layout/organic');
    }

    public function index()
    {

        if(!$this->session->userdata('vendorsInfo')){
            $this->message->set('Sorry! you need to login first', 'warning', true);
            redirect('login', 'refresh');
        }
        else
        {
            $session_data = $this->session->userdata('vendorsInfo');
            $this->data['email'] = $session_data['email'];
            $this->layout->view('home', $this->data);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('vendorsInfo');
        session_destroy();
        redirect('organic/index/login', 'refresh');
    }
}
?>