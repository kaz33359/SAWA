<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

function getUserTempId()
{
    if (!session()->has('USER_TEMP_ID')) {
        $rand = rand(111111111, 999999999);
        session()->put('USER_TEMP_ID', $rand);
        return $rand;
    } else {
        return session()->get('USER_TEMP_ID');
    }
}

?>