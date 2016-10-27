<?php
/**
 * Created by PhpStorm.
 * User: Raffaello
 * Date: 11/10/16
 * Time: 14:20
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InicioController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $plantillas = $this->container->get('templating');

        $html = $plantillas->render("base.html.twig");
        return new Response($html);
    }

    /**
     * @Route("/{mensaje}")
     */
    public function dynamicAction($mensaje)
    {

        return $this->render("prueba/prueba.html.twig", ["mensaje" => $mensaje]);
    }
}