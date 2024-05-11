<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function projects() {
        return view('projects.index');
    }

    public function team() {
        return view('team');
    }

    public function services() {
        return view('services.index');
    }
}
