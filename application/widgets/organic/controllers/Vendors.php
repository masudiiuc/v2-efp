<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


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

    public function home()
    {
        $this->layout->view('home', $this->data);
    }
}
?>