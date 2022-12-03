<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends BaseController
{
    
    // show users list
    public function index(){
        $userModel = new UserModel();
        $data['usersAll'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);

        
    }


}
