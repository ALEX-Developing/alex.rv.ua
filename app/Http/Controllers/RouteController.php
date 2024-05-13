<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function account() {
        return view('account.index');
    }
}
