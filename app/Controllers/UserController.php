<?php

class UserController extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('UserModel');
        $this->userSession = new Session;
    }
    
    public function login()
    {
        if (isset($_POST['submit'])){
            $data = [
                'user_name' => $_POST['name'],
                'user_email' => $_POST['email'],
                'user_pass' => $_POST['pwd'],
            ];
            if($this->userModel->login($data)){
                redirect('UserController/index');
            }else{
                $this->view('UsersView/login');
            }
            
            
            
        }
        else {
            
            $this->view('UsersView/login');
        }
    }




    // public function add()
    // {
    //     if (isset($_POST['add'])) {
    //         $this->view('UserView/insert');
    //     }
    // }





    // public function login()
    // {
    //     $this->userSession->startSession();

    //     if (isset($_SESSION['email'])) {
    //         header('location:' . URLROOT . '/UserController/login');
    //     }
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //         $data = [
    //             'email' => trim($_POST['email']),
    //             'password' => trim($_POST['pwd']),
    //             'email_err' => '',
    //             'password_err' => '',
    //         ];
    //         //email validation
    //         if (empty($data['email'])) {
    //             $data['email_err'] = 'please enter your email';
    //         }
    //         //password validation
    //         if (empty($data['password'])) {
    //             $data['password_err'] = 'please enter your password';
    //         }
    //     }
    // }


    public function visiteur()
    {
        $visiteur = $this->userModel->getVisiteur();
        $this->view('UsersView/visiteur', $visiteur);
    }

    public function index()
    {
        $blog = $this->userModel->getBlog();
        $this->view('UsersView/index', $blog); 
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            $data1 = [
                'add_titre' => $_POST['titre'],
                'add_discript' => $_POST['discript'],
                'add_date' => $_POST['date'],
            ];
            $this->userModel->addBlog($data1);
            header('location:' . URLROOT . '/UserController/index');
        }
        else {
            $this->view('UsersView/insert');
        }
    }

    public function update($id)
    {
        if (isset($_POST['update'])) {
            $data2 = [
                'id' => $id,
                'add_titre' => $_POST['titre'],
                'add_discript' => $_POST['discript'],
            ];
            $this->userModel->updateBlog($data2);
            header('location:' . URLROOT . '/UserController/index');
        }
        else {
            $this->view('UsersView/update');
        }
    }

    public function delete($id)
    {
        $this->userModel->deleteBlog($id);
        header('location:' . URLROOT . '/UserController/index');
        
    }
}