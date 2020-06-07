<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'id'=> '1',
                'title' =>'Applicatie Hello Fresh',
                'summary' => 'Vanaf nu is Hello Fresh ook beschikbaar in de AppStore of PlayStore. Een heel handige applicatie waar je je weekmenu kan samenstellen. Geen fan om te koken met alle papiertjes van Hello Fresh? Gebruik dan de app om je recept weer te geven.  Ook kan je gebruik maken van andere recepten. Kortom een gebruiksvriendelijke app waar je alles ineen hebt! '
            ],

            [
                'id'=> '2',
                'title' =>'Veel variatie',
                'summary' => 'Hello Fresh zorgt voor veel variatie in je wekelijkse menu. Door enkele dagen op voorhand al te kiezen uit de verschillende recepten moet je de volgende week niet meer na te denken wat je zal klaarmaken om te eten. De recepten vertellen stap voor stap wat er moet gebeuren. Hierdoor zijn er veel recepten die je bijvoorbeeld met je kinderen kan klaarmaken. '
            ],

            [
                'id'=> '3',
                'title' =>'Eenvoudige recpeten',
                'summary' => 'Wekelijks zorgen we ervoor dat er een eenvoudig receptje tussen zit, zo kunnen de kinderen wekelijks ook een maaltijd maken. '
            ],

            [
                'id'=> '4',
                'title' =>'Verse ingrediënten',
                'summary' => 'Altijd verse ingrediënten en duidelijke recepten die alles stap voor stap uitleggen. '
            ]
        ]);
    }
}
