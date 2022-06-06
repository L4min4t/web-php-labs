<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use PDO;

class SiteController extends Controller
{
    public function main() {
        return view('main');
    }

    public function menu() {
        return view('menu');
    }

    public function find_us() {
        return view('find-us');
    }

    public function getBranchInfo($value){
        $restaurant = new Branch($value);
        return view("find-us", ['curId'=>$value, 'data'=>['address'=>$restaurant->address,
            'phone' =>$restaurant->phone, 'mName'=> 'менеджер ' . $restaurant->managerName]]);
    }

    public function callMe(Request $request, $value=null){
        $conn = new PDO("mysql:host=localhost;dbname=burgera", 'root','111111');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO call_me(name, phone, date_time)
        VALUES (:name, :phone, :date_time)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':date_time', $time);
        $name = $request->input('name');
        $phone = $request->input('phone');
        $time = $request->input('time');
        $stmt->execute();
        return view("find-us");
    }
}
