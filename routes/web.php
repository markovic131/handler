<?php
//http://hndlr.agropro.mk/handle/hard

Route::post('handle/hard', function () {

    $messageHeaders = imap_rfc822_parse_headers(request()->get('message-headers'));
    dd($messageHeaders['Sender']);
    Mail::to('psybaron@gmail.com')->send(
            new App\Mail\HardBounces(request()->all())
        );
    // request()->get('error');
    // request()->get('recipient');
    // request()->get('code');
    // request()->get('message-headers');

    return response('Received!', 200);
    //write to log file.
});

//http://hndlr.agropro.mk/handle/dropped
Route::post('handle/dropped', function () {

    Mail::to('psybaron@gmail.com')->send(
            new App\Mail\DroppedMessage(request()->all())
        );
    // request()->get('error');
    // request()->get('recipient');
    // request()->get('code');
    // request()->get('message-headers');

    //write to log file.
    return response('Received!', 200);
});

//http://hndlr.agropro.mk/handle/dropped
Route::get('/', function () {
    die('Hello dear! :) ' . time());
});

