<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Student;
use Symfony\Component\HttpFoundation\JsonResponse;

class StudentController extends AbstractController
{
    /**
     * @Route("/students", name="students")
     */
    public function getStudents()
    {

        
        $students = $this->getDoctrine()
        ->getRepository(Student::class)
        ->findAll();
       
        foreach($students as $student) {
            $arrayCollection[] = array(
                'uid' => $student->getUid(),
               'prenomStudent' => $student->getPrenomstudent(),
               'nomStudent' => $student->getNomstudent(),
               'emailStudent' => $student->getEmailstudent(),
               'promoStudent' => $student->getPromostudent(),
               'anneeAcademiqueStudent' => $student->getAnneeacademiquestudent(),
               'genderStudent' => $student->getGenderstudent(),
               'campusStudent' => $student->getCampusstudent(),
               'etatDossierStudent' => $student->getEtatdossierstudent(),
            );
       }
       

        if (!$students) {
            throw $this->createNotFoundException(
                'No students found'
            );
        }
        
       return new JsonResponse( $arrayCollection);
      
       
    }

    /**
     * @Route("/student/{id}", name="get student")
     */
    public function getStudent($id)
    {

        $student = $this->getDoctrine()
        ->getRepository(Student::class)
        ->findOneBy(array('uid' => $id));
       
        

        if (!$student) {
            throw $this->createNotFoundException(
                'No student found'
            );
        }

        $response = array(  'uid' => $student->getUid(),
               'prenomStudent' => $student->getPrenomstudent(),
               'nomStudent' => $student->getNomstudent(),
               'emailStudent' => $student->getEmailstudent(),
               'promoStudent' => $student->getPromostudent(),
               'anneeAcademiqueStudent' => $student->getAnneeacademiquestudent(),
               'genderStudent' => $student->getGenderstudent(),
               'campusStudent' => $student->getCampusstudent(),
               'etatDossierStudent' => $student->getEtatdossierstudent(),
            );
        
       return new JsonResponse( $response);
      
       
    }
}
