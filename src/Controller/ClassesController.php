<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClassesController extends AbstractController
{
    /**
     * @Route("/my-classes", name="my-classes")
     */
    public function index()
    {
        return $this->render('classes/my-classes.html.twig', [
            'controller_name' => 'ClassesController',
        ]);
    }
}
