<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function projects() {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function team() {
        return view('team');
    }

    public function services() {
        return view('services.index');
    }

    public function account() {
        $users = User::all();
        $projects = Project::all();
        $payments = Payment::all();
        $orders = Order::all();
        
        // Calculate total amount for each project
        $totals = [];
        foreach ($projects as $project) {
            $total = 0;
            foreach ($project->payments as $payment) {
                $total += $payment->amount;
            }
            $totals[$project->id] = $total;
        }
        
        $usersTotalBalance = User::sum('balance');

        return view('account.index', compact('users', 'projects', 'payments', 'totals', 'usersTotalBalance', 'orders'));
    }
}
