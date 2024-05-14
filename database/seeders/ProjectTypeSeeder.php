<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_types')->insert([
            'type_num' => 1,
            'content' => '「弊社」が「国内クライアント」から案件を受託して、それを「国内エンジニア」に再委託する。',
            'sub_content' => '報酬は「国内クライアント」から「弊社」へ支払われる。そして「弊社」から「国内エンジニア」へ支払われる。その差額が弊社利益になる構造。',
            'comment' =>'受託開発',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 2,
            'content' => '「弊社」が「国内クライアント」から案件を受託して、それを「国外エンジニア」に再委託する。',
            'sub_content' => '報酬は「国内クライアント」から「弊社」へ支払われる。そして「弊社」から「国外エンジニア」へ支払われる。その差額が弊社利益になる構造。',
            'comment' =>'受託開発',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 3,
            'content' => '「弊社」が「国外クライアント」から案件を受託して、それを「国内エンジニア」に再委託する。',
            'sub_content' => '報酬は「国外クライアント」から「弊社」へ支払われる。そして「弊社」から「国内エンジニア」へ支払われる。その差額が弊社利益になる構造。',
            'comment' =>'受託開発',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 4,
            'content' => '「弊社」が「国外クライアント」から案件を受託して、それを「国外エンジニア」に再委託する。',
            'sub_content' => '報酬は「国外クライアント」から「弊社」へ支払われる。そして「弊社」から「国外エンジニア」へ支払われる。その差額が弊社利益になる構造。',
            'comment' =>'受託開発',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 5,
            'content' => '「国内クライアント」と「国内エンジニア」が直接業務委託契約を結び、支払われる委託報酬を「弊社」が収納代行する。',
            'sub_content' => '報酬は「国内クライアント」から「国内エンジニア」へ「弊社」が収納代行するかたちで支払われる。そして「国内エンジニア」から「弊社」へ収納代行手数料が支払われる。この収納代行手数料が弊社利益になる構造。',
            'comment' =>'収納代行',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 6,
            'content' => '「国内クライアント」と「国外エンジニア」が直接業務委託契約を結び、支払われる委託報酬を「弊社」が収納代行する。',
            'sub_content' => '報酬は「国内クライアント」から「国外エンジニア」へ「弊社」が収納代行するかたちで支払われる。そして「国外エンジニア」から「弊社」へ収納代行手数料が支払われる。この収納代行手数料が弊社利益になる構造。',
            'comment' =>'収納代行',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 7,
            'content' => '「国外クライアント」と「国内エンジニア」が直接業務委託契約を結び、支払われる委託報酬を「弊社」が収納代行する。',
            'sub_content' => '報酬は「国外クライアント」から「国内エンジニア」へ「弊社」が収納代行するかたちで支払われる。そして「国内エンジニア」から「弊社」へ収納代行手数料が支払われる。この収納代行手数料が弊社利益になる構造。',
            'comment' =>'収納代行',
            'define' => date('2024-2-1'),
        ]);
        DB::table('project_types')->insert([
            'type_num' => 8,
            'content' => '「国外クライアント」と「国外エンジニア」が直接業務委託契約を結び、支払われる委託報酬を「弊社」が収納代行する。',
            'sub_content' => '報酬は「国外クライアント」から「国外エンジニア」へ「弊社」が収納代行するかたちで支払われる。そして「国外エンジニア」から「弊社」へ収納代行手数料が支払われる。この収納代行手数料が弊社利益になる構造。',
            'comment' =>'収納代行',
            'define' => date('2024-2-1'),
        ]);
        
    }
}
