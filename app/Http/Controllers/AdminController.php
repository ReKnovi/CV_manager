<?php

namespace App\Http\Controllers;

use App\Models\Cv;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function viewAllCvs()
    {
        $cvs = Cv::all();
        return view('admin.view_all_cvs', compact('cvs'));
    }
}
