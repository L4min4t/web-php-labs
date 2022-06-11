<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Item;
use App\Models\Movie;
use App\Models\Plot;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Branch;

class SiteController extends Controller
{
    public function main() {
        return view('main');
    }

    public function menu() {
        return view('menu', ['burgers' => Type::find(2)->items, 'drinks' => Type::find(1)->items]);
    }

    public function find_us() {
        return view('find-us', ['DicapriosMovies' => Actor::find(1)->plots, 'filmsActors' => Plot::find(2)->actors]);
    }

    public function getBranchInfo(Request $request){
        return view("find-us", ['curId'=>$request->input('branch'),
        'curBranch' => Branch::where('number', '=', $request->input('branch'))->get(),
        'DicapriosMovies' => Actor::find(1)->plots, 'filmsActors' => Plot::find(2)->actors]);
    }
}
