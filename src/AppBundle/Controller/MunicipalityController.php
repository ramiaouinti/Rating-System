<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Municipality;

class MunicipalityController extends Controller
{
    
     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/municipalities")
     */
    public function getMunicipalitiesAction(Request $request)
    {
        $municipalities = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Municipality')
                ->findAll();
        /* @var $municipalities Municipality[] */

        return $municipalities;
    }

     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/municipalities/{id}")
     */
    public function getMunicipalityAction(Request $request)
    {
        $municipality = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Municipality')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $municipality Municipality */

        if (empty($municipality)) {
            return new JsonResponse(['message' => 'Municipality not found'], Response::HTTP_NOT_FOUND);
        }

        return $municipality;
    }



}