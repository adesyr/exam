<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Entity\Trainee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TraineeController extends AbstractController
{
    /**
     * @Route("/trainee", name="trainee")
     */
    public function addTrainee()
    {

        $em = $this->getDoctrine()->getManager();
        $trainee = new Trainee();
        $trainee->setName('Adeline');
        $trainee->setPhone('0321456987');
        $trainee->setBirthday(new \DateTime());

        // relation
        $skill = new Skill();
        $skill->setName('PHP');

        // liaison avec le stagiaire
        $trainee->addSkill($skill);

        $em->flush();
        return $this->render('form/addFormTrainee.html.twig', [
            'skill' => '$skill',
        ]);
    }
}

//return $this->render('advanced-doctrine/associated_entities.html.twig',
//    ['user' => $user]