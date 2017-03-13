<?php

/**
 * Created by PhpStorm.
 * User: dipak
 * Date: 13/3/17
 * Time: 6:21 PM
 */
namespace App\Repository;

use App\UserModel;

class UrlShorterRepository
{
    public function Insert(array $params)
    {
        $user = new UserModel();

        $user->email = $params['email'];
        $user->name = $params['name'];
        $user->password = $params['password'];

        $user->save();
    }
}