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

    // create new user
    public function create(){
        helper(['form']);
        $data = [];
        return view('user_create');
    }

    // store: insert data
    public function store(){

        helper(['form']);
        $rules = [
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email'
            
        ];

        if($this->validate($rules)){

            $userModel = new UserModel();
            $data ['name'] = $this->request->getVar('name');
            $data ['email'] = $this->request->getVar('email');
            
            $userModel->insert($data);

            return $this->response->redirect(site_url('/users'));
        }else{
            $data['validation'] = $this->validator;
            echo view('user_create', $data);
        }   
    }

    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users'));
    }   

    // show single user edit


    // public function edit($id = null){
    //     $userModel = new UserModel();
    //     $data['user_obj'] = $userModel->where('id', $id)->first();
    //     return view('edit_user', $data);
    // }

    public function edit($id){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->find($id);
        // print_r($data);
        return view('edit_user', $data);
    }

    // update user data


    // public function update(){
    //     $userModel = new UserModel();
    //     $id = $this->request->getVar('id');
    //     $data = [
    //         'name' => $this->request->getVar('name'),
    //         'email'  => $this->request->getVar('email'),
    //     ];
    //     $userModel->update($id, $data);
    //     return $this->response->redirect(site_url('/users'));
    // }

    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email')
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users'));
    }



}
