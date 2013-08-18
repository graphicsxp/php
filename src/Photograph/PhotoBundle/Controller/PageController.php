<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {

    public function contactAction() {
        return $this->render('PhotographPhotoBundle:Page:contact.html.twig');
    }

    public function portfolioAction($name) {
        switch ($name) {
            case 'pierre-et-angelique':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-pierre-et-angelique.html.twig');
                break;
            default :
                return $this->render('PhotographPhotoBundle:Page:portfolio.html.twig');
                break;
        }
        return $this->render('PhotographPhotoBundle:Page:portfolio.html.twig');
    }

    public function aboutAction() {
        return $this->render('PhotographPhotoBundle:Page:about.html.twig');
    }

    public function faqAction() {
        return $this->render('PhotographPhotoBundle:Page:faq.html.twig');
    }

    public function sitemapAction() {
        return $this->render('PhotographPhotoBundle:Page:sitemap.html.twig');
    }

    public function galleryAction() {
        return $this->render('PhotographPhotoBundle:Page:gallery.html.twig');
    }

}
