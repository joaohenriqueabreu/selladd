<?php
    function parse_path()
    {
        $path = array();
        if (isset($_SERVER['REQUEST_URI'])) {
            $request_path = explode('?', $_SERVER['REQUEST_URI']);

            $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
            $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
            $path['call'] = utf8_decode($path['call_utf8']);
            if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
                $path['call'] = '';
            }
            $path['call_parts'] = explode('/', $path['call']);

            if (array_key_exists(1, $request_path))
                $path['query_utf8'] = urldecode($request_path[1]);

            if (array_key_exists(1, $request_path))
                $path['query'] = utf8_decode(urldecode($request_path[1]));

            if (array_key_exists('query', $path)) {
                $vars = explode('&', $path['query']);
                foreach ($vars as $var) {
                    $t = explode('=', $var);
                    $path['query_vars'][$t[0]] = $t[1];
                }
            }
        }
        return $path;
    }

    $path_info = parse_path();

//    switch ($path_info['call_parts'][0]) {
//        case 'revendedor':
//            if(array_key_exists(1, $path_info['call_parts']))
//                include_once('forms/revendedor.php');
//            else
//                include_once('pages/revendedor.php');
//            break;
//
//        case 'parceiro':
//            if(array_key_exists(1, $path_info['call_parts']))
//                include_once('forms/parceiro.php');
//            else
//                include_once('pages/parceiro.php');
//            break;
//
//        default:
//            include_once('pages/master.php');
//            break;
//    }

    switch ($path_info['call_parts'][0]) {
        case 'revendedor':
            include_once('pages/revendedor.php');
            break;

        case 'parceiro':
            include_once('pages/parceiro.php');
            break;

        case 'novo-revendedor':
            include_once('forms/revendedor.php');
            break;

        case 'novo-parceiro':
            include_once('forms/parceiro.php');
            break;

        default:
            include_once('pages/landing.php');
            break;
    }
?>


