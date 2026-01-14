<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOrderSeeder extends Seeder
{

    public function run(): void
    {
        $productOrder = \App\Models\ProductOrder::create([
            'name' => 'ordinateur',
            'price' => 999.99,
        ]);

        $productOrder->order()->create([
            'user_id' => 1,
            'amount' => 999.99,
            'status' => 'pending',
        ]);
    }
}
