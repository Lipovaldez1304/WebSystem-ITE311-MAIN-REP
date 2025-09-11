<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'password_confirm' => 'matches[password]'
            ];

            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $userModel->save([
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                ]);
                return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
            }
        }
        return view('auth/register');
    }

    public function login()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            $userModel = new UserModel();
            $user = $userModel->where('email', $this->request->getPost('email'))->first();

            if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'isLoggedIn' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        }
        echo view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
        echo view('auth/dashboard');
    }
}
