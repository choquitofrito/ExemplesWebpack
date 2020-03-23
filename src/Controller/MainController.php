<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    /**
     * @Route("/exemple/axios", name="exemple_axios")
     */
    public function exempleAxios()
    {
        return $this->render('main/exemple_axios.html.twig');
    }

    /**
     * @Route("/exemple/axios/traitement", name="exemple_axios_traitement")
     */
    public function exempleAxiosTraitement(Request $req)
    {   
        $nomMajuscules = strtoupper ($req->get ("nom"));
        return new JsonResponse(['nomMajuscules'=>$nomMajuscules]);
        // return new JsonResponse(['message'=>'Ça marche!!']);
    }

}
