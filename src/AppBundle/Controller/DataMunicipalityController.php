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
use AppBundle\Entity\DataMunicipality;

class DataMunicipalityController extends Controller
{
    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Municipality")
     */
    public function getDataBasesAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataMunicipality')
            ->findAll();
        /* @var $data DataMunicipality[] */

        return $data;

    }



     /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Municipality/{id}")
     */
    public function getDataBaseAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataMunicipality')
            ->find($request->get('id'));
          /* @var $data DataMunicipality */

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
     * @Rest\Get("/Rating/Mun")
     * @QueryParam(name="municipality", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
   */
    public function getTesAction(Request $request, ParamFetcher $paramFetcher)
    {


        $municipality = $paramFetcher->get('municipality');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');


     


        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($municipality == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1');

        }


        if(($municipality != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality= :municipality');


            $qb->setParameter('municipality',$municipality);

        }





        if(($municipality == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($municipality == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($municipality != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('municipality',$municipality);

        }



        if(($municipality != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality = :municipality AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);

        }




        if(($municipality == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($municipality != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);
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
     * @Rest\Get("Ratings/Mun")
     * @QueryParam(name="municipality", requirements="[a-zA-Z]+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
    public function getTes1Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $municipality = $paramFetcher->get('municipality');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Municipality', 'p')
            ->  where('p.name = :municipality');



        $qb1->setParameter('municipality',$municipality);
        $municipality = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($municipality == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Municipality', 'p')
            ->  where('p.name = :municipality');




        if(($municipality != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality = :municipality');


            $qb->setParameter('municipality',$municipality);

        }





        if(($municipality == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($municipality == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($municipality != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('municipality',$municipality);

        }



        if(($municipality != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality = :municipality AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);

        }




        if(($municipality == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($municipality != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







 }







    /**
     * @Rest\View()
     * @Rest\Get("Ratingss/Mun")
     * @QueryParam(name="lat", requirements="[0-9]+.?[0-9]*", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="long", requirements="[0-9]+.?[0-9]*", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
     public function getTest2222Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $lat = $paramFetcher->get('lat');
        $long = $paramFetcher->get('long');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Municipality', 'p')
            ->  where('p.lat = :lat AND p.long = :long ');



        $qb1->setParameter('lat',$lat);
        $qb1->setParameter('long',$long);
        $municipality = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();







        if(($municipality == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Municipality', 'p')
            ->  where('p.name = :municipality');




        if(($municipality != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality = :municipality');


            $qb->setParameter('municipality',$municipality);

        }





        if(($municipality == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($municipality == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($municipality != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('municipality',$municipality);

        }



        if(($municipality != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.municipality = :municipality AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);

        }




        if(($municipality == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($municipality != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataMunicipality', 'p1')
                ->  where('p1.theme = :theme AND p1.municipality = :municipality AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('municipality',$municipality);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;














}












































}













