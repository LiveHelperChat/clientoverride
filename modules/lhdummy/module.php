<?php

$Module = array( "name" => "Dummy module" );

$ViewList = array();
   
$ViewList['test'] = array( 
    'params' => array(),   
    'uparams' => array() 
);

$ViewList['testadmin'] = array(
    'params' => array(),
    'uparams' => array(),
    'functions' => array( 'configuration' )
);
   
$FunctionList = array();

$FunctionList['admin'] = array('explain' => 'Allow access only if permission is granted');
