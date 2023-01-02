<?php
/**
 * Created for datamaua.
 * User: acidcode
 * Date: 10/11/22
 * Time: 10:41
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorld {

    /**
     * @Route("helloworld/index")
     */

    public function index(): void {
        dd("testee");
    }

}