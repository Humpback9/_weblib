<?php
define("TIME_STAMP", mktime());
define('_COOKIE_DOMAIN_', '');

/**
 * member
 */
function get_member()
{

}

function set_member()
{

}

function set_session($session_name, $value)
{
    // PHP 버전별 차이를 없애기 위한 방법
    $$session_name = $_SESSION[$session_name] = $value;
}

function get_session($session_name)
{
    return isset($_SESSION[$session_name]) ? $_SESSION[$session_name] : '';
}

function set_cookie($cookie_name, $value, $expire)
{
    setcookie(md5($cookie_name), base64_encode($value), TIME_STAMP + $expire, '/', _COOKIE_DOMAIN_);
}

function get_cookie($cookie_name)
{
    $cookie = md5($cookie_name);
    if (array_key_exists($cookie, $_COOKIE))
        return base64_decode($_COOKIE[$cookie]);
    else
        return "";
}

function del_cookie($cookie_name)
{
    $cookie = md5($cookie_name);
    if (isset($_COOKIE[$cookie])) {
        unset($_COOKIE[$cookie]);
        setcookie($cookie, null, -1, '/');
        return true;
    } else {
        return false;
    }
}
