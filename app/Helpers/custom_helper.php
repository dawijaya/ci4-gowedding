<?php

function userLogin()
{
    if (!session()->has('id_user')) {
        return null;
    }

    $db = \Config\Database::connect();
    return $db->table('users')->where('id_user', session('id_user'))->get()->getRow();
}
