<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="DataCountry",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="datacountries_name_unique",columns={"id"})}
 * )
 */
class DataCountry
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="countries")
     * @var Country
     */
    protected $Country;

    /**
     * @ORM\Column(type="float")
     */
    protected $value;


    /**
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="themes")
     * @var Theme
     */
    protected $theme;

    /**
     * @ORM\ManyToOne(targetEntity="Date", inversedBy="dates")
     * @var Date
     */
    protected $date;




    public function getId()
    {
        return $this->id;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getValue()
    {
        return $this->value;
    }



    public function getTheme()
    {
        return $this->theme;
    }



    public function getDate()
    {
        return $this->date;
    }










    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }


    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }






 }

