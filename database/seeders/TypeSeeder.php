<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('types')->truncate();
        $types = ['FrontEnd', 'BackEnd', 'FullStack', 'Design'];
        foreach ($types as $type_name) {
            $new_type = new Type();
            $new_type->name = $type_name;
            $new_type->slug = Str::slug($type_name);
            $new_type->save();
        };
    }
}