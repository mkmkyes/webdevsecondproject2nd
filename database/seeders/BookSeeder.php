<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Book::create([
            "title" => "Laskar Pelangi",
            "published_year" => 2007,
            "writer" => "Writer A",
            "cover_path" => "blablabla/cover.png"

        ]);
    }
}
