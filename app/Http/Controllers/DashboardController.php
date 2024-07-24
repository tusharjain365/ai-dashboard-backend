<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\BusinessData;
use App\Models\CallStatistic;
use App\Models\DailySales;
use App\Models\DailyCalls;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Retrieve call statistics for the user
        $callStatistics = CallStatistic::where('user_id', $user->id)->first();

        // Retrieve business data for the user
        $businessData = BusinessData::where('user_id', $user->id)->get();

        // Retrieve daily sales and calls statistics for the user
        $dailySales = DailySales::where('user_id', $user->id)->get(); // Filter by user_id
        $dailyCalls = DailyCalls::where('user_id', $user->id)->get(); // Filter by user_id

        // Return the dashboard view with the retrieved data
        return view('dashboard', compact(
            'user' ,
            'callStatistics',
            'businessData',
            'dailySales',
            'dailyCalls'
        ));
    }
}
