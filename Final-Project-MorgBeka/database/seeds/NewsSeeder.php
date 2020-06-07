<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'id'=> '1',
                'title' =>'Zomer in het land!',
                'summary' => 'Zomer in het land! Geen zin om achter die warme kookpotten te staan bij zo’n stralend weer? Wij hebben de ideale oplossing! Doorheen de zomer zorgen wij wekelijks voor recepten van heerlijke slaatjes, koude pasta’s,… Gezond & fris! '
            ],

            [
                'id'=> '2',
                'title' =>'COVID-19',
                'summary' => 'Door de huidige coranamaatregelen kan de werking van Hello Fresh ook lichtjes aangepast zijn. Dit gaat vooral dan omtrent ingrediënten & leverdagen.',
                'content' => 'Door de huidige coranamaatregelen kan de werking van Hello Fresh ook lichtjes aangepast zijn. Dit gaat vooral dan omtrent ingrediënten & leverdagen.
                                Doordat er soms beperkte levering is van ingrediënten kan het zijn dat sommige zaken vervangen worden door een andere. ingrediënt.
                                Ook zijn er momenteel minder leverdagen dan in normale omstandigheden. Dit omdat ze minder personeel beschikbaar is.
                                We hanteren in deze periode afstandslevering, de bezorger zal uw doos aan de voordeur zetten en na het aanbellen op veilige afstand wachten tot u de deur opent. Zo proberen we zoveel mogelijk contact te vermijden.
                                Wij hechten heel veel belang aan de gezondheid van onze klanten & werknemers. We zorgen er dus voor dat alles in veilige omstandigheden gebeurt! Zowel het klaarmaken van de dozen als het leveren ervan.'
            ],

            [
                'id'=> '3',
                'title' =>'Vakantie in aantocht!',
                'summary' => 'Nu de vakantie in aantocht is komen de gezellige etentjes eraan! Vanaf volgende maand komt Hello Fresh met een nieuw concept! ',
                'content' => 'Nu de vakantie in aantocht is komen de gezellige etentjes eraan! Vanaf volgende maand komt Hello Fresh met een nieuw concept!
                                Zoals onze trouwe Hello Fresh koks weten hebben wij onze gerechten onderverdeeld in verschillende categorieën. Zoals bijvoorbeeld Quick&Easy, Family,Veggie,Premium,…
                                Vanaf volgende maand komt hier een categorie bij! Namelijk DINER, dit zullen gerechten zijn die jullie kunnen klaarmaken indien er volk langskomt bij u. Aangezien je dan ook met meer bent dan het aantal gezinsleden dat u hebt opgeven zal er bij het kiezen van dit gerecht een mogelijkheid tevoorschijn komen om het aantal personen in te geven.
                                Ideaal wanneer u geen inspiratie hebt maar toch een lekker maaltijd op tafel wil zetten! '
            ]
        ]);
    }
}
