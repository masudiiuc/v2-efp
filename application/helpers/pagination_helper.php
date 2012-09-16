<?php

/**
 * Return pagination string
 *
 * @param $pageUrl
 * @param $totalData
 * @param $uriSegment
 * @param $perPage
 * @return  string
 */
function getPagination( $pageUrl, $totalData, $uriSegment,$perPage )
{
    $CI =& get_instance();
    $CI->load->library('pagination');

    $config['base_url']         = base_url() . $pageUrl;
    $config['total_rows']       = count($totalData);
    $config['uri_segment']      = $uriSegment;
    $config['per_page']         = $perPage;
    $config['num_links']        = 4;

    $config['full_tag_open']    = '<ul>';
    $config['full_tag_close']   = '</ul>';

    $config['cur_tag_open']     = '<li class="active"><a href="#">';
    $config['cur_tag_close']    = '</a></li>';

    $config['num_tag_open']     = '<li>';
    $config['num_tag_close']    = '</li>';

    $config['next_tag_open']    = '<li>';
    $config['next_tag_close']   = '</li>';

    $config['prev_tag_open']    = '<li>';
    $config['prev_tag_close']   = '</li>';

    $config['last_tag_open']    = '<li>';
    $config['last_tag_close']   = '</li>';

    $config['first_tag_open']   = '<li>';
    $config['first_tag_close'] = '</li>';



    $CI->pagination->initialize($config);

    return $CI->pagination->create_links();
}