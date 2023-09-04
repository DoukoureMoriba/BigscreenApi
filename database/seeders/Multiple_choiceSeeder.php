<?php

namespace Database\Seeders;

use App\Models\Multiple_choice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Multiple_choiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choice = new Multiple_choice();
        $choice->wording = 'Homme';
        $choice->question_choice_id = 3;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Femme';
        $choice->question_choice_id = 3;
        $choice->save();
        
        $choice = new Multiple_choice();
        $choice->wording = 'Préfère ne pas répondre';
        $choice->question_choice_id = 3;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oculus Quest';
        $choice->question_choice_id = 6;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oculus Rift/s';
        $choice->question_choice_id = 6;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'HTC Vive';
        $choice->question_choice_id = 6;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Windows Mixed
        Reality';
        $choice->question_choice_id = 6;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Valve index';
        $choice->question_choice_id = 6;
        $choice->save();
        
        
        $choice = new Multiple_choice();
        $choice->wording = 'SteamVR';
        $choice->question_choice_id = 7;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Occulus store';
        $choice->question_choice_id = 7;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Viveport';
        $choice->question_choice_id = 7;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Windows store';
        $choice->question_choice_id = 7;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Occulus Quest';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Occulus Go';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'HTC Vive Pro';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'PSVR';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Autre';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Aucun';
        $choice->question_choice_id = 8;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'regarder la TV en direct';
        $choice->question_choice_id = 10;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'regarder des films';
        $choice->question_choice_id = 10;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'travailler,
        jouer en solo';
        $choice->question_choice_id = 10;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'jouer en équipe';
        $choice->question_choice_id = 10;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oui';
        $choice->question_choice_id = 16;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Non';
        $choice->question_choice_id = 16;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oui';
        $choice->question_choice_id = 17;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Non';
        $choice->question_choice_id = 17;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oui';
        $choice->question_choice_id = 18;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Non';
        $choice->question_choice_id = 18;
        $choice->save();

        $choice = new Multiple_choice();
        $choice->wording = 'Oui';
        $choice->question_choice_id = 19;
        $choice->save();

        
        $choice = new Multiple_choice();
        $choice->wording = 'Non';
        $choice->question_choice_id = 19;
        $choice->save();

    }
}
