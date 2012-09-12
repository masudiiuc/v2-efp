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

        if( $this->input->post() ){
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            //echo $email." ".$password;die();
            $isLogin =  $this->_checkLogin($email, md5($password));

            if( $isLogin ){
                $this->message->set('Successfully Loggedin', 'success', true);
                redirect('vendors/home');
            }else{
                $this->message->set('Sorry! Invalid Login Information. Please try again', 'failure');
                redirec('organic/index/login');
            }
        }

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
        $this->load->model('OrganicListingType');

        $this->data['organicListing'] = $this->OrganicListingType->getOrganicListingTypes();
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




    /**
     * check for user login
     *
     * @access  private
     * @param   string $email
     * @param   string $password
     */
    private function _checkLogin($email, $password){
        $this->load->model('VendorsModel');
        $result = $this->VendorsModel->getUserLogin( $email, $password );

        if( $result ) {
            $_SESSION['vendorsInfo'] = $result;
            return true;
        }
        return false;
    }
}