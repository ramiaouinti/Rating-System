<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="dates",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="dates_name_unique",columns={"date"})}
 * )
 */
class Date
{
    /**
     * Unique Date
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $date;

  
   





    public function getId()
    {
        return $this->id;
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

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


}