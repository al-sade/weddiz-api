<?php

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

/*
-------------------------
----- suppliers API -----
-------------------------
*/

$app->get('/api/suppliers/{category_id}', 'SupplierController@getSuppliers');

$app->get('/api/suppliers', 'SupplierController@getAllSuppliers');

$app->get('/api/supplier/{supplier_id}', 'SupplierController@getSuppliersByCategory');

$app->post('/api/supplier', 'SupplierController@postSupplier');


/*
----------------------------
----- Testimonials API -----
----------------------------
*/

$app->get('/api/testimonials', 'TestimonialsController@getTestimonials');

$app->get('/api/testimonials/{supplier_id}', 'TestimonialsController@getTestimonialsBySupplier');

/*
----------------------------
------ Categories API ------
----------------------------
*/

$app->get('/api/categories', 'CategoryController@getCategories');


/*
-------------------------------
----- Recommendations API -----
-------------------------------
*/

$app->get('/api/recommendations/', 'RecommendationsController@getRecommendations');


/*
-------------------------------
----- Mailing API -----
-------------------------------
*/

//$app->get('/api/mail/', 'MailController@sendMail');
$app->post('/api/mail/', 'MailController@sendMail');



