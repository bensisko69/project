<?php

namespace TechCorp\FrontBundle\Controller;

class indexAction
{
    public function indexAction()
    {
		$message = 'Mon premier message';

 		 return $this->container->get('templating')->renderResponse('ProjectFrontBundleBundle:Default:index.html.twig',
   		array('message' => $message)
   		);
    }
}

?>