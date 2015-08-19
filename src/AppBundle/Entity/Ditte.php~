<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ditte
 */
class Ditte
{

    /**
     * @ORM\ManyToOne(targetEntity="Ditte", inversedBy="categoria")
     * @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     */
    protected $categoria;
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idUtente;

    /**
     * @var integer
     */
    private $idCategoria;

    /**
     * @var string
     */
    private $ragioneSoc;

    /**
     * @var string
     */
    private $indirizzo;

    /**
     * @var string
     */
    private $cap;

    /**
     * @var string
     */
    private $citta;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $piva;


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
     * Set idUtente
     *
     * @param integer $idUtente
     * @return Ditte
     */
    public function setIdUtente($idUtente)
    {
        $this->idUtente = $idUtente;

        return $this;
    }

    /**
     * Get idUtente
     *
     * @return integer 
     */
    public function getIdUtente()
    {
        return $this->idUtente;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return Ditte
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set ragioneSoc
     *
     * @param string $ragioneSoc
     * @return Ditte
     */
    public function setRagioneSoc($ragioneSoc)
    {
        $this->ragioneSoc = $ragioneSoc;

        return $this;
    }

    /**
     * Get ragioneSoc
     *
     * @return string 
     */
    public function getRagioneSoc()
    {
        return $this->ragioneSoc;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Ditte
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set cap
     *
     * @param string $cap
     * @return Ditte
     */
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get cap
     *
     * @return string 
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set citta
     *
     * @param string $citta
     * @return Ditte
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string 
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Ditte
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Ditte
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set piva
     *
     * @param string $piva
     * @return Ditte
     */
    public function setPiva($piva)
    {
        $this->piva = $piva;

        return $this;
    }

    /**
     * Get piva
     *
     * @return string 
     */
    public function getPiva()
    {
        return $this->piva;
    }
}
