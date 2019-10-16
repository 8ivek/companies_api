<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 5; $i++) {
            DB::table('tbl_companies')->insert([
                'name' => $faker->name,
                'title' => $faker->company,
                'description' => implode(', ', $faker->sentences(5)),
                'services' => $faker->sentence,
                'email' => $faker->companyEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'Province' => $faker->word,
                'country' => $faker->country,
                'keywords' => implode(', ', $faker->words(5)),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
