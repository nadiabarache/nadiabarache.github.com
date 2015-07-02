<?php

namespace BP\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {

        return $this->render('BPBlogBundle:Blog:index.html.twig');
    }

    public function porfolioAction()
    {
        $tags1 =array('Smfony2', 'Doctrine', 'Twig', 'Bundle', 'GIT', 'Bootstrap' );
        $tags2 =array('Smfony2', 'Doctrine', 'Twig', 'Foundation', 'GIT', 'Capifony' );
        $tags3 =array('Cordova', 'JQuery', 'mobile', 'android', 'IOS');
        $tags4 =array('Ruby', 'On', 'Rails','Bootstrap', 'GIT', 'Heroku' );
        return $this->render('BPBlogBundle:Blog:porfolio.html.twig', array('tags1' => $tags1,
                                                                            'tags2' => $tags2,
                                                                            'tags3' => $tags3,
                                                                            'tags4'   => $tags4
                                                                         ));
    }

     public function blogAction()
    {
        return $this->render('BPBlogBundle:Blog:blog.html.twig');
    }
    public function artcileOneAction()
    {
        return $this->render('BPBlogBundle:Blog:articleOne.html.twig');
    }

     public function contactAction()
    {
        return $this->render('BPBlogBundle:Blog:contact.html.twig');
    }
}
