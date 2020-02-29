<?php

class Request
{
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }


    public function getGet($name, $defalut = null)
    {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
        return $defalut;
    }


    public function getPost($name, $defalut = null)
    {
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
        return $defalut;
    }
    
    
    public function getHost()
    {
        if (!empty($_SERVER['HTTP_HOST'])) {
            return $_SERVER['HTTP_HOST'];
        }
        return $_SERVER['SERVER_NAME'];
    }
    

    public function isSsl()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON') {
            return true;
        }
        return false;
    }

    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}