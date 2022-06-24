<?php

namespace App\Controller;

use App\Entity\Car;
use App\Entity\Customer;
use App\Form\Type\CustomerType;
use App\Repository\CarRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends Controller
{
    /**
     * @Route("/showcar",name="car_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cars = $em->getRepository(Car::class)->findAll();

        return $this->render('car/index.html.twig', array(
            'cars' => $cars,
        ));
    }

  /**
   * Finds and displays a car entity.
   *
   * @Route("/car/{id}", name="car_show")
   */
  public function showAction(Car $car)
  {
    return $this->render('car/show.html.twig', array(
      'car' => $car,
    ));

  }

   /**
  * @Route("/show/car", name="showAniAction")
  */
  public function showAniAction(CarRepository $repo): Response
    {
        //1 Tim 1 voi 1 dieu kien
        // $animal = $repo->findOneBy([
        //     'email' => "Kha@gmail.com"
        // ]);
        // $animal = $repo->findOneBy([
        //     'email' => "Kha@gmail.com",
        //     'weight' => 4
        // ]);
        
        //2 findby
        // $animal = $repo->findBy([
        //     'email' => "Kha1@gmail.com"
        // ]);
        // if(!$animal){
        //     throw $this->createNotFoundException("No animal found");
        // }

        //3 findall

        $animal = $repo->findAll([
            'email' => "Kha@gmail.com"
        ]);

        return $this->json($this);
    }
//   function getAge($birthdate = '00-00-0000') {
//       if ($birthdate == '00-00-0000') return 'Unknown';
   
//       $bits = explode('-', $birthdate);
//       $age = date('d') - $bits[0] - 1;
   
//       $arr[1] = 'm';
//       $arr[2] = 'Y';
   
//       for ($i = 1; $arr[$i]; $i++) {
//           $n = date($arr[$i]);
//           if ($n < $bits[$i])
//               break;
//           if ($n > $bits[$i]) {
//               ++$age;
//               break;
//           }
//       }
//       return $age;
//   }
// }
}


