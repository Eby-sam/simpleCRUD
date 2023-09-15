<?php

class Employes {

    public $noemp;
    public $nom;
    public $prenom;
    public $emploi;
    public $sup;
    public $embauche;
    public $sal;
    public $comm;
    public $noserv;

    /**
     * @param $noemp
     * @param $nom
     * @param $prenom
     * @param $emploi
     * @param $sup
     * @param $embauche
     * @param $sal
     * @param $comm
     * @param $noserv
     */
    public function __construct($noemp, $nom, $prenom, $emploi, $sup, $embauche, $sal, $comm, $noserv)
    {
        $this->noemp = $noemp;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->emploi = $emploi;
        $this->sup = $sup;
        $this->embauche = $embauche;
        $this->sal = $sal;
        $this->comm = $comm;
        $this->noserv = $noserv;
    }



    /**
     * @return mixed
     */
    public function getNoemp()
    {
        return $this->noemp;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * @param mixed $emploi
     */
    public function setEmploi($emploi): self
    {
        $this->emploi = $emploi;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSup()
    {
        return $this->sup;
    }

    /**
     * @param mixed $sup
     */
    public function setSup($sup): self
    {
        $this->sup = $sup;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmbauche()
    {
        return $this->embauche;
    }

    /**
     * @param mixed $embauche
     */
    public function setEmbauche($embauche): self
    {
        $this->embauche = $embauche;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSal()
    {
        return $this->sal;
    }

    /**
     * @param mixed $sal
     */
    public function setSal($sal): self
    {
        $this->sal = $sal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComm()
    {
        return $this->comm;
    }

    /**
     * @param mixed $comm
     */
    public function setComm($comm): self
    {
        $this->comm = $comm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoserv()
    {
        return $this->noserv;
    }

    /**
     * @param mixed $noserv
     */
    public function setNoserv($noserv): self
    {
        $this->noserv = $noserv;
        return $this;
    }
}
