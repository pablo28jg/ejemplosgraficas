<?php

namespace Mastercel\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MastercelChartBundle:Default:index.html.twig', array('name' => $name));
    }
}
