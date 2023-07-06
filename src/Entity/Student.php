<?php

namespace Bernardo\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
class Student
{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[OneToMany(
    targetEntity: Phone::class, 
    mappedBy: "student", 
    cascade:["persist", "remove"],
    
    )]
    private Collection $phones;

    #[ManyToMany(targetEntity: Course::class, inversedBy: "students")]
    private Collection $courses;

public function __construct(
    #[Column]
    public readonly string $nome
){
    $this->phones = new ArrayCollection();
    $this->courses = new ArrayCollection();

}

    public function addPhone(Phone $phone)
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
    }

    /**
     * @return iterable<Phone>
     */
    public function phones() :iterable
    {
        return $this->phones;
    }

    public function courses():Collection
    {
        return $this->courses;
    }
}


$student = new Student('Berninha');
$course = new Course('Doctrine');
