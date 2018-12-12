<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\StudentModel;

class ClassroomController extends AbstractController
{
    // route /students
    public function showStudents(SessionInterface $session)
    {
        $studentModel = new StudentModel();

        $studentList = $studentModel->getStudentList();

        // on stocke en session Christophe à la clé lastStudent

        return $this->render('classroom/students.html.twig', [
            'student_list' => $studentList,
            'lastStudent' => $session->get('lastStudent')
        ]);
    }

    // route /students/{id}
    public function showStudentInfo(SessionInterface $session, $id)
    {
        $studentModel = new StudentModel();

        // récupération des infos de l'étudiant d'id donné
        $student = $studentModel->getStudent($id);

        // si la variable $student retourne false => pas d'etudiant trouvé
        if(!$student){
            // on lance une exception grace au mot clef "throw", on utilise la fonction
            // fournie par AbstractControlle ou ControllerTrait createNotFoundException pour lancer 
            throw $this->createNotFoundException('Etudiant non trouvé');
        }

        // Comme j'ai prefixé / typehint ma variable $session avec mon interface de session je peux directement utiliser ma variable pour stocker ou recuperer des valeurs en session
        $session->set('lastStudent', $student);

        return $this->render('classroom/student_info.html.twig', [
            'student' => $student,
            'id' => $id
        ]);
    }
}
