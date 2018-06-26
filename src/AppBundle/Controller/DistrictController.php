<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\District;

class DistrictController extends Controller
{
    
    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/districts")
     */
    public function getDistrictsAction(Request $request)
    {
        $districts = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:District')
                ->findAll();
        /* @var $districts District[] */

        return $districts;
    }

    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/districts/{id}")
     */
    public function getDistrictAction(Request $request)
    {
        $district = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:District')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $district District */

        if (empty($district)) {
            return new JsonResponse(['message' => 'District not found'], Response::HTTP_NOT_FOUND);
        }

        return $district;
    }
}

