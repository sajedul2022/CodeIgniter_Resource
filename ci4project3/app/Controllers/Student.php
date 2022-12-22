<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;

class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = "All Students";
        $modeldata = new StudentModel();
        $data['students'] = $modeldata->findAll();
        // print_r($data);
        return view("students/student_list", $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = "Add new Student";
        return view('students/add_student', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create(){

        $model = new StudentModel();

        // ............... get form data ...............
        // echo $this->request->getPost('name');

        // $data['name'] = $this->request->getPost('name');
        // $data['phone'] = $this->request->getPost('phone');
        // $data['email'] = $this->request->getPost('email');
        // $data['address'] = $this->request->getPost('address');

        // or

        $data = $this->request->getPost();
        // print_r($data);

        $model->save($data);

        // Redirect 

        // $data['students'] = $model->findAll();
        // return view("students/student_list", $data);

        // return redirect()->back();
        // return redirect("Student"); // controller class name

        return redirect()->to('/student');

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null){
        $model = new StudentModel();
        $data['student'] = $model->find($id);

        return view("students/edit_student", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null){

        $model = new StudentModel();
        $data = $this->request->getPost();

        if($model->update($id, $data)){
            return redirect()->to('/student');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null){

        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('student');
    }
}
