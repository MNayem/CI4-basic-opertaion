<?php

namespace App\Controllers;
use App\Models\User;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function login()
    {
        //echo "Hello!";
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function signupStore()
    {

        helper('form');

        // Check whether the form is submitted
        if(! $this->request->is('post')) {
            // return the form since the form is not submitted
            return view('signup');
        }

        $post = $this->request->getPost(['name', 'email', 'phone', 'password']);

        if (! $this->validateData($post, [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|min_length[8]|max_length[50]|valid_email|is_unique[users.email]',
            'phone' => 'required|min_length[11]|max_length[20]',
            'password' => 'required|min_length[6]|max_length[255]',
        ])) {
            // The validation fails, so returns the form
            return view('signup');
        }

        $model = model(User::class);

        $data = $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'phone' => $post['phone'],
            'password' => $post['password']
        ]);
        return redirect()->to(base_url('/'))->with('status','Registration successful! Login now');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new User();
 
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
         
        $user = $userModel->where('email', $email)
                          ->where('password', $password)
                          ->first();
 
        if(is_null($user)) {
            return redirect()->back()->withInput()->with('status', 'Invalid username or password.');
        }
 
        /*$pwd_verify = password_verify($password, $user['password']);
 
        if(!$pwd_verify) {
            return redirect()->back()->withInput()->with('status', 'Invalid username or password.');
        }*/
 
        $ses_data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'isLoggedIn' => TRUE
        ];
 
        $session->set($ses_data);
        return redirect()->to('/dashboard');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout()
    {
        $session = session();
		
        $session->destroy();

        return redirect()->to('/');
    }
}
