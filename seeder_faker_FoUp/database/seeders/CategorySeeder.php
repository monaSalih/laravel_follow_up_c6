<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
    public function run(): void
    {
    //     DB::table('categories')->insert([
    //     'category_name'=>Str::random(10),
    //     'description'=>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..',
    //     'is_active'=>(bool)rand(0,1),
    //    ]);
    Category::factory(10)->create();

    }
}
