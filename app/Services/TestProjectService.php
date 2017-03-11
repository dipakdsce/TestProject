<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: dipak
 * Date: 31/1/17
 * Time: 5:29 PM
 */

use App\testProject;
use Illuminate\Support\Facades\Hash;
class TestProjectService
{
    public function signUp($params = array())
    {
        $dbQueryParams = new testProject();
        $dbQueryParams->user_name = $params['userNameSignUp'];
        $dbQueryParams->email = $params['emailSignUp'];
        $dbQueryParams->password = bcrypt($params['passwordSignUp']);
        $dbQueryParams->first_name = $params['firstNameSignUp'];
        $dbQueryParams->middle_name = $params['middleNameSignUp'];
        $dbQueryParams->last_name = $params['lastNameSignUp'];
        $dbQueryParams->address = $params['addressSignUp'];
        $dbQueryParams->save();
        dd($dbQueryParams);
        /*$queryParams = array();
        $queryParams['userName'] = $params['userNameSignUp'];
        $queryParams['email'] = $params['emailSignUp'];
        $queryParams['password'] = $params['passwordSignUp'];
        $queryParams['passwordConfirm'] = $params['passwordSignUpConfirm'];*/
    }

    public function login($params =array())
    {
        $dbQuery = testProject::select('password');
        $dbQuery->where('user_name' , '=' , $params['username']);
        $queryResults = $dbQuery->get();
        $queryResults = $queryResults->toArray();
        foreach( $queryResults as $row)
        {
            if(Hash::check($params['password'],$row['password']))
            {
                echo "Correct";
            }
        }
    }
}