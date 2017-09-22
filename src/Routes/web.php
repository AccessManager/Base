<?php

Route::get('/', function () {
    return redirect()->route('accounts.index');
});