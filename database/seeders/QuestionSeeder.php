<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Questions();
        $question->title = 'Question 1/20';
        $question->question_body = 'Votre adresse mail ?';
        $question->question_type = 2;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 2/20';
        $question->question_body = 'Votre âge ?';
        $question->question_type = 2;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 3/20';
        $question->question_body = 'Votre sexe ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 4/20';
        $question->question_body = 'Nombre de personnes dans votre foyer (adulte & enfants - répondant inclus) ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 5/20';
        $question->question_body = 'Votre profession ?';
        $question->question_type = 2;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 6/20';
        $question->question_body = 'Quelle marque de casque VR utilisez-vous ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 7/20';
        $question->question_body = 'Sur quel magasin d\'application achetez-vous des contenus VR ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 8/20';
        $question->question_body = 'Quel casque envisagez-vous d\'acheter dans un futur proche ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 9/20';
        $question->question_body = 'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 10/20';
        $question->question_body = 'Vous utilisez principalement Bigscreen pour …..?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 11/20';
        $question->question_body = 'Combien de points (de 1 à 5) donnez-vous à la qualité de l\'image sur Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 12/20';
        $question->question_body = 'Combien de points (de 1 à 5) donnez-vous au confort d\'utilisation de l\'interface Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 13/20';
        $question->question_body = 'Combien de points (de 1 à 5) donnez-vous à la connexion réseau de Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 14/20';
        $question->question_body = 'Combien de points (de 1 à 5) donnez-vous à la qualité des graphismes 3D dans Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 15/20';
        $question->question_body = 'Combien de points (de 1 à 5) donnez-vous à la qualité audio dans Bigscreen ?';
        $question->question_type = 3;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 16/20';
        $question->question_body = 'Aimeriez-vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 17/20';
        $question->question_body = 'Aimeriez-vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 18/20';
        $question->question_body = 'Aimeriez-vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 19/20';
        $question->question_body = 'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?';
        $question->question_type = 1;
        $question->save();

        $question = new Questions();
        $question->title = 'Question 20/20';
        $question->question_body = 'Selon vous, quelle nouvelle fonctionnalité devrait exister sur Bigscreen ?';
        $question->question_type = 2;
        $question->save();
    }
}
