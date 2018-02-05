<?php

namespace TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TemplateBundle:Default:index.html.twig');
    }
    public function ContactAction()
    {
        return $this->render('TemplateBundle:Default:Contact.html.twig');
    }
}
