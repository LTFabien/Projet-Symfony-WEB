<?php
/**
 * Created by PhpStorm.
 * User: Fabien
 * Date: 11/02/2019
 * Time: 10:32
 */

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function homepage(){
        return new Response("OMG my first Symfony page!!!");
    }
}