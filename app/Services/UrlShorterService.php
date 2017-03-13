<?php
/**
 * Created by PhpStorm.
 * User: dipak
 * Date: 13/3/17
 * Time: 6:03 PM
 */

namespace App\Services;

use Facades\App\Repository\UrlShorterRepository;

class UrlShorterService
{
    public function signUp(Array $params)
    {
        //dd($params);
        $insertParams = array();

        $insertParams['email'] = $params['emailSignUp'];
        $insertParams['name'] = $params['firstNameSignUp'] . ' ' . isset($params['middleNameSignUp']) ? $params['middleNameSignUp'].' ' : '' . $params['lastNameSignUp'];
        $insertParams['password'] = $params['passwordSignUp'];

        return UrlShorterRepository::insert($insertParams);

    }
}