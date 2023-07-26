<?php

namespace Bernardo\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;


#[Entity]
class Formation{

    #[Id, GeneratedValue, Column]
    public int $id;

    #[ManyToMany(Student::class, mappedBy:"formations")]
    private Collection $students;
    

    public function __construct(
        #[Column]
        public readonly string $nome
    ) {
        $this->students = new ArrayCollection();
    }


    public function addStudent(Student $student): void
    {
        if ($this->students->contains($student)){
            return;
        }
        $this->students->add($student);
        $student->enrollInFormation($this);
    }
            /**
         * @return Collection<Student>
         */
        public function students():Collection
        {
            return $this->students;
        }
}