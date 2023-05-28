<?php

class Image
{
    private $id;
    private $file;
    private $alt;

    /**
     * @param $id
     * @param $file
     * @param $alt
     */
    public function __construct($id, $file, $alt)
    {
        $this->id = $id;
        $this->file = $file;
        $this->alt = $alt;
    }

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
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * @param mixed $alt
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    }


}
