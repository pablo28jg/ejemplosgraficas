<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesvendedores
 *
 * @ORM\Table(name="EntidadesVendedores", indexes={@ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Entidadesvendedores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogMostrarPuntoVenta", type="boolean", nullable=true)
     */
    private $logmostrarpuntoventa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRecibeComision", type="boolean", nullable=true)
     */
    private $logrecibecomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComisionVenta_id", type="integer", nullable=true)
     */
    private $numgrupocomisionventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelComision_id", type="integer", nullable=true)
     */
    private $numnivelcomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoFormaPagoComision", type="integer", nullable=true)
     */
    private $numtipoformapagocomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoPagoComision", type="integer", nullable=true)
     */
    private $numtipopagocomision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPoliticaComision_id", type="integer", nullable=true)
     */
    private $numpoliticacomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumContrasena", type="integer", nullable=true)
     */
    private $numcontrasena = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemObservaciones", type="text", length=16, nullable=true)
     */
    private $memobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCreadoPor_id", type="integer", nullable=true)
     */
    private $numcreadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCreacion", type="datetime", nullable=true)
     */
    private $dtecreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumActualizadoPor_id", type="integer", nullable=true)
     */
    private $numactualizadoporId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActualizacion", type="datetime", nullable=true)
     */
    private $dteactualizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivelAutorizacion", type="integer", nullable=true)
     */
    private $numnivelautorizacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRegistrarComoCajero", type="boolean", nullable=true)
     */
    private $logregistrarcomocajero = '0';



    /**
     * Get numentidadId
     *
     * @return integer 
     */
    public function getNumentidadId()
    {
        return $this->numentidadId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Entidadesvendedores
     */
    public function setNumtipo($numtipo)
    {
        $this->numtipo = $numtipo;

        return $this;
    }

    /**
     * Get numtipo
     *
     * @return integer 
     */
    public function getNumtipo()
    {
        return $this->numtipo;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Entidadesvendedores
     */
    public function setNumalmacenId($numalmacenId)
    {
        $this->numalmacenId = $numalmacenId;

        return $this;
    }

    /**
     * Get numalmacenId
     *
     * @return integer 
     */
    public function getNumalmacenId()
    {
        return $this->numalmacenId;
    }

    /**
     * Set logmostrarpuntoventa
     *
     * @param boolean $logmostrarpuntoventa
     * @return Entidadesvendedores
     */
    public function setLogmostrarpuntoventa($logmostrarpuntoventa)
    {
        $this->logmostrarpuntoventa = $logmostrarpuntoventa;

        return $this;
    }

    /**
     * Get logmostrarpuntoventa
     *
     * @return boolean 
     */
    public function getLogmostrarpuntoventa()
    {
        return $this->logmostrarpuntoventa;
    }

    /**
     * Set logrecibecomision
     *
     * @param boolean $logrecibecomision
     * @return Entidadesvendedores
     */
    public function setLogrecibecomision($logrecibecomision)
    {
        $this->logrecibecomision = $logrecibecomision;

        return $this;
    }

    /**
     * Get logrecibecomision
     *
     * @return boolean 
     */
    public function getLogrecibecomision()
    {
        return $this->logrecibecomision;
    }

    /**
     * Set numgrupocomisionventaId
     *
     * @param integer $numgrupocomisionventaId
     * @return Entidadesvendedores
     */
    public function setNumgrupocomisionventaId($numgrupocomisionventaId)
    {
        $this->numgrupocomisionventaId = $numgrupocomisionventaId;

        return $this;
    }

    /**
     * Get numgrupocomisionventaId
     *
     * @return integer 
     */
    public function getNumgrupocomisionventaId()
    {
        return $this->numgrupocomisionventaId;
    }

    /**
     * Set numnivelcomisionId
     *
     * @param integer $numnivelcomisionId
     * @return Entidadesvendedores
     */
    public function setNumnivelcomisionId($numnivelcomisionId)
    {
        $this->numnivelcomisionId = $numnivelcomisionId;

        return $this;
    }

    /**
     * Get numnivelcomisionId
     *
     * @return integer 
     */
    public function getNumnivelcomisionId()
    {
        return $this->numnivelcomisionId;
    }

    /**
     * Set numtipoformapagocomision
     *
     * @param integer $numtipoformapagocomision
     * @return Entidadesvendedores
     */
    public function setNumtipoformapagocomision($numtipoformapagocomision)
    {
        $this->numtipoformapagocomision = $numtipoformapagocomision;

        return $this;
    }

    /**
     * Get numtipoformapagocomision
     *
     * @return integer 
     */
    public function getNumtipoformapagocomision()
    {
        return $this->numtipoformapagocomision;
    }

    /**
     * Set numtipopagocomision
     *
     * @param integer $numtipopagocomision
     * @return Entidadesvendedores
     */
    public function setNumtipopagocomision($numtipopagocomision)
    {
        $this->numtipopagocomision = $numtipopagocomision;

        return $this;
    }

    /**
     * Get numtipopagocomision
     *
     * @return integer 
     */
    public function getNumtipopagocomision()
    {
        return $this->numtipopagocomision;
    }

    /**
     * Set numpoliticacomisionId
     *
     * @param integer $numpoliticacomisionId
     * @return Entidadesvendedores
     */
    public function setNumpoliticacomisionId($numpoliticacomisionId)
    {
        $this->numpoliticacomisionId = $numpoliticacomisionId;

        return $this;
    }

    /**
     * Get numpoliticacomisionId
     *
     * @return integer 
     */
    public function getNumpoliticacomisionId()
    {
        return $this->numpoliticacomisionId;
    }

    /**
     * Set numcontrasena
     *
     * @param integer $numcontrasena
     * @return Entidadesvendedores
     */
    public function setNumcontrasena($numcontrasena)
    {
        $this->numcontrasena = $numcontrasena;

        return $this;
    }

    /**
     * Get numcontrasena
     *
     * @return integer 
     */
    public function getNumcontrasena()
    {
        return $this->numcontrasena;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Entidadesvendedores
     */
    public function setMemobservaciones($memobservaciones)
    {
        $this->memobservaciones = $memobservaciones;

        return $this;
    }

    /**
     * Get memobservaciones
     *
     * @return string 
     */
    public function getMemobservaciones()
    {
        return $this->memobservaciones;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Entidadesvendedores
     */
    public function setNumcreadoporId($numcreadoporId)
    {
        $this->numcreadoporId = $numcreadoporId;

        return $this;
    }

    /**
     * Get numcreadoporId
     *
     * @return integer 
     */
    public function getNumcreadoporId()
    {
        return $this->numcreadoporId;
    }

    /**
     * Set dtecreacion
     *
     * @param \DateTime $dtecreacion
     * @return Entidadesvendedores
     */
    public function setDtecreacion($dtecreacion)
    {
        $this->dtecreacion = $dtecreacion;

        return $this;
    }

    /**
     * Get dtecreacion
     *
     * @return \DateTime 
     */
    public function getDtecreacion()
    {
        return $this->dtecreacion;
    }

    /**
     * Set numactualizadoporId
     *
     * @param integer $numactualizadoporId
     * @return Entidadesvendedores
     */
    public function setNumactualizadoporId($numactualizadoporId)
    {
        $this->numactualizadoporId = $numactualizadoporId;

        return $this;
    }

    /**
     * Get numactualizadoporId
     *
     * @return integer 
     */
    public function getNumactualizadoporId()
    {
        return $this->numactualizadoporId;
    }

    /**
     * Set dteactualizacion
     *
     * @param \DateTime $dteactualizacion
     * @return Entidadesvendedores
     */
    public function setDteactualizacion($dteactualizacion)
    {
        $this->dteactualizacion = $dteactualizacion;

        return $this;
    }

    /**
     * Get dteactualizacion
     *
     * @return \DateTime 
     */
    public function getDteactualizacion()
    {
        return $this->dteactualizacion;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Entidadesvendedores
     */
    public function setNumtipoestado($numtipoestado)
    {
        $this->numtipoestado = $numtipoestado;

        return $this;
    }

    /**
     * Get numtipoestado
     *
     * @return integer 
     */
    public function getNumtipoestado()
    {
        return $this->numtipoestado;
    }

    /**
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Entidadesvendedores
     */
    public function setNumestadocomunicacion($numestadocomunicacion)
    {
        $this->numestadocomunicacion = $numestadocomunicacion;

        return $this;
    }

    /**
     * Get numestadocomunicacion
     *
     * @return integer 
     */
    public function getNumestadocomunicacion()
    {
        return $this->numestadocomunicacion;
    }

    /**
     * Set numnivelautorizacion
     *
     * @param integer $numnivelautorizacion
     * @return Entidadesvendedores
     */
    public function setNumnivelautorizacion($numnivelautorizacion)
    {
        $this->numnivelautorizacion = $numnivelautorizacion;

        return $this;
    }

    /**
     * Get numnivelautorizacion
     *
     * @return integer 
     */
    public function getNumnivelautorizacion()
    {
        return $this->numnivelautorizacion;
    }

    /**
     * Set logregistrarcomocajero
     *
     * @param boolean $logregistrarcomocajero
     * @return Entidadesvendedores
     */
    public function setLogregistrarcomocajero($logregistrarcomocajero)
    {
        $this->logregistrarcomocajero = $logregistrarcomocajero;

        return $this;
    }

    /**
     * Get logregistrarcomocajero
     *
     * @return boolean 
     */
    public function getLogregistrarcomocajero()
    {
        return $this->logregistrarcomocajero;
    }
}
