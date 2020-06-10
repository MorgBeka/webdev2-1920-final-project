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
                'id'=> '7',
                'title' =>'Zomer in het land!',
                'summary' => 'Zomer in het land! Geen zin om achter die warme kookpotten te staan bij zo’n stralend weer? Wij hebben de ideale oplossing! Doorheen de zomer zorgen wij wekelijks voor recepten van heerlijke slaatjes, koude pasta’s,… Gezond & fris! ',
                'content'=> 'Heel veel mensen zien het niet zitten om bij mooi weer achter het vuur te staan. Bij mooi weer hebben we vaak ook zin in een frisse maaltijd. Daarom zorgen wij bij Hello Fresh dat er tijdens de zomermaanden elke week enkele zomergerechtjes zitten. Dit kunnen slaatjes zijn maar ook koude pastas. Zo kunnen we op warme dagen ook genieten van een Hello Fresh maaltijd!'
            ],

            [
                'id'=> '6',
                'title' =>'COVID-19',
                'summary' => 'Door de huidige coranamaatregelen kan de werking van Hello Fresh ook lichtjes aangepast zijn. Dit gaat vooral dan omtrent ingrediënten & leverdagen.',
                'content' => 'Doordat er soms beperkte levering is van ingrediënten kan het zijn dat sommige zaken vervangen worden door een andere. ingrediënt.
                                Ook zijn er momenteel minder leverdagen dan in normale omstandigheden. Dit omdat ze minder personeel beschikbaar is.
                                We hanteren in deze periode afstandslevering, de bezorger zal uw doos aan de voordeur zetten en na het aanbellen op veilige afstand wachten tot u de deur opent. Zo proberen we zoveel mogelijk contact te vermijden.
                                Wij hechten heel veel belang aan de gezondheid van onze klanten & werknemers. We zorgen er dus voor dat alles in veilige omstandigheden gebeurt! Zowel het klaarmaken van de dozen als het leveren ervan.'
            ],

            [
                'id'=> '5',
                'title' =>'Vakantie in aantocht!',
                'summary' => 'Nu de vakantie in aantocht is komen de gezellige etentjes eraan! Vanaf volgende maand komt Hello Fresh met een nieuw concept! ',
                'content' => 'Zoals onze trouwe Hello Fresh koks weten hebben wij onze gerechten onderverdeeld in verschillende categorieën. Zoals bijvoorbeeld Quick&Easy, Family,Veggie,Premium,…
                                Vanaf volgende maand komt hier een categorie bij! Namelijk DINER, dit zullen gerechten zijn die jullie kunnen klaarmaken indien er volk langskomt bij u. Aangezien je dan ook met meer bent dan het aantal gezinsleden dat u hebt opgeven zal er bij het kiezen van dit gerecht een mogelijkheid tevoorschijn komen om het aantal personen in te geven.
                                Ideaal wanneer u geen inspiratie hebt maar toch een lekker maaltijd op tafel wil zetten! '
            ],

            [
                'id'=> '4',
                'title' =>'What is Lorem Ipsum?',
                'summary' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],

            [
                'id'=> '3',
                'title' =>'Why do we use it?',
                'summary' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout ',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue congue lacus, eu porttitor metus ullamcorper id. Maecenas et rutrum purus. Vestibulum molestie ipsum id ante molestie, in feugiat velit posuere. Pellentesque ultricies feugiat enim nec mollis. Etiam at urna aliquam, egestas nibh at, fringilla augue. Cras commodo, massa sed pulvinar aliquam, quam elit tempus risus, id tincidunt mi nulla eu enim. Donec eget aliquet metus. Sed non lorem est. Aenean nec euismod ipsum. In feugiat malesuada mi nec egestas. Suspendisse auctor ut est ac vulputate. Morbi ultrices dui eget nisl imperdiet porttitor a in tortor. Suspendisse maximus leo lacus.'
            ],

            [
                'id'=> '2',
                'title' =>'Where can I get some?',
                'summary' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which do not look even slightly believable.  Morbi sit amet quam tincidunt, vehicula ligula at, aliquet magna. Aenean sed gravida est. Mauris imperdiet ligula eget felis posuere varius ut id turpis. Aenean placerat lobortis sapien, bibendum ornare libero tincidunt at. Nunc viverra elit vitae porta placerat. Aliquam sem nulla, efficitur et purus quis, tincidunt dapibus tellus. Donec accumsan vitae magna sagittis facilisis. Aliquam vel ornare arcu. ',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue congue lacus, eu porttitor metus ullamcorper id. Maecenas et rutrum purus. Vestibulum molestie ipsum id ante molestie, in feugiat velit posuere. Pellentesque ultricies feugiat enim nec mollis. Etiam at urna aliquam, egestas nibh at, fringilla augue. Cras commodo, massa sed pulvinar aliquam, quam elit tempus risus, id tincidunt mi nulla eu enim. Donec eget aliquet metus. Sed non lorem est. Aenean nec euismod ipsum. In feugiat malesuada mi nec egestas. Suspendisse auctor ut est ac vulputate. Morbi ultrices dui eget nisl imperdiet porttitor a in tortor. Suspendisse maximus leo lacus.'
            ],

            [
                'id'=> '1',
                'title' =>'Morbi sit amet quam tincidunt, vehic',
                'summary' => 'Morbi sit amet quam tincidunt, vehicula ligula at, aliquet magna. Aenean sed gravida est. Mauris imperdiet ligula eget felis posuere varius ut id turpis. Aenean placerat lobortis sapien, bibendum ornare libero tincidunt at. Nunc viverra elit vitae porta placerat. Aliquam sem nulla, efficitur et purus quis, tincidunt dapibus tellus. Donec accumsan vitae magna sagittis facilisis. Aliquam vel ornare arcu. ',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue congue lacus, eu porttitor metus ullamcorper id. Maecenas et rutrum purus. Vestibulum molestie ipsum id ante molestie, in feugiat velit posuere. Pellentesque ultricies feugiat enim nec mollis. Etiam at urna aliquam, egestas nibh at, fringilla augue. Cras commodo, massa sed pulvinar aliquam, quam elit tempus risus, id tincidunt mi nulla eu enim. Donec eget aliquet metus. Sed non lorem est. Aenean nec euismod ipsum. In feugiat malesuada mi nec egestas. Suspendisse auctor ut est ac vulputate. Morbi ultrices dui eget nisl imperdiet porttitor a in tortor. Suspendisse maximus leo lacus.'
            ],
        ]);
    }
}
