<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Date;

class DateController extends Controller
{
    
     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/dates")
     */
    public function getDatesAction(Request $request)
    {
        $dates = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Date')
                ->findAll();
        /* @var $dates Date[] */

        return $dates;
    }

    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/dates/{id}")
     */
    public function getDateAction(Request $request)
    {
        $date = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Date')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $date Date */

        if (empty($date)) {
            return new JsonResponse(['message' => 'Date not found'], Response::HTTP_NOT_FOUND);
        }

        return $date;
    }
}