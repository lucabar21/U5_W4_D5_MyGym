<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Course;
use App\Models\Slot;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity = Activity::all();
        $slot = Slot::all();


        Course::create([
            'name' => 'Yoga',
            'description' => 'Lezione di Yoga per principianti. Questa lezione introduce le basi dello yoga, comprese le pose fondamentali, le tecniche di respirazione e il rilassamento. Ideale per migliorare la flessibilità, ridurre lo stress e aumentare la consapevolezza del corpo.',
            'image' => 'https://www.my-personaltrainer.it/2020/03/09/yoga_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Pilates',
            'description' => 'Lezione di Pilates per rafforzare il core. Focus su esercizi che migliorano la postura, aumentano la forza del core e promuovono l\'equilibrio e la coordinazione. Perfetto per chi desidera tonificare i muscoli e aumentare la stabilità.',
            'image' => 'https://www.my-personaltrainer.it/2020/04/22/pilates_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Spinning',
            'description' => 'Allenamento intenso di spinning. Una sessione di ciclismo indoor ad alta energia, progettata per aumentare la resistenza cardiovascolare e bruciare calorie. Adatto a tutti i livelli di fitness con la possibilità di regolare l\'intensità.',
            'image' => 'https://www.my-personaltrainer.it/2019/11/18/spinning-orig.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'CrossFit',
            'description' => 'Sessione di CrossFit ad alta intensità. Un programma di allenamento che combina sollevamento pesi, esercizi di resistenza e movimenti funzionali per un workout completo. Ottimo per aumentare la forza, la resistenza e la potenza.',
            'image' => 'https://www.my-personaltrainer.it/2019/10/31/crossfit_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Zumba',
            'description' => 'Lezione di Zumba per divertirsi e bruciare calorie. Una combinazione di movimenti di danza e esercizi aerobici al ritmo di musica latina e internazionale. Perfetta per chi cerca un allenamento divertente e coinvolgente.',
            'image' => 'https://www.my-personaltrainer.it/2019/11/18/zumba_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Body Pump',
            'description' => 'Lezione di Body Pump per tonificare i muscoli. Un allenamento con bilancieri che mira a rafforzare e tonificare i muscoli di tutto il corpo. Ideale per migliorare la forza muscolare e aumentare la resistenza.',
            'image' => 'https://www.my-personaltrainer.it/2021/06/09/body-pump-cos-e-ed-efficacia_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'HIIT',
            'description' => 'Allenamento ad intervalli ad alta intensità (HIIT). Un workout che alterna periodi di esercizio intenso con brevi pause di recupero. Ottimo per migliorare la capacità aerobica, aumentare il metabolismo e bruciare grassi in poco tempo.',
            'image' => 'https://www.my-personaltrainer.it/2019/12/03/high-intensity-interval-training-hiit-_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Aerobica',
            'description' => 'Lezione di aerobica per migliorare la resistenza. Un allenamento cardiovascolare che combina movimenti ritmici con esercizi di resistenza. Ideale per aumentare la capacità cardiovascolare e migliorare la coordinazione.',
            'image' => 'https://www.my-personaltrainer.it/2022/01/24/lezione-di-aerobica_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Kickboxing',
            'description' => 'Lezione di Kickboxing per autodifesa e fitness. Un allenamento che combina tecniche di pugilato e calci con esercizi di resistenza. Ottimo per migliorare la forza, la coordinazione e imparare le basi dell\'autodifesa.',
            'image' => 'https://www.my-personaltrainer.it/2019/11/18/fit-boxe_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);

        Course::create([
            'name' => 'Stretching',
            'description' => 'Sessione di stretching per migliorare la flessibilità. Esercizi di allungamento statici e dinamici progettati per aumentare la flessibilità muscolare e la mobilità articolare. Perfetto per il recupero muscolare e la prevenzione degli infortuni.',
            'image' => 'https://www.my-personaltrainer.it/2021/05/03/sollevamento-gambe_900x760.jpeg',
            'slot_id' => $slot->random()->id,
            'activity_id' => $activity->random()->id,
        ]);
    }
}
