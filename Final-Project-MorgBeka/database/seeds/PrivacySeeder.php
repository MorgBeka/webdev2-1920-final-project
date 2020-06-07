<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacy')->insert([
            [
                'id'=> '1',
                'title' =>'Privacy- en Cookiestatement',
                'content' => 'Wij vinden het belangrijk om zorgvuldig met jouw gegevens om te gaan. HelloFresh verwerkt persoonsgegevens en andere data in overeenstemming met geldende wet- en regelgeving. In dit Privacy- en Cookiestatement zijn de overwegingen hierover vastgelegd.
                             HelloFresh gebruikt jouw Persoonsgegevens ter uitvoering van een overeenkomst, bij deelname aan een actie en/of om je via verschillende kanalen te informeren over onze activiteiten, producten en diensten. Meer informatie vind je in ons privacy statement. Wil je geen informatie van ons ontvangen, dan kun je contact met ons opnemen via klantenservice@HelloFresh.be of per telefoon: 03 808 5062.'
            ],

        ]);
    }
}
