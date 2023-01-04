<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Acid\Rendimento\Rendimento;

class RendimentoController extends AbstractController
{
    /**
     * @Route("/rendimento/gerar-pix", name="gerar_pix");
     */
    public function gerarPix(): Response {

        $rendimento = new Rendimento();
        if($rendimento->conexao()) {
            $json = json_encode(array("retorno" => true));
        } else {
            $json = json_encode(array("retorno" => false));
        }

        return new JsonResponse($json, Response::HTTP_OK);

    }
}