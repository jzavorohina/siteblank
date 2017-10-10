<?php
// src/AppBundle/Entity/Emails.php
namespace AppBundle\Entity;

class Emails
{

    private $eid;
    private $address;


    /**
     * Get eid
     *
     * @return integer
     */
    public function getEid()
    {
        return $this->eid;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Emails
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}
