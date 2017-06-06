<?php


Route::post('handle', function () {
    return request()->all();
});
