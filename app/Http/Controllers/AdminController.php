<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $cvs = Cv::all();
        return view('admin.dashboard', [
            'cvs' => $cvs,
        ]);
    }

    public function viewAllCvs()
    {
        $cvs = Cv::all();
        return view('admin.view_all_cvs', ['cvs' => $cvs]);
    }

    public function showIndividualCvs($id)
    {
        $cv = Cv::findOrFail($id);
        return view('admin.individualcv', ['cv' => $cv]);
    }

    public function searchCvs(Request $request)
    {
        $search = $request->input('search');
        
        // Perform the search using the $search variable
        $cvs = Cv::where('name', 'like', '%' . $search . '%')->get();

        return view('admin.view_all_cvs', ['cvs' => $cvs]);
    }
}
