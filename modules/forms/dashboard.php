<?php

$http = eZHTTPTool::instance();

$viewParameters = array();
if ( isset( $Params['Offset'] ) )
    $viewParameters['offset'] = (int) $Params['Offset'];

$tpl = eZTemplate::factory();

$tpl->setVariable('blocks', eZINI::instance( 'ezforms.ini' )->variable( 'Dashboard', 'DashboardBlocks' ) );
$tpl->setVariable( 'view_parameters', $viewParameters );
$tpl->setVariable( 'persistent_variable', false );

$Result = array();
$Result['content'] = $tpl->fetch( 'design:forms/dashboard.tpl' );

$contentInfoArray = array();
$contentInfoArray['persistent_variable'] = false;
if ( $tpl->variable( 'persistent_variable' ) !== false )
    $contentInfoArray['persistent_variable'] = $tpl->variable( 'persistent_variable' );

$Result['content_info'] = $contentInfoArray;