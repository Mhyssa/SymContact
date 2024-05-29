<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnnuaireController extends AbstractController
{
    #[Route('/', name: 'app_annuaire')]
    public function index(): Response
    {
        $contacts = [
            [
                'nom' => 'Dupont',
                'prenom' => 'Marc',
                'telephone' => '0123456789',
            ],
            [
                'nom' => 'Lewitt',
                'prenom' => 'Joe',
                'telephone' => '0123456789',
            ],            [
                'nom' => 'Marple',
                'prenom' => 'Tania',
                'telephone' => '0123456789',
            ],
        ];

        return $this->render('annuaire/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }
}


