<?php

use PHPUnit\Framework\TestCase;

class ApiPIxBBTest extends TestCase {

    public function testConexao(): void {

        $apiPixBB = new App\Acid\BancoBrasil\ApiPixBB();
        $this->assertSame(true, $apiPixBB->conexao());

    }

//    public function testgerarPix(): void {
//
//       // $this->assertTrue();
//    }

}