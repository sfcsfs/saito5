<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kaitou;

class KaitouSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kaitou::create([
            'text' => 'これから1000個の問題に答えてくれますか',
            'はい' => "1",
            'いいえ' => "0",
            'どうしても答えられない・答えたくない' => "0",
            ]);

            Kaitou::create([
                'text' => '1個目の質問は1000個の質問のうちに含まれるのか',
                'はい' => "1",
                'いいえ' => "0",
                'どうしても答えられない・答えたくない' => "0",
                ]);
    }
}
