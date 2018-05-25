<?php
	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;

	class DefaultController extends Controller
	{
		public function index()
		{
			$content = $this->get('templating')->render('index.html.twig');
			return new Response($content);
		}
	}
?>