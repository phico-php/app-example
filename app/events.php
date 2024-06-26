<?php
/**
 * Define your Phico event handlers here.
 *
 */

// handle not found
$app->on('404', function ($request, $e) {

    if ($request->isXhr()) {
        return response(404)->json([
            'status' => 'not found',
            'message' => 'Sorry, that page cannot be found anywhere'
        ]);
    }

    // return html
    return response(404)->html('<h1>Not Found</h1>');

});
// handle not authorised
$app->on('401', function ($request, $e) {

    if ($request->isXhr()) {
        return response(401)->json([
            'status' => 'unauthorised',
            'message' => 'Sorry, you cannot do that'
        ]);
    }

    // return html
    return response(401)->html('<h1>Unauthorised</h1>');

});
// handle server errors and not implemented the same
$app->on(['500', '501'], function ($request, $e) {

    if ($request->isXhr()) {
        return response($e->getCode())->json([
            'status' => 'server error',
            'message' => 'Sorry, something screwed up'
        ]);
    }

    // return html
    return response($e->getCode())->html('<h1>Server Error</h1>');

});
