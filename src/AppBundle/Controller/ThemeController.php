<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Theme;

class ThemeController extends Controller
{
    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/themes")
     */
    public function getThemesAction(Request $request)
    {
        $themes = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Theme')
                ->findAll();
        /* @var $themes Theme[] */

        return $themes;
    }

  /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/themes/{id}")
     */
    public function getThemeAction(Request $request)
    {
        $theme = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Theme')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $theme Theme */

        if (empty($theme)) {
            return new JsonResponse(['message' => 'Theme not found'], Response::HTTP_NOT_FOUND);
        }

        return $theme;
    }
}