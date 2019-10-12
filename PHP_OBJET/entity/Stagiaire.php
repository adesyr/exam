<?php

Class Stagiaire {

//    ------------ Déclaration des proppriétés -------------

    private $id;
    private $created_at;
    private $name;
    private $phone;
    private$birthday;

    /**
     * Stagiaire constructor.
     * @param $id
     * @param $created_at
     * @param $name
     * @param $phone
     * @param $birthday
     */

//    ----------------- CONSTRUCTEUR -----------------------
    public function __construct($id, $created_at, $name, $phone, $birthday)
    {
        $this->setId($id);
        $this->setCreatedAt(new DateTime());
        $this->setName($name);
        $this->setPhone($phone);
        $this->setBirthday($birthday);
    }

//    ------------------ GETTERS SETTERS -----------------------
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


}