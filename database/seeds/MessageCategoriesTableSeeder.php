<?php

use App\MessageCategory;
use Illuminate\Database\Seeder;

class MessageCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessageCategory::truncate();

        MessageCategory::create(['nome'=>'Duvida']);
        MessageCategory::create(['nome'=>'Sugestão']);
        MessageCategory::create(['nome'=>'Critica']);
        MessageCategory::create(['nome'=>'Depoimento']);
    }
}
