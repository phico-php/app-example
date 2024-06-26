<?php
/**
 * Add your app routes here.
 *
 * Add the routes using $app or require
 * additional routes files for your modules.
 */

require path('app/Phico/routes.php');

$app->get('/api', function ($request) {

    return response()->json([
        'status' => 'ok',
        'message' => 'This is an API route'
    ]);

});
