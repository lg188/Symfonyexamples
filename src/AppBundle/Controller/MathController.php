<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MathController extends Controller {
	/**
	 * @Route("/sum/{a}/[b]",
	 *		name = "sume", defaults={"a"=0, "b"=0},
	 *		requirements = {"a": "\d+", "b" : "\d+"})
	 */
	public function sumAction() {

		$s = $a + $b;
		return $this->render('AppBundle:Math:sum.html.twig', array( 'a'=>$a, 'b'=>$b, 's'=>$s));
	}

}
?>
