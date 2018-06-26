<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="federales",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="cfederales_name_unique",columns={"name"})}
 * )
 */
class Federal
{
    /**
     * Unique Federal
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="float")
     */
    protected $area;

    /**
     * @ORM\Column(type="float")
     */
    protected $lat;



    /**
     * @ORM\Column(type="float")
     */
    protected $long;


    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="federales")
     * @var Country
     */
    protected $country;






    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getArea()
    {
        return $this->area;
    }



    public function getLat()
    {
        return $this->lat;
    }



    public function getLong()
    {
        return $this->long;
    }




    public function getCountry()
    {
        return $this->country;
    }








    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }


    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }


    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }




    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


    
}