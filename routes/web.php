<?php


Route::post('handle', function () {
    return dd(request()->all());
});
