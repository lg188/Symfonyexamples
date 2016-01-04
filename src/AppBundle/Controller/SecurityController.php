<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use AppBundle\Controller\JMS\Serializer;
// use AppBundle\Controller\JMS\Serializeri\SerializerBundle;
use JMS\Serializer as Serializer;
use JMS\Serializer\SerializerBuilder as SerializerBuilder;
use AppBundle\Controller\Console as Console;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
    {
	//$serializer = $container->get('jms_serializer');
	$serializer = SerializerBuilder::create()->build();
	$json = $serializer->serialize($request, 'json');
	echo Console::log($json);
	$data=$serializer->deserialize($json, 'json');

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
        //no need for code, the security system takes over
    }
}
