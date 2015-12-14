<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MathController extends Controller
{
	public function sumAction($a,$b)
	{
		$s=$a+$b;
		return $this->render('AppBundle:Math:sum.html.twig',
			array('a'=>$a, 'b'=> $b, 's' => $s)
		);    
	}
}
