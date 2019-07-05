<?php

use Core\Router;

$router =  new Router();
$router->get('','HomePage@home');
$router->get('index.php','HomePage@home');
$router->get('home','HomePage@home');
$router->get('about','AboutPage@about');
$router->get('gallery','GalleryPage@gallery');
$router->get('blog','BlogPage@blog');
$router->get('subscribe','SubscribePage@subscribe');
$router->get('calender','CalenderPage@calender');
$router->get('add-event','CalenderPage@addEvent');
$router->post('save-event','CalenderPage@saveEvent');
$router->post('book-event','CalenderPage@bookEvent');
$router->get('donate','DonatePage@donate');
$router->get('contact','ContactPage@contact');
$router->get('shop','ShopPage@shop');
$router->get('membership','MembershipPage@membership');
$router->get('all-members','MembershipPage@allMembers');
$router->get('logout','MembershipPage@logout');
$router->post('delete-member','MembershipPage@deleteMember');
$router->post('view-member','MembershipPage@viewMember');
$router->get('setup','SetupSystem@setup');

$router->post('add-member','SubscribePage@addMember');
$router->post('sign-in','MembershipPage@signIn');



