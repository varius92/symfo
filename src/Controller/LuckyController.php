<?php
/**
 * Created by PhpStorm.
 * User: aseifert
 * Date: 11.10.18
 * Time: 18:07
 */

namespace App\Controller;

use App\Annotations\Schinken;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends AbstractController
{



    public function number()
    {
        $number = random_int(0, 100);

        return $this->render(
            'lucky/number.html.twig', [
                'number' => $number,
            ]
        );
    }



}