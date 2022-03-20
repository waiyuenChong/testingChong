<?php

$CI_INSTANCE = [];  # It keeps a ref to global CI instance

function register_ci_instance(\App\Controllers\MY_Controller &$_ci)
{
    global $CI_INSTANCE;
    $CI_INSTANCE[0] = &$_ci;
}


function &get_instance(): \App\Controllers\MY_Controller
{
    global $CI_INSTANCE;
    return $CI_INSTANCE[0];
}