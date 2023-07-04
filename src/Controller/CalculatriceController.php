<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatriceController extends AbstractController
{
    #[Route('/calculatrice', name: 'app_calculatrice')]
    public function index(Request $request): Response
    {
        
        return $this->render('calculatrice/index.html.twig', [
            'controller_name' => 'CalculatriceController',
        ]);
    }
     #[Route('/calculatrice/action', name: 'app_calculatrice_action', methods: ['POST'])]
    public function calculatrice_action(Request $request): Response
    {
        if($request->isMethod('POST'))
        {
            $number_a = $request->get('number_a');
            $number_b = $request->get('number_b');
            $signe = $request->get('signe');

            $valeur = 0 ;
            $erreur ='';
            switch($signe){
                case '+':
                    $valeur = $number_a + $number_b;
                    
                    break;
                case '-':
                    $valeur =  $number_a - $number_b;
                    break;
                case '*':
                    $valeur = $number_a * $number_b;
                    break;
                case '/':
                    if ($number_b != 0){
                        $valeur = $number_a / $number_b;
                    }else{
                        $erreur = 'division impossible';
                    }
                       
                    break;
                default:
                       $erreur = ' impossible';
                    break;
                    
                    }
                    return $this->render('resultat/index.html.twig', [
                        'number_a'=>$number_a,
                        'number_b'=>$number_b,
                        'signe' => $signe,
                        'valeur' => $valeur,
                        'erreur' => $erreur,
                    ]);
                   
        }
        return $this->render('calculatrice/index.html.twig', [
            'controller_name' => 'CalculatriceController',
        ]);
    }
}
