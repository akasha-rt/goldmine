<?php
$user_id = $_REQUEST['user_id'];
$user    = new User();
$user->retrieve($user_id);

$dateformat                          = $user->getPreference('datef');
$timeformat                          = $user->getPreference('timef');
$currency                            = $user->getPreference('currency');
$default_currency_significant_digits = $user->getPreference('default_currency_significant_digits');
$timezone                            = $user->getPreference('timezone');
$ut                                  = $user->getPreference('ut');
$num_grp_sep                         = $user->getPreference('num_grp_sep');
$default_locale_name_format          = $user->getPreference('default_locale_name_format');
$dec_sep                             = $user->getPreference('dec_sep');

$result['datef']                               = $dateformat;
$result['timef']                               = $timeformat;
$result['currency']                            = $currency;
$result['default_currency_significant_digits'] = $default_currency_significant_digits;
$result['timezone']                            = $timezone;
$result['ut']                                  = $ut;
$result['num_grp_sep']                         = $num_grp_sep;
$result['default_locale_name_format']          = $default_locale_name_format;
$result['dec_sep']                             = $dec_sep;
echo json_encode($result);
