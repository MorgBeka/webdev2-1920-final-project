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
                'summary' => 'Vanaf nu is Hello Fresh ook beschikbaar in de AppStore of PlayStore. Een heel handige applicatie waar je je weekmenu kan samenstellen. Geen fan om te koken met alle papiertjes van Hello Fresh? Gebruik dan de app om je recept weer te geven.  Ook kan je gebruik maken van andere recepten. Kortom een gebruiksvriendelijke app waar je alles ineen hebt! ',
                'content' => 'Met het Hello Fresh team hebben we beslist om eenapplicatie te maken. Deze is te vinden in de AppStore of PlayStore. Het is een heel handige applicatie geworden waar je je weekmenu kan samenstellen. Je kan hier ook de ingrediënten & basisingrediënten, die je thuis moet hebben raadplegen. Ben je geen fan om te koken met alle papiertjes van Hello Fresh? Gebruik dan deze app om je recept te bekijken.  Ook kan je gebruik maken van andere recepten die je vroeger al eens hebt besteld. Kortom een gebruiksvriendelijke app waar je alles ineen hebt! Gratis te downloaden in de appStore & PlayStore!'

            ],

            [
                'id'=> '2',
                'title' =>'Veel variatie',
                'summary' => 'Hello Fresh zorgt voor veel variatie in je wekelijkse menu. Door enkele dagen op voorhand al te kiezen uit de verschillende recepten moet je de volgende week niet meer na te denken wat je zal klaarmaken om te eten. De recepten vertellen stap voor stap wat er moet gebeuren. Hierdoor zijn er veel recepten die je bijvoorbeeld met je kinderen kan klaarmaken. ',
                'content' => 'Bent u het ook beu om elke dag te verzinnen wat je die avond gaat eten? Eet u bijna elke week hetzelfde? Hello Fresh is dé ideale oplossing! Een week op voorhand kan je tussen onze recepten kiezen wat u de volgende week wil eten. Doordat deze recepten elke week wijzigen zit er automatisch veel variatie in jouw maaltijden! Je kan je keuze wijzigen tot 4dagen voor dat je box geleverd wordt. '
            ],

            [
                'id'=> '3',
                'title' =>'Eenvoudige recpeten',
                'summary' => 'Wekelijks zorgen we ervoor dat er een eenvoudig receptje tussen zit, zo kunnen de kinderen wekelijks ook een maaltijd maken. ',
                'content' => 'Charlotte vertelt over haar ervaring met Hello Fresh:
                Doordat we elke week ook een eenvoudig receptje kunnen kiezen, kunnen onze kinderen wekelijks ook een maaltijd klaarmaken. Zo doen ze ervaring op in de keuken en kunnen ze met veel plezier hun eigen gerecht op eten! Dit zorgt ook voor quality time met het gezin! '
            ],

            [
                'id'=> '4',
                'title' =>'Verse ingrediënten',
                'summary' => 'Altijd verse ingrediënten en duidelijke recepten die alles stap voor stap uitleggen. ',
                'content' => 'Hello Fresh boxen zijn altijd gevuld met verse groenten en andere ingrediënten. Zo kan je de maaltijden zeker bewaren tot het einde van de week. Op de recepten staat het aantal dagen tot wanneer de ingrediënten gebruikt mogen worden. Op de recepten staat ook stap voor stap alles duidelijk uitgelegd zodat je niet veel tijd verliest met het uitzoeken van het recept. '
            ]
        ]);
    }
}
