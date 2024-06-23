<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'name' => 'The Power of Now',
                'author' => 'Eckhart Tolle',
                'description' => 'A guide to spiritual enlightenment.',
                'price' => 12.99,
            ],
            [
                'name' => 'Atomic Habits',
                'author' => 'James Clear',
                'description' => 'An easy and proven way to build good habits and break bad ones.',
                'price' => 16.99,
            ],
            [
                'name' => 'The 7 Habits of Highly Effective People',
                'author' => 'Stephen R. Covey',
                'description' => 'Powerful lessons in personal change.',
                'price' => 14.99,
            ],
            [
                'name' => 'How to Win Friends and Influence People',
                'author' => 'Dale Carnegie',
                'description' => 'The only book you need to lead you to success.',
                'price' => 10.99,
            ],
            [
                'name' => 'Think and Grow Rich',
                'author' => 'Napoleon Hill',
                'description' => 'The landmark bestseller now revised and updated for the 21st century.',
                'price' => 9.99,
            ],
            [
                'name' => 'You Are a Badass',
                'author' => 'Jen Sincero',
                'description' => 'How to stop doubting your greatness and start living an awesome life.',
                'price' => 13.99,
            ],
            [
                'name' => 'The Subtle Art of Not Giving a F*ck',
                'author' => 'Mark Manson',
                'description' => 'A counterintuitive approach to living a good life.',
                'price' => 15.99,
            ],
            [
                'name' => 'Awaken the Giant Within',
                'author' => 'Tony Robbins',
                'description' => 'How to take immediate control of your mental, emotional, physical and financial destiny!',
                'price' => 11.99,
            ],
            [
                'name' => 'The Four Agreements',
                'author' => 'Don Miguel Ruiz',
                'description' => 'A practical guide to personal freedom.',
                'price' => 8.99,
            ],
            [
                'name' => 'The Miracle Morning',
                'author' => 'Hal Elrod',
                'description' => 'The not-so-obvious secret guaranteed to transform your life (before 8AM).',
                'price' => 12.49,
            ],
        ];

        DB::table('books')->insert($books);
    }
}
