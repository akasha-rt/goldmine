<?php
$userBean = BeanFactory::getBean('Users');
$view     = ViewFactory::loadView('loginas', 'Users', $userBean);

$view->options['show_header']     = false;
$view->options['show_title']      = false;
$view->options['show_subpanels']  = false;
$view->options['show_search']     = false;
$view->options['show_footer']     = false;
$view->options['show_javascript'] = false;

$view->process();
