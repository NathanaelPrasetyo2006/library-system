<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display admin dashboard with dynamic data.
     */
    public function index(Request $request)
    {
        $newArrivals = Book::orderBy('created_at', 'desc')->take(6)->get();
        $recentTransactions = Transaction::orderBy('created_at', 'desc')->take(10)->get();

        return view('dashboard_admin', compact('newArrivals', 'recentTransactions'));
    }
}
