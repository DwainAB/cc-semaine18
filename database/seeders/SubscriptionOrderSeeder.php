<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionOrderSeeder extends Seeder
{

    public function run(): void
    {
        $subscriptionOrder = \App\Models\SubscriptionOrder::create([
            'name' => 'Premium',
            'price' => 29.99,
            'duration_months' => 12,
        ]);

        $subscriptionOrder->order()->create([
            'user_id' => 1,
            'amount' => 29.99,
            'status' => 'paid',
        ]);
    }
}
