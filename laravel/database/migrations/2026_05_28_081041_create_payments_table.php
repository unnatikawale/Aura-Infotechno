<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('gateway');
            $table->string('transaction_id')->nullable();
            $table->string('status')->default('pending');
            $table->decimal('amount', 10, 2);
            $table->json('response')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('payments');
    }
};