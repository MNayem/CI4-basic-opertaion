<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class StudentController extends BaseController
{
    public function index()
    {
        return view('student/index');
    }
    public function store()
    {
        $student = new Student();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course'),
        ];
        $student->save($data);
        // return redirect()->to(base_url('student'))->with('status','Student has been added sccessfully!');
        $msg = ['status'=>'Student inserted successfully!'];
        return $this->response->setJSON($msg); 
    }
}
