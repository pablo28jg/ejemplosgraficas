<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuraciones
 *
 * @ORM\Table(name="Configuraciones", indexes={@ORM\Index(name="Indice_1", columns={"StrDescripcion"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Configuraciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumConfiguracion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numconfiguracionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumParametro_id", type="integer", nullable=true)
     */
    private $numparametroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemAlmacen", type="text", length=16, nullable=true)
     */
    private $memalmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="MemGeneral", type="text", length=16, nullable=true)
     */
    private $memgeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="MemInventarios", type="text", length=16, nullable=true)
     */
    private $meminventarios;

    /**
     * @var string
     *
     * @ORM\Column(name="MemTomasInventario", type="text", length=16, nullable=true)
     */
    private $memtomasinventario;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCompras", type="text", length=16, nullable=true)
     */
    private $memcompras;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCuentasPagar", type="text", length=16, nullable=true)
     */
    private $memcuentaspagar;

    /**
     * @var string
     *
     * @ORM\Column(name="MemVentas", type="text", length=16, nullable=true)
     */
    private $memventas;

    /**
     * @var string
     *
     * @ORM\Column(name="MemCuentasCobrar", type="text", length=16, nullable=true)
     */
    private $memcuentascobrar;

    /**
     * @var string
     *
     * @ORM\Column(name="MemTesoreria", type="text", length=16, nullable=true)
     */
    private $memtesoreria;

    /**
     * @var string
     *
     * @ORM\Column(name="MemProduccion", type="text", length=16, nullable=true)
     */
    private $memproduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="MemProyectos", type="text", length=16, nullable=true)
     */
    private $memproyectos;

    /**
     * @var string
     *
     * @ORM\Column(name="MemContabilidad", type="text", length=16, nullable=true)
     */
    private $memcontabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="MemOrdenesServicio", type="text", length=16, nullable=true)
     */
    private $memordenesservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="MemMonederosElectronicos", type="text", length=16, nullable=true)
     */
    private $memmonederoselectronicos;

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
     * @ORM\Column(name="NumEstadoComunicacion", type="integer", nullable=true)
     */
    private $numestadocomunicacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MemBancos", type="text", length=16, nullable=true)
     */
    private $membancos;



    /**
     * Get numconfiguracionId
     *
     * @return integer 
     */
    public function getNumconfiguracionId()
    {
        return $this->numconfiguracionId;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Configuraciones
     */
    public function setStrdescripcion($strdescripcion)
    {
        $this->strdescripcion = $strdescripcion;

        return $this;
    }

    /**
     * Get strdescripcion
     *
     * @return string 
     */
    public function getStrdescripcion()
    {
        return $this->strdescripcion;
    }

    /**
     * Set numparametroId
     *
     * @param integer $numparametroId
     * @return Configuraciones
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
     * Set memalmacen
     *
     * @param string $memalmacen
     * @return Configuraciones
     */
    public function setMemalmacen($memalmacen)
    {
        $this->memalmacen = $memalmacen;

        return $this;
    }

    /**
     * Get memalmacen
     *
     * @return string 
     */
    public function getMemalmacen()
    {
        return $this->memalmacen;
    }

    /**
     * Set memgeneral
     *
     * @param string $memgeneral
     * @return Configuraciones
     */
    public function setMemgeneral($memgeneral)
    {
        $this->memgeneral = $memgeneral;

        return $this;
    }

    /**
     * Get memgeneral
     *
     * @return string 
     */
    public function getMemgeneral()
    {
        return $this->memgeneral;
    }

    /**
     * Set meminventarios
     *
     * @param string $meminventarios
     * @return Configuraciones
     */
    public function setMeminventarios($meminventarios)
    {
        $this->meminventarios = $meminventarios;

        return $this;
    }

    /**
     * Get meminventarios
     *
     * @return string 
     */
    public function getMeminventarios()
    {
        return $this->meminventarios;
    }

    /**
     * Set memtomasinventario
     *
     * @param string $memtomasinventario
     * @return Configuraciones
     */
    public function setMemtomasinventario($memtomasinventario)
    {
        $this->memtomasinventario = $memtomasinventario;

        return $this;
    }

    /**
     * Get memtomasinventario
     *
     * @return string 
     */
    public function getMemtomasinventario()
    {
        return $this->memtomasinventario;
    }

    /**
     * Set memcompras
     *
     * @param string $memcompras
     * @return Configuraciones
     */
    public function setMemcompras($memcompras)
    {
        $this->memcompras = $memcompras;

        return $this;
    }

    /**
     * Get memcompras
     *
     * @return string 
     */
    public function getMemcompras()
    {
        return $this->memcompras;
    }

    /**
     * Set memcuentaspagar
     *
     * @param string $memcuentaspagar
     * @return Configuraciones
     */
    public function setMemcuentaspagar($memcuentaspagar)
    {
        $this->memcuentaspagar = $memcuentaspagar;

        return $this;
    }

    /**
     * Get memcuentaspagar
     *
     * @return string 
     */
    public function getMemcuentaspagar()
    {
        return $this->memcuentaspagar;
    }

    /**
     * Set memventas
     *
     * @param string $memventas
     * @return Configuraciones
     */
    public function setMemventas($memventas)
    {
        $this->memventas = $memventas;

        return $this;
    }

    /**
     * Get memventas
     *
     * @return string 
     */
    public function getMemventas()
    {
        return $this->memventas;
    }

    /**
     * Set memcuentascobrar
     *
     * @param string $memcuentascobrar
     * @return Configuraciones
     */
    public function setMemcuentascobrar($memcuentascobrar)
    {
        $this->memcuentascobrar = $memcuentascobrar;

        return $this;
    }

    /**
     * Get memcuentascobrar
     *
     * @return string 
     */
    public function getMemcuentascobrar()
    {
        return $this->memcuentascobrar;
    }

    /**
     * Set memtesoreria
     *
     * @param string $memtesoreria
     * @return Configuraciones
     */
    public function setMemtesoreria($memtesoreria)
    {
        $this->memtesoreria = $memtesoreria;

        return $this;
    }

    /**
     * Get memtesoreria
     *
     * @return string 
     */
    public function getMemtesoreria()
    {
        return $this->memtesoreria;
    }

    /**
     * Set memproduccion
     *
     * @param string $memproduccion
     * @return Configuraciones
     */
    public function setMemproduccion($memproduccion)
    {
        $this->memproduccion = $memproduccion;

        return $this;
    }

    /**
     * Get memproduccion
     *
     * @return string 
     */
    public function getMemproduccion()
    {
        return $this->memproduccion;
    }

    /**
     * Set memproyectos
     *
     * @param string $memproyectos
     * @return Configuraciones
     */
    public function setMemproyectos($memproyectos)
    {
        $this->memproyectos = $memproyectos;

        return $this;
    }

    /**
     * Get memproyectos
     *
     * @return string 
     */
    public function getMemproyectos()
    {
        return $this->memproyectos;
    }

    /**
     * Set memcontabilidad
     *
     * @param string $memcontabilidad
     * @return Configuraciones
     */
    public function setMemcontabilidad($memcontabilidad)
    {
        $this->memcontabilidad = $memcontabilidad;

        return $this;
    }

    /**
     * Get memcontabilidad
     *
     * @return string 
     */
    public function getMemcontabilidad()
    {
        return $this->memcontabilidad;
    }

    /**
     * Set memordenesservicio
     *
     * @param string $memordenesservicio
     * @return Configuraciones
     */
    public function setMemordenesservicio($memordenesservicio)
    {
        $this->memordenesservicio = $memordenesservicio;

        return $this;
    }

    /**
     * Get memordenesservicio
     *
     * @return string 
     */
    public function getMemordenesservicio()
    {
        return $this->memordenesservicio;
    }

    /**
     * Set memmonederoselectronicos
     *
     * @param string $memmonederoselectronicos
     * @return Configuraciones
     */
    public function setMemmonederoselectronicos($memmonederoselectronicos)
    {
        $this->memmonederoselectronicos = $memmonederoselectronicos;

        return $this;
    }

    /**
     * Get memmonederoselectronicos
     *
     * @return string 
     */
    public function getMemmonederoselectronicos()
    {
        return $this->memmonederoselectronicos;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Configuraciones
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
     * @return Configuraciones
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
     * @return Configuraciones
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
     * @return Configuraciones
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
     * Set numestadocomunicacion
     *
     * @param integer $numestadocomunicacion
     * @return Configuraciones
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
     * Set membancos
     *
     * @param string $membancos
     * @return Configuraciones
     */
    public function setMembancos($membancos)
    {
        $this->membancos = $membancos;

        return $this;
    }

    /**
     * Get membancos
     *
     * @return string 
     */
    public function getMembancos()
    {
        return $this->membancos;
    }
}
