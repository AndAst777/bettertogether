<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    //
    public function admin()
    {
        $applications = Application::all();
        return view('admin', compact("applications"));
    }

    public function index()
    {

        $applications = Application::all();
        return view('main', compact("applications"));
    }

    public function store(Request $request)
    {
        $user = auth()->user()->id;
        $application = new Application();
        $application->name = $request->name;
        $application->image = $request->image;
        $application->save();
    }
}
