<?php

function render_partial($template, $data = array())
{
    // $CI =& get_instance();
    return view($template, $data);
}

function preview_session()
{
    echo preview($_SESSION);
}

function encrypt_decrypt($action, $string)
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key     = 'This is my secret key:!super@duper#hyper$';
    $secret_iv      = 'This is my secret iv:!super@duper#hyper$';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a
    // warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

function genUniqueKey($length = 10, $type = 0) // 0 = alphanumeric, 1 = numeric, 2 = alphabets

{
    $token          = "";
    $codeAlphabet_u = "ABCDEFGHJKMNPQRSTUVWXYZ";
    $codeAlphabet_l = "abcdefghjkmnpqrstuvwxyz";
    $codeAlphabet_n = "0123456789";

    if ($type == 1) {
        $codeAlphabet = $codeAlphabet_n;
    } else if ($type == 2) {
        $codeAlphabet = $codeAlphabet_u . $codeAlphabet_l;
    } else {
        $codeAlphabet = $codeAlphabet_u . $codeAlphabet_l . $codeAlphabet_n;
    }

    $max = strlen($codeAlphabet); // edited

    for ($i = 0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max - 1)];
    }
    return $token;
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) {
        return $min;
    }
    // not so random...
    $log    = ceil(log($range, 2));
    $bytes  = (int) ($log / 8) + 1; // length in bytes
    $bits   = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function reArrayFiles($imgsLoaded)
{
    $imgsList = array();

    foreach ($imgsLoaded as $k1 => $v1) {
        foreach ($v1 as $k2 => $v2) {
            $imgsList[$k2][$k1] = $v2;
        }
    }
    return $imgsList;
}

function sendSMS($to, $body)
{
    $url    = SMS_URL;
    $fields = [
        "to"   => $to,
        "body" => $body,
    ];
    // $fields = json_encode($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

function current_date($length = '', $last_date = false)
{
    date_default_timezone_set("Asia/Kuala_Lumpur");
    if ($length != '' && isset($length) && !$last_date) {
        return substr(date("Y-m-d H:i:s"), 0, $length);
    } else if ($last_date) {
        return date("Y-m-t H:i:s");
    } else if (($last_date) && ($length != '') && (isset($length))) {
        return substr(date("Y-m-t H:i:s"), 0, $length);
    } else {
        return date("Y-m-d H:i:s");
    }
}

function uploadImg($array = [], $str = '')
{
    $array_1 = [];
    // option 1 [start]
    foreach ($array as $key => $value) {
        if ($value['size'] > 0) {
            $ext      = explode("/", $value['type']);
            $ext      = end($ext);
            $fileName = uniqid() . '.' . $ext;

            $dest = fopen("ftp://" . FTP_USER . ":" . FTP_PASS . "@" . FTP_URL . "/" . $str . $fileName, "wb");
            $src  = file_get_contents($value['tmp_name']);

            fwrite($dest, $src, strlen($src));
            fclose($dest);
            $array_1[$key] = $fileName;
        }
    }
    return $array_1;
    // option 1 [end]
}
