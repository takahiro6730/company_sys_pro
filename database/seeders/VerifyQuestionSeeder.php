<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class VerifyQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('verify_questions')->insert([
            'question' => "子供の頃の親友のあだ名は何ですか？",
        ]);

        DB::table('verify_questions')->insert([
            'question' => "両親はどの都市で会いましたか？",
        ]);

        DB::table('verify_questions')->insert([
            'question' => "隣人の姓は何ですか？",
        ]);

        DB::table('verify_questions')->insert([
            'question' => "10歳のとき、何匹のペットを飼っていましたか？",
        ]);

        DB::table('verify_questions')->insert([
            'question' => "何月に結婚しましたか？",
        ]);
    }
}
