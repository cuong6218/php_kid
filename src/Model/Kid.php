<?php

namespace App\Model;

class Kid
{
    private $id;
    private $kid_name;
    private $age;
    private $address;
    function __construct($kid_name, $age, $address)
    {
        $this->kid_name = $kid_name;
        $this->age = $age;
        $this->address = $address;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of kid_name
     */
    public function getKidName()
    {
        return $this->kid_name;
    }

    /**
     * Set the value of kid_name
     *
     * @return  self
     */
    public function setKidName($kid_name)
    {
        $this->kid_name = $kid_name;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
