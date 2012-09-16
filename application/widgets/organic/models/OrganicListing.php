<?php

class OrganicListing extends CI_Model
{
    protected $tableName;

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'eco_organic_listing';
    }

    public function getAllByPage($startPage = 0, $limit = 52)
    {
        $query = "SELECT * FROM $this->tableName LIMIT $startPage,$limit";

        $result = $this->db->query($query)->result();

        return $result ? $result : false;
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->tableName";

        $result = $this->db->query($query)->result();

        return $result ? $result : false;
    }
}