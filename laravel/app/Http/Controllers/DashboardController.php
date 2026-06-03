<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Show the dashboard with user info and purchase chart.
     */
    public function index()
    {
        $user = Auth::user();
        // Get orders for the authenticated user
        $orders = Order::where('user_id', $user->id)->orderBy('created_at')->get();

        // Prepare monthly purchase data for the current year
        $labels = [];
        $data = [];
        $currentYear = Carbon::now()->year;
        // Initialize all months with zero
        for ($m = 1; $m <= 12; $m++) {
            $labels[] = Carbon::createFromDate($currentYear, $m, 1)->format('M');
            $data[$m] = 0;
        }
        foreach ($orders as $order) {
            if (Carbon::parse($order->created_at)->year === $currentYear) {
                $month = (int) Carbon::parse($order->created_at)->format('n');
                $data[$month]++;
            }
        }
        // Re-index data to be a simple array matching $labels order
        $monthlyData = array_values($data);

        return view('dashboard', [
            'labels' => $labels,
            'monthlyData' => $monthlyData,
        ]);
    }
}
?>
