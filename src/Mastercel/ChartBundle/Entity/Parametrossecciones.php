<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametrossecciones
 *
 * @ORM\Table(name="ParametrosSecciones", indexes={@ORM\Index(name="Indice_1", columns={"NumParametro_id", "NumOrden"})})
 * @ORM\Entity
 */
class Parametrossecciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumSeccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numseccionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden", type="integer", nullable=true)
     */
    private $numorden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreSeccion", type="string", length=60, nullable=true)
     */
    private $strnombreseccion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampo", type="string", length=60, nullable=true)
     */
    private $strnombrecampo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRegistroSistema", type="boolean", nullable=true)
     */
    private $logregistrosistema = '0';



    /**
     * Get numseccionId
     *
     * @return integer 
     */
    public function getNumseccionId()
    {
        return $this->numseccionId;
    }

    /**
     * Set numparametroId
     *
     * @param integer $numparametroId
     * @return Parametrossecciones
     */
    public function setNumparametroId($numparametroId)
    {
        $this->numparametroId = $numparametroId;

        return $this;
    }

    /**
     * Get numparametroId
     *
     * @return integer 
     */
    public function getNumparametroId()
    {
        return $this->numparametroId;
    }

    /**
     * Set numorden
     *
     * @param integer $numorden
     * @return Parametrossecciones
     */
    public function setNumorden($numorden)
    {
        $this->numorden = $numorden;

        return $this;
    }

    /**
     * Get numorden
     *
     * @return integer 
     */
    public function getNumorden()
    {
        return $this->numorden;
    }

    /**
     * Set strnombreseccion
     *
     * @param string $strnombreseccion
     * @return Parametrossecciones
     */
    public function setStrnombreseccion($strnombreseccion)
    {
        $this->strnombreseccion = $strnombreseccion;

        return $this;
    }

    /**
     * Get strnombreseccion
     *
     * @return string 
     */
    public function getStrnombreseccion()
    {
        return $this->strnombreseccion;
    }

    /**
     * Set strnombrecampo
     *
     * @param string $strnombrecampo
     * @return Parametrossecciones
     */
    public function setStrnombrecampo($strnombrecampo)
    {
        $this->strnombrecampo = $strnombrecampo;

        return $this;
    }

    /**
     * Get strnombrecampo
     *
     * @return string 
     */
    public function getStrnombrecampo()
    {
        return $this->strnombrecampo;
    }

    /**
     * Set logregistrosistema
     *
     * @param boolean $logregistrosistema
     * @return Parametrossecciones
     */
    public function setLogregistrosistema($logregistrosistema)
    {
        $this->logregistrosistema = $logregistrosistema;

        return $this;
    }

    /**
     * Get logregistrosistema
     *
     * @return boolean 
     */
    public function getLogregistrosistema()
    {
        return $this->logregistrosistema;
    }
}
