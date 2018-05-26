<?php

use Illuminate\Database\Seeder;
use App\Articleura;

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
        
        DB::insert('INSERT INTO `articlesuras` (`name`, `text`, `img`, `alias`) VALUES (?,?,?,?)', 
                   [
                   'Blog post. Заголовок 1',
                    'Это текст Поста под заголовком 1. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.',
                    'pic1.jpg',
                    'alias1.1'
                    ]);
        //2
        DB::table('articlesuras')->insert(
                                        [
                                            [
                                                'name'=>'Blog post. Заголовок 2.1',
                                                'text'=>'Это текст Поста под заголовком 2.1. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.',
                                                'img'=>'pic2-1.jpg',
                                                'alias'=>'alias2.1'
                                            ],
                                            [
                                                'name'=>'Blog post. Заголовок 2.2',
                                                 'text'=>'Это текст Поста под заголовком 2.2. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.',
                                                 'img'=>'pic2-2.jpg',
                                                 'alias'=>'alias2.2'
                                            ]
                                            
                                        ]    
                                        );
        //3
        Articleura::create(['name'=>'Blog post. Заголовок 3',
                         'text'=>'Это текст Поста под заголовком 3. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.',
                         'img'=>'pic3.jpg',
                         'alias'=>'alias3']);
    }
}
