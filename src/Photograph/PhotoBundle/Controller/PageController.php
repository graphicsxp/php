<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function contactAction()
    {
        return $this->render('PhotographPhotoBundle:Page:contact.html.twig');
    }
}
