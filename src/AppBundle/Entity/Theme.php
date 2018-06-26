<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="themes",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="themes_name_unique",columns={"theme"})}
 * )
 */
class Theme
{
     /**
     * Unique Theme
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $theme;

    /**
     * @ORM\Column(type="string")
     */
    protected $domain;


    /**
     * @ORM\Column(type="string")
     */
    protected $source;

    /**
     * @ORM\Column(type="string")
     */
    protected $unit;












    public function getId()
    {
        return $this->id;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function getDomain()
    {
        return $this->domain;
    }


    public function getSource()
    {
        return $this->source;
    }

    public function getUnit()
    {
        return $this->unit;
    }










    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }



    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }



}