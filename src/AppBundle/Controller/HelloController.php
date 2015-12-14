<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class HelloController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return new Response("Hello");
    }
}
?>
