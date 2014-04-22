<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfilesdetalle
 *
 * @ORM\Table(name="PerfilesDetalle")
 * @ORM\Entity
 */
class Perfilesdetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumPerfil_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numperfilId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumModulo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nummoduloId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOpcion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numopcionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAcceso", type="integer", nullable=true)
     */
    private $numacceso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAccesoAtributo", type="integer", nullable=true)
     */
    private $numaccesoatributo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContrasenaAlta", type="integer", nullable=true)
     */
    private $numcontrasenaalta = '0';



    /**
     * Set numperfilId
     *
     * @param integer $numperfilId
     * @return Perfilesdetalle
     */
    public function setNumperfilId($numperfilId)
    {
        $this->numperfilId = $numperfilId;

        return $this;
    }

    /**
     * Get numperfilId
     *
     * @return integer 
     */
    public function getNumperfilId()
    {
        return $this->numperfilId;
    }

    /**
     * Set nummoduloId
     *
     * @param integer $nummoduloId
     * @return Perfilesdetalle
     */
    public function setNummoduloId($nummoduloId)
    {
        $this->nummoduloId = $nummoduloId;

        return $this;
    }

    /**
     * Get nummoduloId
     *
     * @return integer 
     */
    public function getNummoduloId()
    {
        return $this->nummoduloId;
    }

    /**
     * Set numopcionId
     *
     * @param integer $numopcionId
     * @return Perfilesdetalle
     */
    public function setNumopcionId($numopcionId)
    {
        $this->numopcionId = $numopcionId;

        return $this;
    }

    /**
     * Get numopcionId
     *
     * @return integer 
     */
    public function getNumopcionId()
    {
        return $this->numopcionId;
    }

    /**
     * Set numacceso
     *
     * @param integer $numacceso
     * @return Perfilesdetalle
     */
    public function setNumacceso($numacceso)
    {
        $this->numacceso = $numacceso;

        return $this;
    }

    /**
     * Get numacceso
     *
     * @return integer 
     */
    public function getNumacceso()
    {
        return $this->numacceso;
    }

    /**
     * Set numaccesoatributo
     *
     * @param integer $numaccesoatributo
     * @return Perfilesdetalle
     */
    public function setNumaccesoatributo($numaccesoatributo)
    {
        $this->numaccesoatributo = $numaccesoatributo;

        return $this;
    }

    /**
     * Get numaccesoatributo
     *
     * @return integer 
     */
    public function getNumaccesoatributo()
    {
        return $this->numaccesoatributo;
    }

    /**
     * Set numcontrasenaalta
     *
     * @param integer $numcontrasenaalta
     * @return Perfilesdetalle
     */
    public function setNumcontrasenaalta($numcontrasenaalta)
    {
        $this->numcontrasenaalta = $numcontrasenaalta;

        return $this;
    }

    /**
     * Get numcontrasenaalta
     *
     * @return integer 
     */
    public function getNumcontrasenaalta()
    {
        return $this->numcontrasenaalta;
    }
}
