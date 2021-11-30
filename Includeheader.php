<?php
$pageUrl = $_SERVER['PHP_SELF'];

$updateUrl = 'controller/updateRecord.php';
$orderDir = getParam('orderDir', 'ASC');

$orderBy = getParam('orderBy', 'id_leggendari');

$orderByColumns =  getConfig('orderByColumns',['id_leggendari','nome','tipo1','tipo2']);

$recordsPerPage = getParam('recordsPerPage', getConfig('recordsPerPage'));

$recordsPerPageOptions = getConfig('recordsPerPageOptions',[5,10,20,30,50]);

$search = getParam('search' ,'') ;

$page = getParam('page',1);
