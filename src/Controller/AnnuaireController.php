<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnnuaireController extends AbstractController
{
    #[Route('/', name: 'app_annuaire')]
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();
        return $this->render('annuaire/index.html.twig', [
            'contacts' => $contacts,
            ]);
    }

  

}


