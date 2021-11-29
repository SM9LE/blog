<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $contacts = [
            new \App\Entity\Contact('Berni', 'Quentin', 'az@hotmail.com', 'hehe', 'Ouioui', false),
            new \App\Entity\Contact('Goal', 'Jeremie', 'be@hotmail.com', 'haha', 'NonNon', true),
            new \App\Entity\Contact('Messi', 'Leo', 'cr@hotmail.com', 'hihi', 'JeSaisPas', false),
            new \App\Entity\Contact('Cristni', 'Ronalgros', 'dt@hotmail.com', 'hoho', 'PeutEtrePeutEtre', false)
        ];

        foreach ($contacts as $contact) {
            $manager->persist($contact);
        }
        $manager->flush();
    }
}