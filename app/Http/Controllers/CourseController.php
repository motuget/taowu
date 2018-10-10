<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $course = DB::table('course')->get();
        return view('course', ['course'=>$course]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show()
    {

    }
}
