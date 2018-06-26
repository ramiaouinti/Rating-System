<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="provinces",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="provinces_id_unique",columns={"id"})}
 * )
 */
class Province
{
    /**
     * Unique Province
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
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="federales")
     * @var Country
     */
    protected $country;



  public function __construct()
    {
        $this->countries = new ArrayCollection();
    }




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


    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    
}