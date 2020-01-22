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
               'username' => $student->getUsername(),
               'first_name' => $student->getFirstName(),
               'last_name' => $student->getLastName(),
               'mail' => $student->getMail(),
               'promo' => $student->getPromo()
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
     * @Route("/student/get/{id}", name="get student")
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

        $response = array( 'uid' => $student->getUid(),
        'username' => $student->getUsername(),
        'first_name' => $student->getFirstName(),
        'last_name' => $student->getLastName(),
        'mail' => $student->getMail(),
        'promo' => $student->getPromo());
        
       return new JsonResponse( $response);
      
       
    }
}
