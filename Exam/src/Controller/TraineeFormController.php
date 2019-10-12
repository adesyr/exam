<?php

namespace App\Controller;

use App\Entity\Trainee;
use App\Form\TraineeFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TraineeFormController extends AbstractController
{
    /**
     * @Route("/createTrainee", name="form")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // On instancie un stagiaire
        $trainee = new Trainee();

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

        return $this->render('form/addFormTrainee.html.twig', [
            'formTrainee' => $form->createView(),
            'trainee' => $trainee
        ]);
    }
}
