<?php


namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller {
	public function helloAction() {
		return $this->render( 'AppBundle:Hello:hello.html.twig', 
			array( /* lege array (geen data naar template) */ ));    
	}
}

?>
