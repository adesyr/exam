<?php

namespace App\Controller;

use App\Entity\Trainee;
use App\Form\TraineeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/createTrainee", name="form")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // On instancie un syagiaire
        $trainee = new Trainee();
        // si on veut mettre des valeurs dans le formulaire, c'est l'entity qu'on modifie
        // le formulaire html va automatiquement affiché les champs aavec des valeurs par défaut
        // correspondant aux valuers de l'entity
       // $user->setIsEnabled(true);
        // 2- cette instance, on l'associe au formulaire, pour que le formulaire puisse
        // gérer les valeurs des propriétés de cet objet
        $form = $this->createForm(TraineeFormType::class, $trainee);
        // 3- passer la requête au composant form
        $form->handleRequest($request);
        // Vérification si le formulaire a été soumis et valide
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($trainee);
                $em->flush();

                $this->addFlash('success', 'Stagiaire enregistré en base');

            }
            else {
                $this->addFlash('danger', 'Le formulaire n\'est pas valide');
            }
        }
        // on passe la vue du formulaire au template

        return $this->render('form/addTrainee.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }
}
