<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/voiture')]
class VoitureController extends AbstractController
{
    #[Route('/', name: 'app_voiture_index', methods: ['GET'])]
    public function index(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/index.html.twig', [
            'voitures' => $voitureRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_voiture_add', methods:['GET','POST'])]
    public function add(Request $request,VoitureRepository $voitureRepository): Response
    {
       $voiture = new Voiture();
       $form = $this->createForm(VoitureType::class, $voiture);
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid())
       {
           $voitureRepository->save($voiture, true);

           return $this->redirectToRoute('app_voiture_index',[],Response::HTTP_SEE_OTHER);
       }
       
       return $this->renderForm('voiture/add.html.twig',[

        'voiture'=> $voiture,
        'form'=> $form,

       ]);

    }

    #[Route('/{id}',name: 'app_voiture_show',methods:['GET'])]
    public function show(Voiture $voiture): Response
    {
        return $this->render('voiture/show.html.twig',[
            'voiture' => $voiture,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_voiture_edit', methods:['GET','POST'])]
    public function edit(Request $request ,Voiture $voiture,VoitureRepository $voitureRepository): Response
    {   
       
        $form = $this->createForm(VoitureType::class, $voiture);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid())
        {
            $voitureRepository->save($voiture, true);

            return $this->redirectToRoute('app_voiture_index',[], Response::HTTP_SEE_OTHER );
        }
        return $this->renderForm('voiture/edit.html.twig',[
            'voiture'=> $voiture,
            'form'=> $form,
        ]);
    }

      #[Route('/{id}', name: 'app_voiture_delete', methods: ['POST'])]
      public function delete(Request $request, Voiture $voiture, VoitureRepository $voitureRepository): Response
      {
          if ($this->isCsrfTokenValid('delete'.$voiture->getId(), $request->request->get('_token'))) {
              $voitureRepository->remove($voiture, true);
          }
  
          return $this->redirectToRoute('app_voiture_index', [], Response::HTTP_SEE_OTHER);
      }
    
}
