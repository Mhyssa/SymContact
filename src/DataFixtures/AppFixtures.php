<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('es_ES');

        for ($i=0; $i < 50; $i++) {
            $contact = $this->createContact(
                    $faker->lastName(),
                    $faker->firstName(),
                    $faker->phoneNumber()
                );

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
