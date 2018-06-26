<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Province;

class ProvinceController extends Controller
{
    
     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/provinces")
     */
    public function getProvincesAction(Request $request)
    {
        $provinces = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Province')
                ->findAll();
        /* @var $provinces Province[] */

        return $provinces;
    }

    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/provinces/{id}")
     */
    public function getProvinceAction(Request $request)
    {
        $province = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Province')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $province Province */

        if (empty($province)) {
            return new JsonResponse(['message' => 'Province not found'], Response::HTTP_NOT_FOUND);
        }

        return $province;
    }
}

