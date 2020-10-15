<?php

namespace App\Model;

class Card
{
    private $cards = [
        [
            'class' => 'Philosophie',
            'next-class' => 'Demain',
            'student' => 'Pierre',
            'day' => 'Jeudi, Samedi',
            'limite-date-start' => 'Mercredi 21 octobre',
            'hours' => '1h',
            'limite-hour-start' => '15:00',
            'teacher' => 'Camille',
        ],
        [
            'class' => 'Mathématiques',
            'next-class' => 'Mercredi 21 octobre',
            'student' => 'Paul',
            'day' => 'Lundi, Mardi, Mercredi.',
            'limite-date-start' => 'Mercredi 21 octobre',
            'hours' => '1h',
            'limite-hour-start' => '18:00',
            'teacher' => 'Jérome',
        ],

        [
            'class' => 'Anglais',
            'next-class' => 'Mercredi 21 octobre ',
            'student' => 'Jacques',
            'day' => 'Samedi, Dimanche',
            'limite-date-start' => 'Jeudi 22 octobre',
            'hours' => '1h30',
            'limite-hour-start' => '15:00',
            'teacher' => 'Lucas',
        ],

        [
            'class' => 'Français',
            'next-class' => 'Demain',
            'student' => 'Luc',
            'day' => 'Lundi, Mercredi, Samedi.',
            'limite-date-start' => 'Jeudi 22 octobre',
            'hours' => '2h',
            'limite-hour-start' => '17:00',
            'teacher' => 'Jérémy',
        ],

       
    ];

    
    public function getCards()
    {
        return $this->cards;
    }

  
}
