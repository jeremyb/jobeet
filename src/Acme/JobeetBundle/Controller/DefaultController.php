<?php

namespace Acme\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @extra:Route("/", name="_homepage")
     * @extra:Template()
     */
    public function indexAction()
    {
        return array();
        //return $this->render('AcmeJobeetBundle:Default:index.html.twig');
    }
}
