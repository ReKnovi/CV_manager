<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{
    public function addCv()
    {
        return view("cv_form");
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                "user_id" => "required",
                "name" => "required",
                "email" => "required",
                "phone" => "required",
                "technology" => "required",
                "level" => "required",
                "salary_expectation" => "required",
            ]);
            $cv = new Cv();
            $cv->user_id = $request->input('user_id');
            $cv->name = $request->input('name');
            $cv->email = $request->input('email');
            $cv->phone = $request->input('phone');
            $cv->technology = $request->input('technology');
            $cv->level = $request->input('level');
            $cv->salary_expectation = $request->input('salary_expectation');
            $cv->experience = $request->input('experience');
            $cv->save();
        } catch (Exception $e) {
            // dd('xd');
            return redirect()->route('add.cv')->with("error", $e->getMessage());
        }

        return redirect()->route('dashboard')->with("success", "CV added successfully");
    }
    // for searching cvs
    public function search(Request $request)
    {
        $query = $request->input('query');

        $cvs = DB::table('cvs')
            ->where('name', 'like', "%$query%")
            ->orWhere('technology', 'like', "%$query%")
            ->orWhere('interview_status', 'like', "%$query%")
            ->get();

        return view('dashboard', compact('cvs'));
    }

    public function viewMyCv($id)
    {
        $cv = CV::where('user_id', $id)->first();

        // Pass the CV to the view
        return view('viewmycv', compact('cv'));
    }
}
