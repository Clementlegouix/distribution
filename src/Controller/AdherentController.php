<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\IconType;
use App\Entity\Adherent;
use App\Entity\Passage;
use App\Entity\User;
use App\Entity\Icon;

class AdherentController extends Controller
{
    /**
     * @Route("/adherent", name="adherent")
     */
    public function index()
    {
        
        $repository = $this->getDoctrine()->getRepository(Adherent::class);
        $adherents = $repository->findAll();
        return $this->render('Adherent/index.html.twig', array('adherents' => $adherents));
    }

    /**
     * @Route("/adherent/ajouterPassage/{adherent}/{user}", name="ajouterPassage")
     */
    public function addPassage(Adherent $adherent, User $user)
    {
        $adh = $this->getDoctrine()
        ->getRepository(Adherent::class)
        ->find($adherent);

        $us = $this->getDoctrine()
        ->getRepository(User::class)
        ->find($user);

        $passage = new Passage();
        $passage->SetDatepassage(new \Datetime());
        $passage->SetAdherent($adh);
        $passage->setUser($us);

        foreach ($adh->getPassages() as $pass) 
        {
            $date = new \Datetime();
            if ($pass->getdatepassage()->format('Y-m-d') >= $date->format('Y-m-d') )
            {
                    $this->addFlash(
                        'danger',
                        'L\'adhérent est déjà passé !'
                    );
                    return $this->redirectToRoute('adherent');
            }
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($passage);
        $em->flush();
            $this->addFlash(
                'primary',
                'Enregistrement du passage pour l\'adhérent '.$adh->getNom().' '.$adh->getPrenom()
            );
        

        return $this->redirectToRoute('adherent');
    }

    /**
     * @Route("/adherent/supprimerPassage/{passage}", name="supprimerPassage")
     */
    public function delPassage(Passage $passage)
    {
        $pass = $this->getDoctrine()
        ->getRepository(Passage::class)
        ->find($passage);

        $em = $this->getDoctrine()->getManager();
        $em->remove($pass);
        $em->flush();
        $this->addFlash(
            'primary',
            'Le passage à bien été supprimé !'
        );
        return $this->redirectToRoute('adherent');
    }

    /**
     * @Route("/adherent/supprimer/{adherent}", name="supprimeradherent")
     */
    public function delAdherent(Adherent $adherent)
    {
        $adh = $this->getDoctrine()
        ->getRepository(Adherent::class)
        ->find($adherent);

        $em = $this->getDoctrine()->getManager();
        foreach ($adh->getPassages() as $passage) {
            $em->remove($passage);
            $em->flush();
        }
        $em->remove($adh);
        $em->flush();
        $this->addFlash(
            'primary',
            'L\'adhérent à bien été supprimé !'
        );
        return $this->redirectToRoute('adherent');
    }

    /**
     * @Route("/adherent/creer", name="creerAdherent")
     */
    public function CreerAdherent(Request $request)
    {
        $adherent = new Adherent();
        

        $form = $this->createFormBuilder($adherent)
            // ->add('Nom', TextType::class, 
            //     array ( 'attr'=> array(
            //             'class'=> 'form-control',
            //             'placeholder'=> 'Nom') ))
            // ->add('Prenom', TextType::class, 
            //     array ( 'attr'=> array(
            //             'class'=> 'form-control',
            //             'placeholder'=> 'Prénom') ))
            ->add('Idcarte', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'N° carte étudiant') ))
            ->add('Iddistri', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'N° de distribution') ))
            ->add('Icon', EntityType::class, array(
                    // looks for choices from this entity
                    'class' => Icon::class,

                    // uses the User.username property as the visible option string
                    'choice_label' => 'nom',

                    // used to render a select box, check boxes or radios
                    // 'multiple' => true,
                    // 'expanded' => true,
                ))
            ->add('Enregistrer', SubmitType::class, 
                array ( 'attr'=> array('class'=> 'btn btn-primary') ))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $adherent = $form->getData();

            $adherent->setNom(' ');
            $adherent->setprenom(' ');
            $adherent->setDatecreation(new \Datetime());
            $adherent->setPassages(null);
            $em = $this->getDoctrine()->getManager();
            $em->persist($adherent);
            $em->flush();

            $this->addFlash(
                'success',
                'L adhérent à bien été ajouté !'
            );

            return $this->render('Adherent/voir.html.twig', array('adherent' => $adherent));
        }

        return $this->render('Adherent/creer.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/adherent/editer/{adherent}", name="editerAdherent")
     */
    public function EditAdherent(Adherent $adherent, Request $request)
    {
        $adherent = $this->getDoctrine()
        ->getRepository(Adherent::class)
        ->find($adherent);
        

        $form = $this->createFormBuilder($adherent)
            ->add('Idcarte', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'N° carte étudiant') ))
            ->add('Iddistri', TextType::class, 
                array ( 'attr'=> array(
                        'class'=> 'form-control',
                        'placeholder'=> 'N° de distribution') ))
            ->add('Icon', EntityType::class, array(
                    'class' => Icon::class,
                    'choice_label' => 'nom',
                ))
            ->add('Enregistrer', SubmitType::class, 
                array ( 'attr'=> array('class'=> 'btn btn-primary') ))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $adherent = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash(
                'success',
                'L adhérent à bien été modifié !'
            );

            return $this->render('Adherent/voir.html.twig', array('adherent' => $adherent));
        }

        return $this->render('Adherent/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/adherent/{id}", name="VoirAdherent")
     */
    public function VoirAdherent(Adherent $adherent)
    {
        $em = $this->getDoctrine()->getManager();
        $adherent = $em->getRepository(adherent::class)->find($adherent->getid());
        $passages = $em->getRepository(Passage::class)->findBy(['adherent' => $adherent->getid()]);

        if (!$adherent) {
            throw $this->createNotFoundException(
                'Pas dhaderent pour l ID  '.$id
            );
        }

        return $this->render('Adherent/voir.html.twig', array('adherent' => $adherent, 'passages' => $passages));
    }

    /**
     * @Route("/load", name="loadAdherent")
     */
    public function LoadAdherent()
    {
        $em = $this->getDoctrine()->getManager();
        $adherents = $em->getRepository(Adherent::class)->findAll();

        foreach ($adherents as $adherent) 
        {
            foreach ($adherent->getPassages() as $passage) 
            {
                $em->remove($passage);
            }
            $em->remove($adherent);
        }
        $em->flush();
        
        
        return new Response('Action terminée !');
    }

    private function addAdherentLoader($start, $end, $icon)
    {
        for($i = $start ; $i < $end ; $i++)
        {
            $em = $this->getDoctrine()->getManager();
            $adherent = new Adherent();
            $adherent->setNom(' ');
            $adherent->setprenom(' ');
            $adherent->setidcarte('non renseigné');
            $adherent->setiddistri($i.'-2017-2018');
            $adherent->setDatecreation(new \Datetime());
            $adherent->setPassages(null);
            $adherent->setordrepassage($icon);

            $em->persist($adherent);
            $em->flush();

        }
    }

}
