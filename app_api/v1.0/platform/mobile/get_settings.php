<?php
// +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+  
// +------------------------------------------------------------------------+
// | The Ultimate Video Sharing Platform
// | Copyright (c) 2021 Rubi Dev. All rights reserved.
// +------------------------------------------------------------------------+

if (!PT_IsAdmin()) {
	$config = array_intersect_key($config, array_flip($site_public_data));
}
$config['currency_array'] = $pt->config->currency_array;
$config['currency_symbol_array'] = $pt->config->currency_symbol_array;
$config['payed_subscribers'] = $pt->config->payed_subscribers;
$config['continents'] = $pt->continents;
$config['movies_categories'] = $pt->movies_categories;
$config['sub_categories'] = $pt->sub_categories;
$config['categories'] = $pt->categories;

$response_data       = array(
    'api_status'     => '200',
    'api_version'    => $api_version,
    'data'           => array(
        'site_settings'  => $config
    )
);
