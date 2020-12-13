<?php

/** @var \Laravel\Lumen\Routing\Router $router */
//eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiNjc5YTU5YmViMDY0OGUxYWNmOTcxODc4OGM3MjZkYzliNzViYjg3MDcyNTQ0YzUzMWUzZjY0OGE0ZTcxZWY2YTU5ZDU0ZjIwOTVkZGQ0ZGEiLCJpYXQiOjE2MDc0OTY1ODAsIm5iZiI6MTYwNzQ5NjU4MCwiZXhwIjoxNjM5MDMyNTc5LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.R5674tCzLGnN3QQtHX4Bla3s70yVzayDymoAhKSfNVqlTowx9fHwcKPHD4sylmLb02cvCDWc0JYOUKhgbrWxmeOxX0GkSuKESNbUQnDX9ZG-vL858NZ4731zEpfO51dFhpzij_HIZi5EJYUWuSbBdq7F16y_Or_IqhaPaejL9NTHHJsxC_OZsNUNc7XqBFvskOF_LksecLVHKEqbzg51801qdpgBddMAEyBYuno8EWYCAgRxIFsrSjv_cBQMofLn8qtGmsBKmpkglCmGHB8GOqd5TR6VuFf9OxB3xBf1ysa3eF43-urzkxDvTOshygxeQQSsNwCQmk0o5F23ONKVY8tDp8aY0aXtOoQ3DGdJCYlF0YtqzU3J1usB1miw0euTogS07Vi5rfb8jXEhojWBFvPqpi2qUCwFvtSeD3jmSLb1pfGzHZ8pp4pL0Ls65QVnvLcEol4K4ecaGmdztHuh_pQS0lE2x393kl_wv95hegJMR14Uv4FzC8_yxIo1QmTElVg5nqaf4CKb9o8lgPg1fbC5OB5Vv093aQJQCdYGS0a88No1jRtSSKEJWP-kc1cEWU60Ofp0KJI5ZA-WhrYNCaGWTYKAkUgHdJWKG2YatWUX7jkzHsRve5bRHDUs7tCXWxPhLsyFJYOinFZU6ZBQaC--N0uuLF6OKdKjfar7GjI
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware'=>'client.credentials'],function() use ($router){

$router->get('/users1', 'User1Controller@getUsers'); //show all users from site 1
$router->post('/users1', 'User1Controller@addUsers'); //create users from site 1
$router->get('/users1/{id}', 'User1Controller@showUser'); //find users with specific ID from site 1
$router->put('/users1/{id}', 'User1Controller@updateUser'); //update users with specific ID from site 1
$router->delete('/users1/{id}', 'User1Controller@deleteUser'); //delete users with specific ID from site 1



//routes for site 2
$router->get('/users2', 'User2Controller@getUsers'); //show all users from site 1
$router->post('/users2', 'User2Controller@addUsers'); //create users from site 1
$router->get('/users2/{id}', 'User2Controller@showUser'); //find users with specific ID from site 1
$router->put('/users2/{id}', 'User2Controller@updateUser'); //update users with specific ID from site 1
$router->delete('/users2/{id}', 'User2Controller@deleteUser'); //delete users with specific ID from site 1

});