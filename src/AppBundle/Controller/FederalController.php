<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Federal;

class FederalController extends Controller
{
    
    /**
     * @Rest\View()
     * @Rest\Get("/federales")
     */
    public function getFederalesAction(Request $request)
    {
        $federales = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Federal')
                ->findAll();
        /* @var $federales Federal[] */

        return $federales;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/federales/{id}")
     */
    public function getFederalAction(Request $request)
    {
        $federal = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Federal')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $federal Federal */

        if (empty($federal)) {
            return new JsonResponse(['message' => 'Federal not found'], Response::HTTP_NOT_FOUND);
        }

        return $federal;
    }
}