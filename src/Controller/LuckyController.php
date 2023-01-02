<?php
/**
 * Created for datamaua.
 * User: acidcode
 * Date: 10/11/22
 * Time: 10:36
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController {

    /**
     * @Route("/lucky/number")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

//        return new Response(
//            '<html>Number'. $number .'</html>'
//        );

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

    }

}