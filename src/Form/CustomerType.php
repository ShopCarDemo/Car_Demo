<?php
namespace App\Form\Type;

use App\Controller\AnimalController;
use App\Entity\Animal;
use App\Entity\CatAni;
use App\Entity\Customer;
use DateTime;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class CustomerType extends AbstractType{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Customer::class
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name',TextType::class)
        ->add('birthdate',DateTimeType::class,[
            'widget' => 'single_text'
        ])

        // ->add('weight',TextType::class)
        // ->add('cat',EntityType::class,[
        //     'class' => CatAni::class,
        //     'choice_label' => 'name'
        // ])
        ->add('save',SubmitType::class,[
            'label' => "Save"
        ]);
    }
    // function getAge($birthdate = '0000-00-00') {
    //     if ($birthdate == '0000-00-00') return 'Unknown';
     
    //     $bits = explode('-', $birthdate);
    //     $age = date('Y') - $bits[0] - 1;
     
    //     $arr[1] = 'm';
    //     $arr[2] = 'd';
     
    //     for ($i = 1; $arr[$i]; $i++) {
    //         $n = date($arr[$i]);
    //         if ($n < $bits[$i])
    //             break;
    //         if ($n > $bits[$i]) {
    //             ++$age;
    //             break;
    //         }
    //     }
    //     return $age;
    // }
    }
?>