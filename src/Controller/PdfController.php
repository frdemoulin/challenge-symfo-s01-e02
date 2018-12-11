<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Stream;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PdfController extends AbstractController
{
    public $names = [
        [
            'name' => 'Elsa',
            'description' => 'Nunc fringilla fermentum odio, sed lobortis risus malesuada ac. Donec fermentum, urna id suscipit eleifend, tellus dolor congue tortor, ac sollicitudin tellus nisi vitae dolor. Suspendisse imperdiet ante et tempor bibendum. Vestibulum eu faucibus nibh, vel elementum purus. Cras et aliquet dui. Mauris imperdiet, arcu non porta hendrerit, odio urna.',
        ],
        [
            'name' => 'Simon',
            'description' => 'Nunc fringilla fermentum odio, sed lobortis risus malesuada ac. Donec fermentum, urna id suscipit eleifend, tellus dolor congue tortor, ac sollicitudin tellus nisi vitae dolor. Suspendisse imperdiet ante et tempor bibendum. Vestibulum eu faucibus nibh, vel elementum purus. Cras et aliquet dui. Mauris imperdiet, arcu non porta hendrerit, odio urna.',
        ],
        [
            'name' => 'Guillaume',
            'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Praesent eu nisi erat. Nulla facilisi. Suspendisse ut libero nec nisi luctus tincidunt. Donec placerat vulputate leo et tempor. Proin euismod auctor porttitor. Nunc sed volutpat dolor. Mauris fermentum pretium arcu quis.',
        ],
        [
            'name' => 'Julien',
            'description' => 'Suspendisse potenti. Donec quis consectetur odio. Donec quis lacus at justo volutpat luctus eu non tortor. Curabitur sit amet sem nec enim ornare volutpat vitae eget enim. In hac habitasse platea dictumst. Nullam eros lectus, eleifend ut diam in, scelerisque blandit nulla. In hac habitasse platea dictumst. Sed ut blandit.',
        ],
        [
            'name' => 'Charles',
            'description' => 'Nunc fringilla fermentum odio, sed lobortis risus malesuada ac. Donec fermentum, urna id suscipit eleifend, tellus dolor congue tortor, ac sollicitudin tellus nisi vitae dolor. Suspendisse imperdiet ante et tempor bibendum. Vestibulum eu faucibus nibh, vel elementum purus. Cras et aliquet dui. Mauris imperdiet, arcu non porta hendrerit, odio urna.',
        ],
        [
            'name' => 'Romain',
            'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Praesent eu nisi erat. Nulla facilisi. Suspendisse ut libero nec nisi luctus tincidunt. Donec placerat vulputate leo et tempor. Proin euismod auctor porttitor. Nunc sed volutpat dolor. Mauris fermentum pretium arcu quis.',
        ],
        [
            'name' => 'Fabien',
            'description' => 'Suspendisse potenti. Donec quis consectetur odio. Donec quis lacus at justo volutpat luctus eu non tortor. Curabitur sit amet sem nec enim ornare volutpat vitae eget enim. In hac habitasse platea dictumst. Nullam eros lectus, eleifend ut diam in, scelerisque blandit nulla. In hac habitasse platea dictumst. Sed ut blandit.',
        ],
        [
            'name' => 'Christophe',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        ],
    ];

// $file = __DIR__.'/../../public/assets/pdf/calendrier-2017-turquoise.pdf';
        //$file = $finder->files()->in(__DIR__.'/../../public/assets/pdf');
        //$file = path('public/assets/pdf/calendrier-2017-turquoise.pdf');

    /**
     * @Route("/pdf", name="pdf")
     */
    public function streamPdf()
    {
        $response = new BinaryFileResponse(__DIR__.'/../../public/assets/pdf/calendrier-2017-turquoise.pdf');
        
        return $response;
    }

    /**
     * @Route("/api/students", name="api_students")
     */
    public function jsonResponseStudents()
    {
        $response = new JsonResponse(array($this->names));
        
        return new Response($response);
    }

}
