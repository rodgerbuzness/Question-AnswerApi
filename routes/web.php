<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->post('createuser', 'UsersController@create');
$router->post('userlogin', 'UsersController@login');
$router->get('getquestions/{id}', 'UsersController@getQuestions');
$router->post('createquestion', 'QuestionsController@create');
$router->get('getallquestion', 'QuestionsController@getAll');
$router->post('createcategory', 'CategoryController@create');
$router->post('submitanswer', 'AnswersController@submit');