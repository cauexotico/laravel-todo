<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $taskGroup = $user->taskGroups()->create([
            'name' => 'Easyest task ever',
        ]);

        $taskGroup->tasks()->create([
            'description' => 'breathe',
        ]);
    }
}
