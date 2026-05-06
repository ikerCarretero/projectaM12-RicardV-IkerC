<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competicio;
use App\Models\EquipReal;

class EquipRealSeeder extends Seeder
{
    public function run(): void
    {
        $premier    = Competicio::where('nom', 'Premier League')->first();
        $laliga     = Competicio::where('nom', 'La Liga')->first();
        $serieA     = Competicio::where('nom', 'Serie A')->first();
        $bundes     = Competicio::where('nom', 'Bundesliga')->first();
        $ligue1     = Competicio::where('nom', 'Ligue 1')->first();
        $portugal   = Competicio::where('nom', 'Liga Portugal')->first();
        $eredivisie = Competicio::where('nom', 'Eredivisie')->first();
        $belgium    = Competicio::where('nom', 'Belgian Pro League')->first();
        $superLig   = Competicio::where('nom', 'Super Lig')->first();
        $superGr    = Competicio::where('nom', 'Super League Greece')->first();
        $cyprus     = Competicio::where('nom', 'Cyprus First Division')->first();
        $kazakh     = Competicio::where('nom', 'Kazakhstan Premier League')->first();

        // 1. Arsenal
        EquipReal::create([
            'nom'           => 'Arsenal FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52280.png',
            'competicio_id' => $premier->id,
        ]);

        // 2. Bayern
        EquipReal::create([
            'nom'           => 'FC Bayern München',
            'pais'          => 'Alemanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50037.png',
            'competicio_id' => $bundes->id,
        ]);

        // 3. Liverpool
        EquipReal::create([
            'nom'           => 'Liverpool FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/7889.png',
            'competicio_id' => $premier->id,
        ]);

        // 4. Tottenham
        EquipReal::create([
            'nom'           => 'Tottenham Hotspur FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/1652.png',
            'competicio_id' => $premier->id,
        ]);

        // 5. Barcelona
        EquipReal::create([
            'nom'           => 'FC Barcelona',
            'pais'          => 'Espanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50080.png',
            'competicio_id' => $laliga->id,
        ]);

        // 6. Chelsea
        EquipReal::create([
            'nom'           => 'Chelsea FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52914.png',
            'competicio_id' => $premier->id,
        ]);

        // 7. Sporting
        EquipReal::create([
            'nom'           => 'Sporting CP',
            'pais'          => 'Portugal',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50149.png',
            'competicio_id' => $portugal->id,
        ]);

        // 8. Manchester City
        EquipReal::create([
            'nom'           => 'Manchester City FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52919.png',
            'competicio_id' => $premier->id,
        ]);

        // 9. Real Madrid
        EquipReal::create([
            'nom'           => 'Real Madrid CF',
            'pais'          => 'Espanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50051.png',
            'competicio_id' => $laliga->id,
        ]);

        // 10. Inter
        EquipReal::create([
            'nom'           => 'FC Internazionale Milano',
            'pais'          => 'Itàlia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50138.png',
            'competicio_id' => $serieA->id,
        ]);

        // 11. PSG
        EquipReal::create([
            'nom'           => 'Paris Saint-Germain',
            'pais'          => 'França',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52747.png',
            'competicio_id' => $ligue1->id,
        ]);

        // 12. Newcastle
        EquipReal::create([
            'nom'           => 'Newcastle United FC',
            'pais'          => 'Anglaterra',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/59324.png',
            'competicio_id' => $premier->id,
        ]);

        // 13. Juventus
        EquipReal::create([
            'nom'           => 'Juventus FC',
            'pais'          => 'Itàlia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50139.png',
            'competicio_id' => $serieA->id,
        ]);

        // 14. Atlético
        EquipReal::create([
            'nom'           => 'Atlético de Madrid',
            'pais'          => 'Espanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50124.png',
            'competicio_id' => $laliga->id,
        ]);

        // 15. Atalanta
        EquipReal::create([
            'nom'           => 'Atalanta BC',
            'pais'          => 'Itàlia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52816.png',
            'competicio_id' => $serieA->id,
        ]);

        // 16. Leverkusen
        EquipReal::create([
            'nom'           => 'Bayer 04 Leverkusen',
            'pais'          => 'Alemanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50109.png',
            'competicio_id' => $bundes->id,
        ]);

        // 17. Dortmund
        EquipReal::create([
            'nom'           => 'Borussia Dortmund',
            'pais'          => 'Alemanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52758.png',
            'competicio_id' => $bundes->id,
        ]);

        // 18. Olympiakos
        EquipReal::create([
            'nom'           => 'Olympiacos FC',
            'pais'          => 'Grècia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2610.png',
            'competicio_id' => $superGr->id,
        ]);

        // 19. Club Brugge
        EquipReal::create([
            'nom'           => 'Club Brugge KV',
            'pais'          => 'Bèlgica',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50043.png',
            'competicio_id' => $belgium->id,
        ]);

        // 20. Galatasaray
        EquipReal::create([
            'nom'           => 'Galatasaray SK',
            'pais'          => 'Turquia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50067.png',
            'competicio_id' => $superLig->id,
        ]);

        // 21. Monaco
        EquipReal::create([
            'nom'           => 'AS Monaco FC',
            'pais'          => 'França',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50023.png',
            'competicio_id' => $ligue1->id,
        ]);

        // 22. Qarabağ
        EquipReal::create([
            'nom'           => 'Qarabağ FK',
            'pais'          => 'Azerbaidjan',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/60609.png',
            'competicio_id' => $kazakh->id,
        ]);

        // 23. Bodø/Glimt
        EquipReal::create([
            'nom'           => 'FK Bodø/Glimt',
            'pais'          => 'Noruega',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/59333.png',
            'competicio_id' => $eredivisie->id,
        ]);

        // 24. Benfica
        EquipReal::create([
            'nom'           => 'SL Benfica',
            'pais'          => 'Portugal',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50147.png',
            'competicio_id' => $portugal->id,
        ]);

        // 25. Marsella
        EquipReal::create([
            'nom'           => 'Olympique de Marseille',
            'pais'          => 'França',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52748.png',
            'competicio_id' => $ligue1->id,
        ]);

        // 26. Pafos
        EquipReal::create([
            'nom'           => 'Pafos FC',
            'pais'          => 'Xipre',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/2609532.png',
            'competicio_id' => $cyprus->id,
        ]);

        // 27. Union Saint-Gilloise
        EquipReal::create([
            'nom'           => 'Royale Union Saint-Gilloise',
            'pais'          => 'Bèlgica',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/64125.png',
            'competicio_id' => $belgium->id,
        ]);

        // 28. PSV
        EquipReal::create([
            'nom'           => 'PSV Eindhoven',
            'pais'          => 'Països Baixos',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50062.png',
            'competicio_id' => $eredivisie->id,
        ]);

        // 29. Athletic Club
        EquipReal::create([
            'nom'           => 'Athletic Club',
            'pais'          => 'Espanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50125.png',
            'competicio_id' => $laliga->id,
        ]);

        // 30. Napoli
        EquipReal::create([
            'nom'           => 'SSC Napoli',
            'pais'          => 'Itàlia',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50136.png',
            'competicio_id' => $serieA->id,
        ]);

        // 31. Copenhague
        EquipReal::create([
            'nom'           => 'FC København',
            'pais'          => 'Dinamarca',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52709.png',
            'competicio_id' => $eredivisie->id,
        ]);

        // 32. Ajax
        EquipReal::create([
            'nom'           => 'AFC Ajax',
            'pais'          => 'Països Baixos',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50143.png',
            'competicio_id' => $eredivisie->id,
        ]);

        // 33. Eintracht
        EquipReal::create([
            'nom'           => 'Eintracht Frankfurt',
            'pais'          => 'Alemanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/50072.png',
            'competicio_id' => $bundes->id,
        ]);

        // 34. Slavia Praha
        EquipReal::create([
            'nom'           => 'SK Slavia Praha',
            'pais'          => 'República Txeca',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/52498.png',
            'competicio_id' => $bundes->id,
        ]);

        // 35. Villarreal
        EquipReal::create([
            'nom'           => 'Villarreal CF',
            'pais'          => 'Espanya',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/70691.png',
            'competicio_id' => $laliga->id,
        ]);

        // 36. Kairat Almaty
        EquipReal::create([
            'nom'           => 'FC Kairat Almaty',
            'pais'          => 'Kazakhstan',
            'img'           => 'https://img.uefa.com/imgml/TP/teams/logos/240x240/79970.png',
            'competicio_id' => $kazakh->id,
        ]);
    }
}