<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HowIFeelController extends AbstractController
{
    /**
     * @Route("/howifeel", name="how_i_feel")
     */
    public function showAleaWord()
    {
        $arrayWord = ['bien', 'mal', 'au top', 'au fond du trou'];

        $aleaKey = array_rand($arrayWord);

        return new Response('<html><body>Je me sens ' . $arrayWord[$aleaKey] . '.</body></html>');
    }

    /**
     * @Route("/howifeel/emoji", name="how_i_feel_emoji")
     */
    public function showEmoji()
    {
        $arrayImageName = ['cold_sweat.png', 'grimacing.png', 'heart_eyes.png', 'smile.png'];

        $aleaKey = array_rand($arrayImageName);

        return $this->render('howifeel/emoji.html.twig', [
            'imageName' => $arrayImageName[$aleaKey]
        ]);
    }
}
