<?php

namespace App\Entity;

use App\Entity\Company;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
* @ORM\Entity
* @ORM\Table(name="employees")
*/
class Employee
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $firstName
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @var string $lastName
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @var int $age
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @var int $company
     * @ORM\Column(type="integer")
     * @ManyToOne(targetEntity="Company")
     * @JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param integer $age
     * @return void
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     * @return integer
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param integer $company
     * @return void
     */
    public function setCompany(int $company)
    {
        $this->company = $company;
    }

    /**
     * @return integer
     */
    public function getCompany(): int
    {
        return $this->company;
    }

}