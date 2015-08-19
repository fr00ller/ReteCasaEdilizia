<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preventivi
 */
class Preventivi
{

    /**
     * @OneToOne(targetEntity="Ditte")
     * @JoinColumn(name="id_ditta", referencedColumnName="id")
     **/
    private $ditta;


    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idDitta;

    /**
     * @var integer
     */
    private $oggetto;

    /**
     * @var integer
     */
    private $descrizione;

    /**
     * @var \DateTime
     */
    private $dataInserimento;

    /**
     * @var \DateTime
     */
    private $dataLavorazione;

    /**
     * @var integer
     */
    private $idUser;


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
     * Set idDitta
     *
     * @param integer $idDitta
     * @return Preventivi
     */
    public function setIdDitta($idDitta)
    {
        $this->idDitta = $idDitta;

        return $this;
    }

    /**
     * Get idDitta
     *
     * @return integer 
     */
    public function getIdDitta()
    {
        return $this->idDitta;
    }

    /**
     * Set oggetto
     *
     * @param integer $oggetto
     * @return Preventivi
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;

        return $this;
    }

    /**
     * Get oggetto
     *
     * @return integer 
     */
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * Set descrizione
     *
     * @param integer $descrizione
     * @return Preventivi
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return integer 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set dataInserimento
     *
     * @param \DateTime $dataInserimento
     * @return Preventivi
     */
    public function setDataInserimento($dataInserimento)
    {
        $this->dataInserimento = $dataInserimento;

        return $this;
    }

    /**
     * Get dataInserimento
     *
     * @return \DateTime 
     */
    public function getDataInserimento()
    {
        return $this->dataInserimento;
    }

    /**
     * Set dataLavorazione
     *
     * @param \DateTime $dataLavorazione
     * @return Preventivi
     */
    public function setDataLavorazione($dataLavorazione)
    {
        $this->dataLavorazione = $dataLavorazione;

        return $this;
    }

    /**
     * Get dataLavorazione
     *
     * @return \DateTime 
     */
    public function getDataLavorazione()
    {
        return $this->dataLavorazione;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Preventivi
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
