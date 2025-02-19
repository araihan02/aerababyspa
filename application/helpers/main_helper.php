<?php
defined('BASEPATH') or die('Access Denied');

function PopulateForm()
{
    $CI = &get_instance();
    $post = array();
    foreach (array_keys($_POST) as $key) {
        $post[$key] = $CI->input->post($key);
    }
    return $post;
}
