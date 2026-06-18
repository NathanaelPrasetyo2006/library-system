<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $samples = [
            ['member_id' => '#LIB-2023-001', 'name' => 'Andi Saputra', 'email' => 'andi.saputra@email.com', 'join_date' => '12 Jan 2023', 'membership_status' => 'Active'],
            ['member_id' => '#LIB-2023-045', 'name' => 'Rina Permata', 'email' => 'rina.p@email.com', 'join_date' => '05 Mar 2023', 'membership_status' => 'Premium'],
            ['member_id' => '#LIB-2022-892', 'name' => 'Budi Kusuma', 'email' => 'budi_k@email.com', 'join_date' => '20 Des 2022', 'membership_status' => 'Expired'],
        ];

        foreach ($samples as $item) {
            Member::create($item);
        }
    }
}
