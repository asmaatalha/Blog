<?php

class UserModel
{
    public function __construct()
    {
        $this->database = new Database;
        
    
    }

    public function login($add)
    {
        $this->database->query('INSERT INTO `admine`(`Username`, `Email`, `Password`) VALUES (:username,:email,:pass)');
        
        $this->database->bind(':username', $add['user_name']);
        $this->database->bind(':email', $add['user_email']);
        $this->database->bind(':pass', $add['user_pass']);

        
        if($this->database->execute()){
            return true;
        }else {
            return false;
        }
    }

    // public function login($email)
    // {
    //     $this->database->query('SELECT * FROM `admine` WHERE Email = :email, Password = :pass');

    //     $this->database->bind(':email', $email);
    //     $this->database->bind(':pass', $pass);

        
        
    // }
    
    public function getBlog()
    {
        $this->database->query("SELECT * FROM blog");
        return $this->database->resultSet();
    }

    public function addBlog($addB)
    {
        // print_r($addB);
        $this->database->query("INSERT INTO blog(Titre, Discription, Date) VALUES (:titre, :discript, :date)");
        $this->database->bind(':titre', $addB['add_titre']);
        $this->database->bind(':discript', $addB['add_discript']);

        $this->database->bind(':date', $addB['add_date']);

        $this->database->execute();
    }

    public function updateBlog($upd)
    {
        // print_r($upd);
        $this->database->query("UPDATE blog SET Titre = :titre, Discription = :discript WHERE id = :id");

        $this->database->bind(':titre', $upd['add_titre']);
        $this->database->bind(':discript', $upd['add_discript']);
        $this->database->bind(':id', $upd['id']);
        
        $this->database->execute();
    }

    public function deleteBlog($var)
    {
        $this->database->query("DELETE FROM blog WHERE id = :id");
        $this->database->bind(':id',$var);
        
        $result = $this->database->single();
        return $result;
    }
}
