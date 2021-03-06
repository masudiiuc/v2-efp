<?php

class vendors extends CI_Model
{
     /**
     * @var    protected
     */
    protected $_tableName;

    /**
     * default Constructor
     *
     * @return none
     **/
    public function __construct(){
        parent::__construct();

        $this->_tableName = 'vendors';
    }

    /**
     * get User Login information using email and password
     *
     * @access public
     * @Param  string  $email
     * @param  string  $password
     * @return boolean
     **/
    public function getUserLogin( $email, $password ){

        $query = $this->db->get_where($this->_tableName, array('email' => $email,'password' => $password))->result_array();

        if($query) {
            return $query[0];
        }
        return false;

    }
}
?>