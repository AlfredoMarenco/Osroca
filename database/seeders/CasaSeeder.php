<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Casa;

class CasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Casa::create([
            'name' => 'Modelo Aguamarina',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'almada'
        ]);
        Casa::create([
            'name' => 'Modelo Magenta',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'almada'
        ]);
        Casa::create([
            'name' => 'Modelo Violeta',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'almada'
        ]);
        Casa::create([
            'name' => 'Modelo Violeta Plus',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'almada'
        ]);
        Casa::create([
            'name' => 'Modelo Miraverde1',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'miraverde'
        ]);
        Casa::create([
            'name' => 'Modelo Miraverde2',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'miraverde'
        ]);
        Casa::create([
            'name' => 'Modelo Miraverde3',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'miraverde'
        ]);
        Casa::create([
            'name' => 'Modelo Miraverde4',
            'price' => '150000',
            'bgcolor' => '#773703',
            'textcolor' => '#ffffff',
            'visible' => 1,
            'developing' => 'miraverde'
        ]);
    }
}
