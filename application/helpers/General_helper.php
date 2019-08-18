<?php

function dd($var)
{
    die(var_dump($var));
}

function render($pageContent, $class_active, $data)
{
    $CI = &get_instance();
    $data['page_content'] = $pageContent;
    $data['page'] = $class_active;
    $CI->load->view($pageContent, $data);
}

function formatCurrency($data)
{
    return "Rp " . number_format(floatval($data), 2, ",", ".");
}