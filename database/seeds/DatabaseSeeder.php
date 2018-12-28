<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->insert([
            'name' => 'Basil',
            'price' => 0.99,
            'description' => 'Perhaps the most popular and widely used culinary herb.',
        ]);
        DB::table('products')->insert([
            'name' => 'Bay Laurel',
            'price' => 1.99,
            'description' => 'Bay laurel is an evergreen shrub or tree in warmer growing zones ( 8 and above).',
        ]);
        DB::table('products')->insert([
            'name' => 'Borage',
            'price' => 2.99,
            'description' => 'Borage is a coarse textured plant growing to about 2-3 feet.',
        ]);
        DB::table('products')->insert([
            'name' => 'Caraway',
            'price' => 3.99,
            'description' => 'Caraway is most often grown for its seeds, but the root and leaves are also edible.',
        ]);
        DB::table('products')->insert([
            'name' => 'Catnip',
            'price' => 4.99,
            'description' => 'Catnip is a hardy perennial with an open mound shaped habit growing to about 2-3 feet tall.',
        ]);

    }
}
