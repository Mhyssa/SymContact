<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnuaireController extends AbstractController
{
    #[Route('/', name: 'app_annuaire')]
    public function index(): Response
    {
        $contacts = [
            $this->createContact('Marple','Tania','0123456789'),
            $this->createContact('George','Saw','0123456789'),
            $this->createContact('Dawson','Jack','0123456789'),

        ];

        return $this->render('annuaire/index.html.twig', [
            'contacts' => $contacts,
        ]);
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


