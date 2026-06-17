<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $samples = [
            ['member_name' => 'Jane Doe', 'book_title' => 'The Great Gatsby', 'action' => 'checkout', 'status' => 'completed'],
            ['member_name' => 'Mark Smith', 'book_title' => 'Sapiens: A Brief History', 'action' => 'return', 'status' => 'completed'],
            ['member_name' => 'Alice Lee', 'book_title' => 'Atomic Habits', 'action' => 'checkout', 'status' => 'pending'],
            ['member_name' => 'Robert White', 'book_title' => 'Deep Work', 'action' => 'return', 'status' => 'completed'],
        ];

        foreach ($samples as $item) {
            Transaction::create($item);
        }
    }
}
