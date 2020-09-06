<?php


namespace Aula\Doctrine\Entity;

/**
 * @Entity
 */
class Aluno
{
    /**
     * @id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column (type="string")
     */
    private $name;

public function getId(): int
{
    return $this->id;
}

public function getName(): string
{
    return $this->name;
}

public function setName($name): self
{
    $this->name = $name;
    return $this;
}

}