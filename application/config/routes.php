<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['add'] = 'pizzas/add';

// EXEMPLO: cipizzas/pizzas/view/pizza-one --> ci_pizzas/pizzas/pizza-one
$route['pizzas/(:any)'] = 'pizzas/view/$1';

// ROUTE PARA AS LATEST PIZZAS
$route['pizzas'] = 'pizzas/index';

$route['default_controller'] = 'pages/view';

// EXEMPLO: cipizzas/pages/view/about --> ci_pizzas/about
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
