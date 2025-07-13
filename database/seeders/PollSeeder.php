<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $poll = \App\Models\Poll::create([
        'title' => 'Quem deve ser o líder da turma?',
        'description' => 'Vote em um dos candidatos abaixo.',
        'status' => 'open',
    ]);

    $poll->options()->createMany([
        ['text' => 'João'],
        ['text' => 'Maria'],
        ['text' => 'Carlos'],
    ]);
}
}
