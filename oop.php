<?php

class User  {

    public $name='';
    public $email='';
    public $password='';


public function createUser(){

 $data=new mysqli('localhost:3306',
     'root',
     '',
     'skillup');
 $query=("INSERT INTO users2 (`name`,`email`,`password`) VALUES ('$this->name','$this->email','$this->password');");
 $data->query($query);

}

    public function getUserInfo(){

        $data=new mysqli('localhost:3306',
            'root',
            '',
            'skillup'); /* Увы, я не знаю, правильно повторять это в ооп */
        $query=("SELECT * FROM users2  WHERE name='$this->name';");
        $info=$data->query($query)->fetch_all(MYSQLI_ASSOC);
        return $info;
    }

    public function deleteUser(){

        $data=new mysqli('localhost:3306',
            'root',
            '',
            'skillup');
        $query=("DELETE FROM users2  WHERE name='$this->name';");
        $data->query($query);

    }

    public function updateUser(){

        $data=new mysqli('localhost:3306',
            'root',
            '',
            'skillup');
        $query=("UPDATE users2  SET email='$this->email' WHERE name='$this->name' ;");
        $data->query($query);

    }

}
?>
