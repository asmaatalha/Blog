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
            }
            else{
                $this->view('UsersView/login');
            }
        }
        else {
            $this->view('UsersView/login');
        }
    }

    

 // ***********************
    public function visiteur()
    {
        $visiteur2 = $this->userModel->getVisiteur();
        $this->view('UsersView/visiteur', $visiteur2);
    }

 // ***********************

 // ***********************
    public function home()
    {
        $home = $this->userModel->getHome();
        $this->view('UsersView/home', $home);
    }

 // ***********************
 // ***********************
    public function index()
    {
        $blog = $this->userModel->getBlog();
        $this->view('UsersView/index', $blog); 
    }
 // ***********************

    

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
            $data = $this->userModel->getBlogById($id);
            $this->view('UsersView/update', $data);
        }
    }

    public function delete($id)
    {
        $this->userModel->deleteBlog($id);
        header('location:' . URLROOT . '/UserController/index');
        
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($data = $this->userModel->searchBlog()) {
                $this->view('UsersView/search', $data);
            }
            else {
                $data = ["Search not found"];
            }
        }




        // if ($_SERVER($_POST['search'])) {
        //     $data3 = [
        //         'serch_titre' => $_POST['serch'],
        //     ];
        //     $this->userModel->searchBlog();
        // }
        // else {
            
        // }
    }
}