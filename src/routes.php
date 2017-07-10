<?php

/*
|--------------------------------------------------------------------------
| sojib admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get(/**
 * @return $this
 */
    '/admin', function () {

    $admins = DB::select("SELECT * FROM products");

    return view('admin::index')->with('admins', $admins);

});
