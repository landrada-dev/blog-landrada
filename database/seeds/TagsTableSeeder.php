<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'Inversión segura',
            'color' => '#e91e63',
            'slug' => 'inversion-segura',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'Lotes',
            'color' => '#f44336',
            'slug' => 'lotes',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'Mérida',
            'color' => '#ff9800',
            'slug' => 'merida',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 4,
            'name' => 'Yucatán',
            'color' => '#4caf50',
            'slug' => 'yucatan',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tags')->insert([
            'id' => 5,
            'name' => 'Finanzas',
            'color' => '#00bcd4',
            'slug' => 'finanzas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 6,
            'name' => 'Lotes de inversión',
            'color' => '#00bcd4',
            'slug' => 'lotes-de-inversión',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 7,
            'name' => 'Tips & Consejos',
            'color' => '#e91e63',
            'slug' => 'tips&consejos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 8,
            'name' => 'Invertir en Yucatán',
            'color' => '#6c757d',
            'slug' => 'invertir-en-yucatan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            'id' => 9,
            'name' => 'Plusvalía',
            'color' => '#9c27b0',
            'slug' => 'plusvalia',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
