<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void
    {$contacts = [
        ["Quentin", "Bernigole", 42, true, "adresse.email@nom.fr", "Sujet", "Message"],
        ["Gael", "Isoird", 23, true, "adresse.email@nom.fr", "Sujet", "Message"],
        ["Jean-luc", "Bompard", 21, true, "adresse.email@nom.fr", "Sujet", "Message"],
        ["Alexandre", "Soyer", 29, true, "adresse.email@nom.fr", "Sujet", "Message"],
        ["Jesaispas", "Kroemer", 77, false, "adresse.email@nom.fr", "Sujet", "message"],
        ["Michel", "Adassovsky", 56, false, "adresse.email@nom.fr", "Sujet", "Message"],
    ];

        foreach ($contacts as $contact) {
            $contact2 = new \App\Entity\Contact();
            $contact2->setPrenom($contact[0]);
            $contact2->setNom($contact[1]);
            $contact2->setAge($contact[2]);
            $contact2->setNewsletter($contact[3]);
            $contact2->setEmail($contact[4]);
            $contact2->setSujet($contact[5]);
            $contact2->setMessage($contact[6]);
            $manager->persist($contact);
        }

        $manager->flush();
    }
}