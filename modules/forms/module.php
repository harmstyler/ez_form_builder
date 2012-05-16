<?php

$Module = array( 'name'            => 'eZForms',
                 'variable_params' => true );

$ViewList = array();

$ViewList['dashboard'] = array(
    'functions'               => array( 'dashboard' ),
    'script'                  => 'dashboard.php',
    'default_navigation_part' => 'ezformsnavigationpart',
    'params'                  => array(),
    'unordered_params'        => array( 'offset' => 'Offset' ) );

$FunctionList = array();
//$FunctionList['read']          = array( 'Class' => $ClassID );
$FunctionList['dashboard']     = array();