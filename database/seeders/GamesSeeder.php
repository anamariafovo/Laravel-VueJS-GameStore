<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'name' => 'Game One',
                'category' => 'Adventure',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu.',
                'price' => 19.99,
                'image' => 'pixel-art.png',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Two',
                'category' => 'Escape Game',
                'description' => 'Lorem ipsum dolor sit amet.',
                'price' => 12.99,
                'image' => 'cat.jpg',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Three',
                'category' => 'RPG',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate turpis massa, ut dapibus lacus accumsan eget. Quisque viverra erat.',
                'price' => 24.99,
                'image' => 'house.png',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Four',
                'category' => 'Puzzle',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet risus mauris. Integer quis.',
                'price' => 9.99,
                'image' => 'lego.png',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Five',
                'category' => 'RPG',
                'description' => 'Lorem ipsum dolor sit amet.',
                'price' => 25.00,
                'image' => 'city.jpg',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Six',
                'category' => 'Escape Game',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit.',
                'price' => 9.99,
                'image' => 'doors.jpg',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Seven',
                'category' => 'Adventure',
                'description' => 'Lorem ipsum dolor sit amet.',
                'price' => 15.00,
                'image' => 'retro.jpg',
                'added_to_cart' => false
            ],
            [
                'name' => 'Game Eight',
                'category' => 'Adventure',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet risus mauris. Integer quis.',
                'price' => 24.99,
                'image' => 'camp.png',
                'added_to_cart' => false
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
