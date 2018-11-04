<?php

declare(strict_type=1);

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PersonController extends AbstractController
{
  /**
   * @Route("/people/list", name="list_people")
   * @Method("GET")
   */
  public function listPeople()
  {
    $people = $this->getDoctrine()->getRepository(Person::class)->findAll();

    return $this->render('person/listPeople.html.twig', ['people' => $people]);
  }
}
