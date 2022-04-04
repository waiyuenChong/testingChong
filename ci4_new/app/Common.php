<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
 */

function preview($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function re_direct($url)
{
    //Redirects to Unauthorized main page
    header("Location: ".$url); die;
    // return redirect()->to($url);
}

