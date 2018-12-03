<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([ //,
                'title' => $faker->name,
                'content' => $faker->text,
                'price' => 10.2,
            ]);
        }
    }
}
