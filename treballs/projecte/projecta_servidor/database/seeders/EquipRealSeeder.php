<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competicio;
use App\Models\EquipReal;

class EquipRealSeeder extends Seeder
{
    public function run(): void
    {
        $premier   = Competicio::where('nom', 'Premier League')->first();
        $laliga    = Competicio::where('nom', 'La Liga')->first();
        $serieA    = Competicio::where('nom', 'Serie A')->first();
        $bundes    = Competicio::where('nom', 'Bundesliga')->first();
        $ligue1    = Competicio::where('nom', 'Ligue 1')->first();
        $portugal  = Competicio::where('nom', 'Liga Portugal')->first();
        $eredivisie= Competicio::where('nom', 'Eredivisie')->first();
        $belgium   = Competicio::where('nom', 'Belgian Pro League')->first();
        $superLig  = Competicio::where('nom', 'Super Lig')->first();
        $superGr   = Competicio::where('nom', 'Super League Greece')->first();
        $cyprus    = Competicio::where('nom', 'Cyprus First Division')->first();
        $kazakh    = Competicio::where('nom', 'Kazakhstan Premier League')->first();

        // 1. Arsenal
        EquipReal::create([
            'nom'           => 'Arsenal FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 2. Bayern
        EquipReal::create([
            'nom'           => 'FC Bayern München',
            'pais'          => 'Alemanya',
            'competicio_id' => $bundes->id,
        ]);

        // 3. Liverpool
        EquipReal::create([
            'nom'           => 'Liverpool FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 4. Tottenham
        EquipReal::create([
            'nom'           => 'Tottenham Hotspur FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 5. Barcelona
        EquipReal::create([
            'nom'           => 'FC Barcelona',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        // 6. Chelsea
        EquipReal::create([
            'nom'           => 'Chelsea FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 7. Sporting
        EquipReal::create([
            'nom'           => 'Sporting CP',
            'pais'          => 'Portugal',
            'competicio_id' => $portugal->id,
        ]);

        // 8. Manchester City
        EquipReal::create([
            'nom'           => 'Manchester City FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 9. Real Madrid
        EquipReal::create([
            'nom'           => 'Real Madrid CF',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        // 10. Inter
        EquipReal::create([
            'nom'           => 'FC Internazionale Milano',
            'pais'          => 'Itàlia',
            'competicio_id' => $serieA->id,
        ]);

        // 11. PSG
        EquipReal::create([
            'nom'           => 'Paris Saint-Germain',
            'pais'          => 'França',
            'competicio_id' => $ligue1->id,
        ]);

        // 12. Newcastle
        EquipReal::create([
            'nom'           => 'Newcastle United FC',
            'pais'          => 'Anglaterra',
            'competicio_id' => $premier->id,
        ]);

        // 13. Juventus
        EquipReal::create([
            'nom'           => 'Juventus FC',
            'pais'          => 'Itàlia',
            'competicio_id' => $serieA->id,
        ]);

        // 14. Atlético
        EquipReal::create([
            'nom'           => 'Atlético de Madrid',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        // 15. Atalanta
        EquipReal::create([
            'nom'           => 'Atalanta BC',
            'pais'          => 'Itàlia',
            'competicio_id' => $serieA->id,
        ]);

        // 16. Leverkusen
        EquipReal::create([
            'nom'           => 'Bayer 04 Leverkusen',
            'pais'          => 'Alemanya',
            'competicio_id' => $bundes->id,
        ]);

        // 17. Dortmund
        EquipReal::create([
            'nom'           => 'Borussia Dortmund',
            'pais'          => 'Alemanya',
            'competicio_id' => $bundes->id,
        ]);

        // 18. Olympiakos
        EquipReal::create([
            'nom'           => 'Olympiacos FC',
            'pais'          => 'Grècia',
            'competicio_id' => $superGr->id,
        ]);

        // 19. Club Brugge
        EquipReal::create([
            'nom'           => 'Club Brugge KV',
            'pais'          => 'Bèlgica',
            'competicio_id' => $belgium->id,
        ]);

        // 20. Galatasaray
        EquipReal::create([
            'nom'           => 'Galatasaray SK',
            'pais'          => 'Turquia',
            'competicio_id' => $superLig->id,
        ]);

        // 21. Monaco
        EquipReal::create([
            'nom'           => 'AS Monaco FC',
            'pais'          => 'França',
            'competicio_id' => $ligue1->id,
        ]);

        // 22. Qarabağ
        EquipReal::create([
            'nom'           => 'Qarabağ FK',
            'pais'          => 'Azerbaidjan',
            'competicio_id' => $kazakh->id, // o crea una competició específica si quieres
        ]);

        // 23. Bodø/Glimt
        EquipReal::create([
            'nom'           => 'FK Bodø/Glimt',
            'pais'          => 'Noruega',
            'competicio_id' => $eredivisie->id, // o crea una lliga noruega si quieres afinar
        ]);

        // 24. Benfica
        EquipReal::create([
            'nom'           => 'SL Benfica',
            'pais'          => 'Portugal',
            'competicio_id' => $portugal->id,
        ]);

        // 25. Marsella
        EquipReal::create([
            'nom'           => 'Olympique de Marseille',
            'pais'          => 'França',
            'competicio_id' => $ligue1->id,
        ]);

        // 26. Pafos
        EquipReal::create([
            'nom'           => 'Pafos FC',
            'pais'          => 'Xipre',
            'competicio_id' => $cyprus->id,
        ]);

        // 27. Union Saint-Gilloise
        EquipReal::create([
            'nom'           => 'Royale Union Saint-Gilloise',
            'pais'          => 'Bèlgica',
            'competicio_id' => $belgium->id,
        ]);

        // 28. PSV
        EquipReal::create([
            'nom'           => 'PSV Eindhoven',
            'pais'          => 'Països Baixos',
            'competicio_id' => $eredivisie->id,
        ]);

        // 29. Athletic Club
        EquipReal::create([
            'nom'           => 'Athletic Club',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        // 30. Napoli
        EquipReal::create([
            'nom'           => 'SSC Napoli',
            'pais'          => 'Itàlia',
            'competicio_id' => $serieA->id,
        ]);

        // 31. Copenhague
        EquipReal::create([
            'nom'           => 'FC København',
            'pais'          => 'Dinamarca',
            'competicio_id' => $eredivisie->id, // o crea lliga danesa si quieres
        ]);

        // 32. Ajax
        EquipReal::create([
            'nom'           => 'AFC Ajax',
            'pais'          => 'Països Baixos',
            'competicio_id' => $eredivisie->id,
        ]);

        // 33. Eintracht
        EquipReal::create([
            'nom'           => 'Eintracht Frankfurt',
            'pais'          => 'Alemanya',
            'competicio_id' => $bundes->id,
        ]);

        // 34. Slavia Praha
        EquipReal::create([
            'nom'           => 'SK Slavia Praha',
            'pais'          => 'República Txeca',
            'competicio_id' => $bundes->id, // o crea lliga txeca si quieres
        ]);

        // 35. Villarreal
        EquipReal::create([
            'nom'           => 'Villarreal CF',
            'pais'          => 'Espanya',
            'competicio_id' => $laliga->id,
        ]);

        // 36. Kairat Almaty
        EquipReal::create([
            'nom'           => 'FC Kairat Almaty',
            'pais'          => 'Kazakhstan',
            'competicio_id' => $kazakh->id,
        ]);
    }
}
