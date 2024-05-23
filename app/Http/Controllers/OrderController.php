<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
        ]);

        // Create a new order
        $order = new Order();
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->order_type_id = 1; // Set default order type

        // Check if the user is logged in
        if (Auth::check()) {
            $order->is_login = true;
            $order->user_id = Auth::id();
        }

        // Save the order
        $order->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Order submitted successfully!');
    }
    public function archive(Order $order)
    {
        $order->order_status_id = 3;
        $order->save();

        return redirect()->back()->with('success', 'Order moved to archive');
    }
    public function success(Order $order)
    {
        $order->order_status_id = 2;
        $order->save();

        return redirect()->back()->with('success', 'Order moved to success');
    }
    public function new(Order $order)
    {
        $order->order_status_id = 1;
        $order->save();

        return redirect()->back()->with('success', 'Order moved to new');
    }
}
