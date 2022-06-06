<?php

namespace App\Models;

use PDO;

class Branch
{
    public $id;
    public $address;
    public $phone;
    public $managerName;

    public function __construct($id){
        $this->id = $id;
        $conn = new PDO("mysql:host=localhost;dbname=burgera", 'root', '111111');
        $data = $conn->query("SELECT * FROM branch_info WHERE number = $this->id");
        $data = $data->fetchAll();
        $data = $data[0];
        $this->address =$data[1];
        $this->phone =$data[2];
        $this->managerName =$data[3];
    }

    public function __toString(){
        return "$this->address<br>тел. $this->phone<br>менеджер $this->managerName";
    }
}
