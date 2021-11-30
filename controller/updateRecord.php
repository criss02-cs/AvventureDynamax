<?php
session_start();
require_once '../functions.php';
$action = getParam('action', '');
require '../model/User.php';
$params = $_GET;
unset($params['action']);
unset($params['id']);
$queryString = http_build_query($params);
switch ($action) {

    case 'delete':


        $id = getParam('id_leggendari', 0);
        $res = delete($id);
        $message = $res ? 'Pokemon '.$id.' deleted' : 'Error deleting pokemon '.$id;
        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;
        header('Location:../index.php?'.$queryString);
        break;
    case 'save':
        $data = $_POST;

        $res = saveUser($data);
        if($res){
            $message=  'Pokemon inserted with id '.$res;
        } else {
            $message=    'ERROR INSERTING USER '. $data['username'];
        }

        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;

        header('Location:../index.php?'.$queryString);
        break;

    break;
    case 'store':
        $data = $_POST;
        $id = getParam('id',0);
        $res = storeUser($data, $id);

        if( $res['success']){
            $message = 'Pokemon '.$id.' updated' ;
        } else {
            $message = 'Error updating pokemon '.$id .':'. $res['error'];
        }

        $_SESSION['message'] = $message;
        $_SESSION['success'] = $res;
        header('Location:../index.php?'.$queryString);
        break;
}
