<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1

        DB::insert('INSERT INTO `articles` (`name`, `text`) VALUES (?,?)', 
                   [
                       'Blog post. Заголовок 1',
                       'Это текст Поста под заголовком 1. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.'
                   ]);
        //2
        DB::table('articles')->insert(
            [
                [
                    'name'=>'Blog post. Заголовок 2.1',
                    'text'=>'Это текст Поста под заголовком 2.1. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.'
                ],
                [
                    'name'=>'Blog post. Заголовок 2.2',
                    'text'=>'Это текст Поста под заголовком 2.2. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.'
                ]

            ]    
        );
        //3
        Article::create(['name'=>'Blog post. Заголовок 3',
                            'text'=>'Это текст Поста под заголовком 3. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.']);
    }
}
