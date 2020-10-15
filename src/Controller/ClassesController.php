<?php

namespace App\Controller;

use App\Model\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClassesController extends AbstractController
{
    /**
     * @Route("/my-classes", name="my-classes")
     */
    public function index(Card $cardModel)
    {
        return $this->render('classes/my-classes.html.twig', [
            'cards' => $cardModel->getCards(),

        ]);
    }
}
