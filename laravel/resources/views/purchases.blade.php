@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4 md:px-0">
    <h1 class="text-3xl md:text-4xl font-bold text-white mb-6 text-center">Your Purchases</h1>
    @if($orders->isEmpty())
        <p class="text-gray-400 text-center">You have no purchases yet.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full w-full bg-[#0a0a0a] rounded-lg shadow-lg text-xs md:text-base table-auto">
                <thead class="bg-[#050505]">
                    <tr>
                        <th class="px-3 py-2 text-left text-gray-300">#</th>
                        <th class="px-3 py-2 text-left text-gray-300">Order ID</th>
                        <th class="px-3 py-2 text-left text-gray-300">Date</th>
                        <th class="px-3 py-2 text-left text-gray-300">Total</th>
                        <th class="px-3 py-2 text-left text-gray-300">Status</th>
                        <th class="px-3 py-2 text-left text-gray-300">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="border-b border-[#1a1a1a]">
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 break-words whitespace-normal">{{ $loop->iteration }}</td>
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 break-words whitespace-normal">{{ $order->order_id ?? $order->id }}</td>
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 break-words whitespace-normal">{{ $order->created_at->format('M d, Y') }}</td>
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 break-words whitespace-normal">₹{{ number_format($order->total_amount, 2) }}</td>
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 capitalize break-words whitespace-normal">{{ $order->status }}</td>
                            <td class="px-2 py-3 md:px-3 md:py-4 text-gray-200 break-words whitespace-normal">
                                <a href="{{ route('purchases.show', $order->id) }}" class="text-[#00e5ff] hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
