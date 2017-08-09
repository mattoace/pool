<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
//$route['default_controller'] = 'services';
$route['home'] = 'pages/view';

$route['fetch-playlist'] = 'PlaylistController/fetchPlaylist';
$route['event'] = 'pages/view/event';
$route['signin'] = 'pages/view/signin';
$route['user-register'] = 'UserController/register';
$route['user-check'] = 'UserController/check';
$route['user-profile'] =  'pages/view/profile';
$route['music-upload'] =  'MusicController/upload'; 
$route['cevent'] =  'pages/view/eventcategories';
$route['mevent'] =  'pages/view/musictypes';
$route['aevent'] =  'pages/view/additionaleventdetails';


$route['video'] =  'pages/view/video';
   
