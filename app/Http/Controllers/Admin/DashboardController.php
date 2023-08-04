<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use App\Models\Certificates;


class DashboardController extends Controller
{
    public function dashboard(){
        $data=[];
        return view('admin.dashboard', $data);
    }

    

}