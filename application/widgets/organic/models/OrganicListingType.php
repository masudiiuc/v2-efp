<?php

class OrganicListingType extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * organic listing list
     *
     * @return object   $result
     */
    public function getOrganicListingTypes()
    {
        $sql    = "SELECT *  FROM ecofrie1_ecodb.organic_listing_type
                            WHERE status='active'";

        $result = $this->db->query($sql)->result();

        return $result ? $result : false;
    }

}