<?php

//catch all controler, page controller --> migrate page

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

//PrpjetsController, TasksController, UsersController


