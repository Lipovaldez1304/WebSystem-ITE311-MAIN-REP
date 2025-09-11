<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');         // Default → goes to Home controller
$routes->get('index', 'Home::index');     // For when user clicks Home
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

// ✅ Authentication Routes
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Auth::dashboard');
