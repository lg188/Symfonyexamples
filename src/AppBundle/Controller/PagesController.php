<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/team")
     */
    public function contactAction()
    {
        return $this->render('AppBundle:Pages:team.html.twig', array(
            // ...
        ));
    }

}
