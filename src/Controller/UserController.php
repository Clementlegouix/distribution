<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/benevoles", name="benevoles")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();
        return $this->render('User/index.html.twig', array('users' => $users));
    }

    /**
     * @Route("/benevoles/desactiverbenevoles/{id}", name="desactiverbenevoles")
     */
    public function desactiverbenevoles()
    {
    	return $this->redirectToRoute('benevoles');
    }

	/**
     * @Route("/benevoles/activerbenevoles/{id}", name="activerbenevoles")
     */
    public function activerbenevoles()
    {
    	return $this->redirectToRoute('benevoles');
    }
}
