<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Form\Type\CountryType;
use AppBundle\Entity\Country;

class CountryController extends Controller
{
    
    /**
     * @ApiDoc(
     *    description="Récupère la liste des lieux de l'application",
     *    output= { "class"=Country::class, "collection"=true, "groups"={"country"} }
     * )
     * @Rest\View(serializerGroups={"country"})
     * @Rest\Get("/countries")
     */
    public function getCountriesAction(Request $request)
    {
        $countries = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Country')
                ->findAll();
        /* @var $countries Country[] */

        return $countries;
    }








     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/countries/{id}")
     */
    public function getCountryAction(Request $request)
    {
        $country = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Country')
                ->find($request->get('id')); // L'identifiant en tant que paramétre n'est plus nécessaire
        /* @var $country Country */

        if (empty($country)) {
return \FOS\RestBundle\View\View::create(['message' => 'Country not found'], Response::HTTP_NOT_FOUND);        }

        return $country;
    }




 /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/countries")
     */
    public function postCountriesAction(Request $request)
    {
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);

        $form->submit($request->request->all()); // Validation des données

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($country);
            $em->flush();
            return $country;
        } else {
            return $form;
        }
    }




  /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/countries/{id}")
     */
    public function removeCountryAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $country= $em->getRepository('AppBundle:Country')
                    ->find($request->get('id'));
        /* @var $country Country */

        $em->remove($country);
        $em->flush();
    }




  /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Put("/countries/{id}")
     */
    public function updateCountryAction(Request $request)
    {
        return $this->updateCountry($request, true);
    }

    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Patch("/countries/{id}")
     */
    public function patchCountryAction(Request $request)
    {
        return $this->updateCountry($request, false);
    }

    private function updateCountry(Request $request, $clearMissing)
    {
        $country = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:Country')
                ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $country Country */

        if (empty($country)) {
            return new JsonResponse(['message' => 'Country not found'], Response::HTTP_NOT_FOUND);
        }

        $form = $this->createForm(CountryType::class, $country);

        // Le paramètre false dit à Symfony de garder les valeurs dans notre
        // entité si l'utilisateur n'en fournit pas une dans sa requête
        $form->submit($request->request->all(), $clearMissing);

        if ($form->isValid()) {
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($country);
            $em->flush();
            return $country;
        } else {
            return $form;
        }
    }









}