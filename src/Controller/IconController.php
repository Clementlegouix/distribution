<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\IconType;
use App\Entity\Icon;

class IconController extends Controller
{
    /**
     * @Route("/icon", name="icon")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Icon::class);
        $icons = $repository->findAll();
        return $this->render('Icon/index.html.twig', array('icons' => $icons));
    }

    /**
     * @Route("/icon/creer", name="creerIcon")
     */
    public function Creer(Request $request)
    {
        $icon = new Icon();
        $form = $this->createForm(IconType::class, $icon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        	/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $icon->getImage();
            //$fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('icon_directory'),
                $file->getClientOriginalName()
            );

            $icon->setImage($file->getClientOriginalName());

            $em = $this->getDoctrine()->getManager();
            $em->persist($icon);
            $em->flush();

            $this->addFlash(
                'success',
                'L\'icon à bien été ajouté !'
            );

            return $this->redirectToRoute('icon');
        }

        $this->addFlash(
                'warning',
                'L\'icon à bien été ajouté !'
            );

        return $this->render('Icon/creer.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/icon/supprimer/{icon}", name="supprimerIcon")
     */
    public function delAdherent(Icon $icon)
    {
        $adh = $this->getDoctrine()
        ->getRepository(Icon::class)
        ->find($icon);

        $em = $this->getDoctrine()->getManager();
        $em->remove($adh);
        $em->flush();
        $this->addFlash(
            'primary',
            'L\'icon à bien été supprimé !'
        );
        return $this->redirectToRoute('icon');
    }
}
