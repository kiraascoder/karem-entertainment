<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OrderController extends Controller
{
    public function showOrderList()
    {
        $orders = Order::all(); // 

        return view('order-list', compact('orders'));
    }

    public function showMyOrderList()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('account', compact('orders'));
    }

    public function store(Request $request)
    {

        $prefix = "#";
        $orderID = IdGenerator::generate([
            'table' => 'orders',
            'length' => 9,
            'prefix' => $prefix,
            'field' => 'order_id',
        ]);


        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'phone-number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'bookingDate' => 'required|date',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ]);


        Order::create([
            'order_id' => $orderID,
            'full_name' => $validated['name'],
            'location' => $validated['location'],
            'phone_number' => $validated['phone-number'],
            'email' => $validated['email'],
            'booking_date' => $validated['bookingDate'],
            'service' => $validated['service'],
            'message' => $validated['message'] ?? null,
            'user_id' => Auth::id(),
        ]);


        return redirect()->route('account')->with('success', 'Booking successfully created!');
    }
}
