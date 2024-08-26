<?php
    require_once "./interscepter.php";

    function redirect($path) {
        header("Location: $path");
    }

    function rootURL($dir = __DIR__) {

        $root = "";
        $dir = str_replace('\\', '/', realpath($dir));

        //HTTPS or HTTP
        $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        //HOST
        $root .= '://' . $_SERVER['HTTP_HOST'];

        //ALIAS
        if (!empty($_SERVER['CONTEXT_PREFIX'])) {
            $root .= $_SERVER['CONTEXT_PREFIX'];
            $root .= substr($dir, strlen($_SERVER['CONTEXT_DOCUMENT_ROOT']));
        } else {
            $root .= substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
        }

        $root .= '/';

        $path = explode("/", $root);

        return $path[0] . "//" . $path[2] . "/" . $path[3];
    }

    function actualURL() {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        return $url;
    }