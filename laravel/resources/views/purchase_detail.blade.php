@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto py-12">
    <h1 class="text-3xl font-bold text-white mb-6">Order Details</h1>
    <div class="bg-[#0a0a0a] p-6 rounded-lg shadow-lg">
        <p class="text-gray-400 mb-4"><strong>Order ID:</strong> {{ $order->order_id ?? $order->id }}</p>
        <p class="text-gray-400 mb-4"><strong>Date:</strong> {{ $order->created_at->format('M d, Y') }}</p>
        <p class="text-gray-400 mb-4"><strong>Total:</strong> ₹{{ number_format($order->total_amount, 2) }}</p>
        <p class="text-gray-400 mb-4"><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
        <h2 class="text-xl font-semibold text-white mt-6 mb-2">Items</h2>
        <ul class="list-disc list-inside text-gray-300">
            @foreach($order->items as $item)
                <li>{{ $item['name'] ?? 'Item' }} - {{ $item['quantity'] ?? 1 }} × {{ $item['price'] ?? '' }}</li>
            @endforeach
        </ul>
    </div>
    <div class="mt-6">
        <a href="{{ route('purchases') }}" class="text-[#00e5ff] hover:underline">← Back to purchases</a>
    </div>
</div>
@endsection
