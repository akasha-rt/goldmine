<?php
/***CONNECTOR SOURCE***/
$config['name'] = 'IBM SmartCloud';
$config['eapm']['enabled'] = false;
$config['eapm']['only'] = true;
$config['order'] = 14;
$config['properties']['oauth_consumer_key'] = '';
$config['properties']['oauth_consumer_secret'] = '';
$config['encrypt_properties'][0] = 'oauth_consumer_secret';
