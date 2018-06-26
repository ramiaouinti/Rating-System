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
use AppBundle\Entity\DataProvince;

class DataProvinceController extends Controller
{
    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Province")
     */
    public function getDataBasesAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataProvince')
            ->findAll();
        /* @var $data DataProvince[] */

        return $data;

    }



    /**
     * @ApiDoc(
     *    description="Our Data",
     *    output= { "class"=Test::class, "collection"=true}
     * )
     * @Rest\View()
     * @Rest\Get("/Rating/Province/{id}")
     */
    public function getDataBaseAction(Request $request)
    {
        $data = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:DataProvince')
            ->find($request->get('id'));
          /* @var $data DataProvince */

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
     * @Rest\Get("/Rating/Pro")
     * @QueryParam(name="province", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
   */
    public function getTesAction(Request $request, ParamFetcher $paramFetcher)
    {


        $province = $paramFetcher->get('province');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');


     


        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($province == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1');

        }


        if(($province != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.province= :province');


            $qb->setParameter('province',$province);

        }





        if(($province == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($province == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($province != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.province = :province');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('province',$province);

        }



        if(($province != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.province = :province AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('province',$province);

        }




        if(($province == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($province != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.province = :province AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('province',$province);
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
     * @Rest\Get("Ratings/Pro")
     * @QueryParam(name="province", requirements="[a-zA-Z]+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="theme", requirements="\d+", default="", description="Nombre d'éléments à afficher")
     * @QueryParam(name="date", requirements="\d+", default="", description="Nombre d'éléments à afficher")
    */
    public function getTes1Action(Request $request, ParamFetcher $paramFetcher)
    {


   
        $province = $paramFetcher->get('province');
        $theme = $paramFetcher->get('theme');
        $date = $paramFetcher->get('date');

        $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Province', 'p')
            ->  where('p.name = :province');



        $qb1->setParameter('province',$province);
        $province = $qb1->getQuery()->getResult();




        $qb = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();




        if(($province == "" ) AND ($theme == "") AND ($date == "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1');

        }






         $qb1 = $this->get('doctrine.orm.entity_manager')->createQueryBuilder();

        $qb1->select('p.id')
            ->from('AppBundle:Province', 'p')
            ->  where('p.name = :province');




        if(($province != "" ) AND ($theme == "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.province = :province');


            $qb->setParameter('province',$province);

        }





        if(($province == "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme');

            $qb->setParameter('theme',$theme);


        }



        if(($province == "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.date = :date');


            $qb->setParameter('date',$date);


        }




        if(($province != "" ) AND ($theme != "") AND ($date == "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.province = :province');

            $qb->setParameter('theme',$theme);

            $qb->setParameter('province',$province);

        }



        if(($province != "" ) AND ($theme == "") AND ($date != "") )


        {
            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.province = :province AND p1.date = :date');


            $qb->setParameter('date',$date);
            $qb->setParameter('province',$province);

        }




        if(($province == "" ) AND ($theme != "") AND ($date != "") )


        {

            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);

        }










        if (($province != "" ) AND ($theme != "") AND ($date != "") ) {


            $qb->select('p1')
                ->from('AppBundle:DataProvince', 'p1')
                ->  where('p1.theme = :theme AND p1.province = :province AND p1.date = :date');

            $qb->setParameter('theme',$theme);
            $qb->setParameter('date',$date);
            $qb->setParameter('province',$province);
        }













        $testes = $qb->getQuery()->getResult();

        if (empty($testes)) {
            return new JsonResponse(['message' => 'Value not found'], Response::HTTP_NOT_FOUND);
        }
        return $testes;







    }







































}













