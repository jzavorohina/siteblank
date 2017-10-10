<?php
// src/AppBundle/Entity/Users.php
namespace AppBundle\Entity;

class Users
{

    private $id;
    private $eid;
    private $name;
    private $login;
    private $password;
    private $moderator;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set eid
     *
     * @param integer $eid
     *
     * @return Users
     */
    public function setEid($eid)
    {
        $this->eid = $eid;

        return $this;
    }

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
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set moderator
     *
     * @param integer $moderator
     *
     * @return Users
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;

        return $this;
    }

    /**
     * Get moderator
     *
     * @return integer
     */
    public function getModerator()
    {
        return $this->moderator;
    }
}
