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
use AppBundle\Entity\DataFederal;

class DataFederalController extends Controller
{
   /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Federal")
     */
    public function getDataBasesAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataFederal')
            ->findAll();
        /* @var $data DataFederal[] */

        return $data;

    }



    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Federal/{id}")
     */
    public function getDataBaseAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataFederal')
            ->find($request->get('id'));
          /* @var $data DataFederal */

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
     * @Rest\Get("/Rating/Fed")
     * @QueryParam(name="federal", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
   */
    public function getTesAction(Request $request, ParamFetcher $paramFetcher)
    {


        $federal = $paramFetcher->get('federal');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');


     


        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($federal == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1');

        }


        if(($federal != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.federal= :federal');


            $qb->setParameter('federal',$federal);

        }





        if(($federal == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($federal == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($federal != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.federal = :federal');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('federal',$federal);

        }



        if(($federal != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.federal = :federal AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('federal',$federal);

        }




        if(($federal == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($federal != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.federal = :federal AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('federal',$federal);
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
     * @Rest\Get("Ratings/Fed")
     * @QueryParam(name="federal", requirements="[a-zA-Z]+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
    public function getTes1Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $federal = $paramFetcher->get('federal');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Federal', 'p')
            ->  where('p.name = :federal');



        $qb1->setParameter('federal',$federal);
        $federal = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($federal == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Federal', 'p')
            ->  where('p.name = :federal');




        if(($federal != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.federal = :federal');


            $qb->setParameter('federal',$federal);

        }





        if(($federal == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($federal == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($federal != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.federal = :federal');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('federal',$federal);

        }



        if(($federal != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.federal = :federal AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('federal',$federal);

        }




        if(($federal == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($federal != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataFederal', 'p1')
                ->  where('p1.theme = :theme AND p1.federal = :federal AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('federal',$federal);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







    }







































}













