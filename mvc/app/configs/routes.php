<?php
//Trang mặc định
$routes['default_controller'] = 'home';
$routes['trang-chu'] = 'home';
$routes['dang-nhap'] = 'signin';
$routes['dang-ki'] = 'signup';
$routes['dashboard/(.+)'] ='admin/dashboard/detail/$1';
//