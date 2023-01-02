<?php
/**
 * Created for datamaua.
 * User: acidcode
 * Date: 30/11/22
 * Time: 13:05
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Homepage extends AbstractController {

    /**
     * @Route("/")
     */

    public function index(): Response {
        return $this->render("homepage/homepage.twig.html");
    }

}
