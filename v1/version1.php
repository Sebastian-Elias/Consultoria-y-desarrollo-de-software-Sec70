<?php
$_esquema = $_SERVER['REQUEST_SCHEME']; // http o https
$_ubicacion = $_SERVER['HTTP_HOST']; //host
$_metodo = $_SERVER['REQUEST_METHOD']; //get, post, put, patcj, o delete
$_path = $_SERVER['REQUEST_URI']; // lo que está después del host
$_partes = explode('/', $_path);
$_version = $_ubicacion == 'localhost' ? $_partes[2] : null;
$_mantenedor = $_ubicacion == 'localhost' ? $_partes[3] : null;
$_parametros = [];
$_parametros = $_ubicacion == 'localhost' ? $_partes[4] : null;

if(strlen($_parametros)>0){
    $_parametros = explode('?', $_parametros)[1];
    $_parametros = explode('&', $_parametros);
} else {
    $_parametros = [];
}

header("Access-Control-Allow-Origin: *");//restricción de acceso
header("Acces-Control-Allow-Methods: GET, POST, PUT, PATH, DELETE");
header("Content-Type: application/json; charser=UTF-8");

//Autorization
$_header = null;
try{
    $_header = isset(getallheaders()['Authorization']) ? getallheaders()['Authorization'] : null;
    if($_header === null){
        throw new Exception('No tiene autorización');
    }
} catch (\Throwable $e){
    http_response_code(401);
    echo json_encode(['error' =>$e->getMessage()]);
}

//Token
$_token_get = 'Bearer get';
$_token_post = 'Bearer post';
$_token_put = 'Bearer put';
$_token_patch = 'Bearer patch';
$_token_delete = 'Bearer delete';