<?php
session_start();
ob_start();
$config['base_url'] = "http://localhost/do_an/admin/";
$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';
