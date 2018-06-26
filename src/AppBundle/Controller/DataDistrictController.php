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
use AppBundle\Entity\DataDistrict;

class DataDistrictController extends Controller
{
   /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/District")
     */
    public function getDataBasesAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataDistrict')
            ->findAll();
        /* @var $data DataDistrict[] */

        return $data;

    }



   /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/District/{id}")
     */
    public function getDataBaseAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataDistrict')
            ->find($request->get('id'));
          /* @var $data DataDistrict */

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
     * @Rest\Get("/Rating/Dis")
     * @QueryParam(name="district", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
   */
    public function getTesAction(Request $request, ParamFetcher $paramFetcher)
    {


        $district = $paramFetcher->get('district');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');


     


        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($district == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1');

        }


        if(($district != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.district= :district');


            $qb->setParameter('district',$district);

        }





        if(($district == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($district == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($district != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.district = :district');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('district',$district);

        }



        if(($district != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.district = :district AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('district',$district);

        }




        if(($district == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($district != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.district = :district AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('district',$district);
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
     * @Rest\Get("Ratings/Dis")
     * @QueryParam(name="district", requirements="[a-zA-Z]+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
    public function getTes1Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $district = $paramFetcher->get('district');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:District', 'p')
            ->  where('p.name = :district');



        $qb1->setParameter('district',$federal);
        $district = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($district == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:District', 'p')
            ->  where('p.name = :district');




        if(($district != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.district = :district');


            $qb->setParameter('district',$district);

        }





        if(($district == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($district == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($district != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.district = :district');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('district',$district);

        }



        if(($district != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.district = :district AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('district',$district);

        }




        if(($district == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($district != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataDistrict', 'p1')
                ->  where('p1.theme = :theme AND p1.district = :district AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('district',$district);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







    }







































}













