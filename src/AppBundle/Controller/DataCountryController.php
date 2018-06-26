<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\DataCountry;

class DataCountryController extends Controller
{
    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Country")
     */
    public function getDataBasesAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataCountry')
            ->findAll();
        /* @var $data DataCountry[] */

        return $data;

    }



    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Country/{id}")
     */
    public function getDataBaseAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataCountry')
            ->find($request->get('id'));
          /* @var $data DataCountry */

        if (empty($data)) {
            return new JsonResponse(['message' => 'Data not found'], Response::HTTP_NOT_FOUND);
        }

        return $data;
    }




























    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Cou")
     * @QueryParam(name="country", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
   */
    public function getTesAction(Request $request, ParamFetcher $paramFetcher)
    {


        $country = $paramFetcher->get('country');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');


     


        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($country == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1');

        }


        if(($country != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.country= :country');


            $qb->setParameter('country',$country);

        }





        if(($country == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($country == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($country != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.country = :country');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('country',$country);

        }



        if(($country != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.country = :country AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('country',$country);

        }




        if(($country == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($country != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.country = :country AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('country',$country);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Data not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







    }












    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("Ratings/cou")
     * @QueryParam(name="country", requirements="[a-zA-Z]+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
    public function getTes1Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $country = $paramFetcher->get('country');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:country', 'p')
            ->  where('p.name = :country');



        $qb1->setParameter('country',$country);
        $country = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($country == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:country', 'p')
            ->  where('p.name = :country');




        if(($country != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.country = :country');


            $qb->setParameter('country',$country);

        }





        if(($country == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($country == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($country != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.country = :country');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('country',$country);

        }



        if(($country != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.country = :country AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('country',$country);

        }




        if(($country == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($country != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataCountry', 'p1')
                ->  where('p1.theme = :theme AND p1.country = :country AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('country',$country);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







    }









































}













