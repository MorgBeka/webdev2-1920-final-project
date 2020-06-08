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

            [
                'id'=> '2',
                'title' =>'Verwerken van jouw persoonsgegevens',
                'content' => 'HelloFresh verwerkt onder andere jouw persoonsgegevens zodra je klant wordt of bij een eenmalige bestelling van een maaltijdbox (zoals een proefbox). Ook wanneer je e-mails van ons ontvangt, deelneemt aan een prijsvraag of meedoet aan een enquête verwerken wij de persoonsgegevens die je deelt of die wij verzamelen. Op het moment dat je ons een vraag stelt, informeert naar onze activiteiten of op andere wijze met ons in contact treedt kunnen wij ook jouw persoonsgegevens verwerken.
                HelloFresh verwerkt zowel de persoonsgegevens die je met ons deelt als de persoonsgegevens die we verzamelen bij gebruik van onze website of app. HelloFresh verwerkt enkel jouw persoonsgegevens op het moment dat hier een doel en een wettelijke grondslag voor is, oftewel als we een goede reden hebben om je persoonsgegevens te verwerken. In de meeste gevallen verwerken we persoonsgegevens met jouw toestemming, om uitvoering te geven aan je bestelling bij HelloFresh, om aan een wettelijke verplichting te voldoen of omdat dit in ons belang is.'
            ],

            [
                'id'=> '3',
                'title' =>'Gerechtvaardigde belangen',
                'content' => 'Voor zover het in ons belang is om jouw persoonsgegevens te verwerken doen wij dit enkel
                indien dit noodzakelijk is en voor zover ons belang niet zwaarder weegt dan jouw rechten
                en vrijheden. In alle gevallen nemen wij redelijke stappen om te voorkomen dat jouw
                privacy onnodig wordt geschaad.'
            ],

            [
                'id'=> '4',
                'title' =>'Hoe lang bewaren we jouw persoonsgegevens?',
                'content' => 'Jouw persoonsgegevens bewaren we zolang als dit nodig is voor de beschreven
                doeleinden, of voor zover dit noodzakelijk is om aan wettelijke verplichtingen te voldoen
                en om (commerciële) geschillen te beslechten.
                Voor fiscale doeleinden zijn wij verplicht bepaalde persoonsgegevens gedurende zeven jaar
                te bewaren.
                Gegevens kunnen tevens geanonimiseerd langer worden bewaard ten behoeve van
                statistische doeleinden.'
            ],

        ]);
    }
}







