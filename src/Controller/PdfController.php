<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Model\StudentModel;

class PdfController extends AbstractController
{
    /**
     * @Route("/pdf", name="pdf")
     */
    public function streamPdf()
    {   
        // méthode téléchargement fichier
        // return $this->file('pdf/calendrier-2017-turquoise.pdf');

        // méthode affichage dans le navigateur sans téléchargement
        // return $this->file('pdf/calendrier-2017-turquoise.pdf', 'calendrier-2017-turquoise.pdf', ResponseHeaderBag::DISPOSITION_INLINE);

        $response = new BinaryFileResponse(__DIR__.'/../../public/assets/pdf/calendrier-2017-turquoise.pdf');        
        return $response;
    }

    /**
     * @Route("/api/students", name="api_students")
     */
    public function jsonResponseStudents()
    {
        $studentModel = new StudentModel();
        $student = $studentModel->getStudentList();

        return $this->json($student);
    }

}
