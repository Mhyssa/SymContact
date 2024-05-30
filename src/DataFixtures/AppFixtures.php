<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contacts = [
            $this->createContact('Marple','Tania','0123456789'),
            $this->createContact('George','Saw','0123456789'),
            $this->createContact('Dawson','Jack','0123456789'),
            $this->createContact('Dawson','Rose','0123456789'),


        ];

        foreach ($contacts as $contact){

            $manager->persist($contact);
        }

        $manager->flush();
    }
    
    private function createContact(string $nom, string $prenom, string $telephone): Contact
    {
            $contact = new Contact();
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setTelephone($telephone);
            return $contact;
    }
}
