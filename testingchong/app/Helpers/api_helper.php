<?php

function callApi($url = "", $params = array())
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    if (isset($params) && !empty($params) && $params != array()) {
        curl_setopt($ch, CURLOPT_POST, true);

        $params_str = "";

        foreach ($params as $key => $value) {
            $params_str .= $key . '=' . $value . '&';
        }
        rtrim($params_str, '&');

        // set params
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params_str);
    }

    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result);
}
