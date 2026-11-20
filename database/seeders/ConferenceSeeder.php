<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        Conference::create([
            'title' => 'Programavimo konferencija 2026',
            'description' => 'Konferencija apie šiuolaikines programavimo technologijas, jų taikymą ir naujausias tendencijas.',
            'date' => '2026-12-15',
            'address' => 'Vilnius, Lietuva',
        ]);

        Conference::create([
            'title' => 'PHP programuotojų susitikimas',
            'description' => 'Susitikimas, skirtas PHP programuotojams dalintis patirtimi, žiniomis ir aptarti naujoves.',
            'date' => '2026-12-20',
            'address' => 'Kaunas, Lietuva',
        ]);

        Conference::create([
            'title' => 'Interneto svetainių kūrimo konferencija',
            'description' => 'Konferencija apie interneto svetainių kūrimą, šiuolaikinius įrankius ir gerąsias programavimo praktikas.',
            'date' => '2027-01-10',
            'address' => 'Klaipėda, Lietuva',
        ]);
    }
}
