<?php
/**
 * Created by PhpStorm.
 * User: belozerovany
 * Date: 17.06.15
 * Time: 16:14
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller {
	public function indexAction($limit) {
		$number = rand(1, $limit);

		return $this->render(
			'AcmeDemoBundle:Random:index.html.twig',
			array('number' => $number)
		);
	}
}