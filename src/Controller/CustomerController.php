<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\Type\CustomerType;
use App\Repository\CustomerRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends Controller
{
    /**
     * @Route("/show/customer", name="customer")
     */
    public function index(): Response
    {
        return $this->render('customer/index.html.twig', [
            'controller' => 'CustomerController',
        ]);
    }


      /**
     * @Route("/add/customer", name="addCustomer")
     */
    // public function addCustomer(Request $req, ManagerRegistry $res): Response
    // {
    //     $customer = new Customer();
    //     $form = $this->createForm(CustomerType::class, $customer);

    //     $form->handleRequest($req);
    //     $entity = $res->getManager();
    //     //handleform when user clicks submit button.
    //     if($form->isSubmitted() && $form->isValid()){
    //         $data = $form->getData();
    //         $customer->setName($data->getName()); 
    //         $customer->setBirthDate($data->getdate);
    //         $customer->setIsYoungDriver($data->Check());
    //         $entity->persist($customer);
    //         $entity->flush();
    //         return $this->json([
    //             'id' => $customer->getId()
    //         ]);
    //     }
    //     return $this->render('customer/index.html.twig',[
    //         'form' => $form->createView()
    //     ]);
    // }
}

?>
