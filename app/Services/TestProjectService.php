<?php

/**
 * Created by PhpStorm.
 * User: dipak
 * Date: 31/1/17
 * Time: 5:29 PM
 */

use App\testProject;

class TestProjectService
{
    public function login($params = array())
    {
        if(isset($params['userNameSignUp']))
        {
            $dbQueryParams = new testProject();
            $dbQueryParams->user_name = $params['userNameSignUp'];
            $dbQueryParams->email = $params['emailSignUp'];
            $dbQueryParams->password = bcrypt($params['passwordSignUp']);
            $dbQueryParams->save();
            dd($dbQueryParams);
            /*$queryParams = array();
            $queryParams['userName'] = $params['userNameSignUp'];
            $queryParams['email'] = $params['emailSignUp'];
            $queryParams['password'] = $params['passwordSignUp'];
            $queryParams['passwordConfirm'] = $params['passwordSignUpConfirm'];*/
        }

    }
}