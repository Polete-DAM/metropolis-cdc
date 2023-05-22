<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Espacios>
 */
class EspaciosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'nombre' => 'Privilege Corner',
            'area' =>  '435',
            'capacidad' => '100',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/1511060043.jpg',

        ],
        [

            'nombre' => 'Cristal Palace',
            'area' =>  '130',
            'capacidad' => '35',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/IMG_0901.jpg',

        ],
        [

            'nombre' => 'Boxes',
            'area' =>  '90',
            'capacidad' => '20',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/DSC_1092-1024x685.jpg',

        ],
        [

            'nombre' => 'Corporate Lounge',
            'area' =>  '70',
            'capacidad' => '20',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/1606040004.jpg',

        ],
        [

            'nombre' => 'Montjuïc Club',
            'area' =>  '1085',
            'capacidad' => '500',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/1606041384.jpg',

        ],
        [

            'nombre' => 'Briefing Room',
            'area' =>  '135',
            'capacidad' => '40',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/IMG_3700.jpg',

        ],
        [
            'nombre' => 'Press Room',
            'area' =>  '850',
            'capacidad' => '350',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/Foto0123.jpg',
        ],
        [
            'nombre' => 'Sala Vip',
            'area' =>  '170',
            'capacidad' => '60',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/IMG_1049.jpg',
        ],
        [
            'nombre' => 'Sala Panoràmica',
            'area' =>  '220',
            'capacidad' => '20',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/IMG_0497-1.jpg',
        ],
        [
            'nombre' => 'Suite Corporate'
            'area' =>  '295'
            'capacidad' => '70'
            'disponibilidad' => 'disponible'
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/1603020010-1.jpg'
        ],
        [
            'nombre' => 'Suite Individual',
            'area' =>  '40',
            'capacidad' => '12',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/2013-05-09-09.13.09.jpg',
        ],
        [
            'nombre' => 'Pàdoc',
            'area' =>  '35600',
            'capacidad' => '3500',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/DSC_0974-1024x685.jpg',
        ],
        [
            'nombre' => 'Principal Stand Space',
            'area' =>  '7600',
            'capacidad' => '550',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/1611063165-2.jpg',
        ],
        [
            'nombre' => 'Stadium Zone',
            'area' =>  '5000',
            'capacidad' => '375',
            'disponibilidad' => 'disponible',
            'imagen_url' => 'https://www.circuitcat.com/wp-content/uploads/2017/01/MG_0393-1024x683.jpg',
        ];
    }
}
