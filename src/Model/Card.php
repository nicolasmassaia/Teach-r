<?php

namespace App\Model;

class Card
{
    private $cards = [
        [
            'class' => 'Philosophie',
            'nextClass' => 'Demain',
            'student' => 'Pierre',
            'day' => 'Jeudi, Samedi',
            'limiteDateStart' => 'Mercredi 21 octobre',
            'hours' => '1h',
            'limiteHourStart' => '15:00',
            'teacher' => 'Camille',
        ],
        [
            'class' => 'Mathématiques',
            'nextClass' => 'Mercredi 21 octobre',
            'student' => 'Paul',
            'day' => 'Lundi, Mardi, Mercredi.',
            'limiteDateStart' => 'Mercredi 21 octobre',
            'hours' => '1h',
            'limiteHourStart' => '18:00',
            'teacher' => 'Jérome',
        ],

        [
            'class' => 'Anglais',
            'nextClass' => 'Mercredi 21 octobre ',
            'student' => 'Jacques',
            'day' => 'Samedi, Dimanche',
            'limiteDateStart' => 'Jeudi 22 octobre',
            'hours' => '1h30',
            'limiteHourStart' => '15:00',
            'teacher' => 'Lucas',
        ],

        [
            'class' => 'Français',
            'nextClass' => 'Demain',
            'student' => 'Luc',
            'day' => 'Lundi, Mercredi, Samedi.',
            'limiteDateStart' => 'Jeudi 22 octobre',
            'hours' => '2h',
            'limiteHourStart' => '17:00',
            'teacher' => 'Jérémy',
        ],

       
    ];

    
    public function getCards()
    {
        return $this->cards;
    }

  
}
