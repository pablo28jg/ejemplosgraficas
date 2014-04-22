<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentasbancarias
 *
 * @ORM\Table(name="CuentasBancarias", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrCuentaBancaria_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"NumSucursalBancaria_id"}), @ORM\Index(name="Indice_4", columns={"DteActualizacion"}), @ORM\Index(name="Indice_5", columns={"NumEstadoComunicacion"})})
 * @ORM\Entity
 */
class Cuentasbancarias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumCuentaBancaria_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numcuentabancariaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaBancaria_ky", type="string", length=10, nullable=true)
     */
    private $strcuentabancariaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNoCuenta", type="string", length=20, nullable=true)
     */
    private $strnocuenta;

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
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMoneda_id", type="integer", nullable=true)
     */
    private $nummonedaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSucursalBancaria_id", type="integer", nullable=true)
     */
    private $numsucursalbancariaId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteApertura", type="datetime", nullable=true)
     */
    private $dteapertura;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumDiaCorte", type="integer", nullable=true)
     */
    private $numdiacorte = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNoChequeSiguiente", type="integer", nullable=true)
     */
    private $numnochequesiguiente = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSiguienteCheque", type="integer", nullable=true)
     */
    private $numsiguientecheque = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrFormatoCheques", type="string", length=20, nullable=true)
     */
    private $strformatocheques;

    /**
     * @var string
     *
     * @ORM\Column(name="StrFormatoEstadoCuenta", type="string", length=30, nullable=true)
     */
    private $strformatoestadocuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLimiteCredito", type="integer", nullable=true)
     */
    private $numlimitecredito = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeComision", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajecomision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentajeInteres", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentajeinteres = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPagoMinimo", type="integer", nullable=true)
     */
    private $numpagominimo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCodigoAcceso", type="integer", nullable=true)
     */
    private $numcodigoacceso = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_1_id", type="integer", nullable=true)
     */
    private $numclasificacion1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_2_id", type="integer", nullable=true)
     */
    private $numclasificacion2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_3_id", type="integer", nullable=true)
     */
    private $numclasificacion3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_4_id", type="integer", nullable=true)
     */
    private $numclasificacion4Id = '0';

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
     * @var string
     *
     * @ORM\Column(name="StrCuentaContable_ky", type="string", length=20, nullable=true)
     */
    private $strcuentacontableKy;



    /**
     * Get numcuentabancariaId
     *
     * @return integer 
     */
    public function getNumcuentabancariaId()
    {
        return $this->numcuentabancariaId;
    }

    /**
     * Set strcuentabancariaKy
     *
     * @param string $strcuentabancariaKy
     * @return Cuentasbancarias
     */
    public function setStrcuentabancariaKy($strcuentabancariaKy)
    {
        $this->strcuentabancariaKy = $strcuentabancariaKy;

        return $this;
    }

    /**
     * Get strcuentabancariaKy
     *
     * @return string 
     */
    public function getStrcuentabancariaKy()
    {
        return $this->strcuentabancariaKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentasbancarias
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
     * Set strnocuenta
     *
     * @param string $strnocuenta
     * @return Cuentasbancarias
     */
    public function setStrnocuenta($strnocuenta)
    {
        $this->strnocuenta = $strnocuenta;

        return $this;
    }

    /**
     * Get strnocuenta
     *
     * @return string 
     */
    public function getStrnocuenta()
    {
        return $this->strnocuenta;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Cuentasbancarias
     */
    public function setNumempresaId($numempresaId)
    {
        $this->numempresaId = $numempresaId;

        return $this;
    }

    /**
     * Get numempresaId
     *
     * @return integer 
     */
    public function getNumempresaId()
    {
        return $this->numempresaId;
    }

    /**
     * Set nummonedaId
     *
     * @param integer $nummonedaId
     * @return Cuentasbancarias
     */
    public function setNummonedaId($nummonedaId)
    {
        $this->nummonedaId = $nummonedaId;

        return $this;
    }

    /**
     * Get nummonedaId
     *
     * @return integer 
     */
    public function getNummonedaId()
    {
        return $this->nummonedaId;
    }

    /**
     * Set numsucursalbancariaId
     *
     * @param integer $numsucursalbancariaId
     * @return Cuentasbancarias
     */
    public function setNumsucursalbancariaId($numsucursalbancariaId)
    {
        $this->numsucursalbancariaId = $numsucursalbancariaId;

        return $this;
    }

    /**
     * Get numsucursalbancariaId
     *
     * @return integer 
     */
    public function getNumsucursalbancariaId()
    {
        return $this->numsucursalbancariaId;
    }

    /**
     * Set dteapertura
     *
     * @param \DateTime $dteapertura
     * @return Cuentasbancarias
     */
    public function setDteapertura($dteapertura)
    {
        $this->dteapertura = $dteapertura;

        return $this;
    }

    /**
     * Get dteapertura
     *
     * @return \DateTime 
     */
    public function getDteapertura()
    {
        return $this->dteapertura;
    }

    /**
     * Set numdiacorte
     *
     * @param integer $numdiacorte
     * @return Cuentasbancarias
     */
    public function setNumdiacorte($numdiacorte)
    {
        $this->numdiacorte = $numdiacorte;

        return $this;
    }

    /**
     * Get numdiacorte
     *
     * @return integer 
     */
    public function getNumdiacorte()
    {
        return $this->numdiacorte;
    }

    /**
     * Set numnochequesiguiente
     *
     * @param integer $numnochequesiguiente
     * @return Cuentasbancarias
     */
    public function setNumnochequesiguiente($numnochequesiguiente)
    {
        $this->numnochequesiguiente = $numnochequesiguiente;

        return $this;
    }

    /**
     * Get numnochequesiguiente
     *
     * @return integer 
     */
    public function getNumnochequesiguiente()
    {
        return $this->numnochequesiguiente;
    }

    /**
     * Set numsiguientecheque
     *
     * @param integer $numsiguientecheque
     * @return Cuentasbancarias
     */
    public function setNumsiguientecheque($numsiguientecheque)
    {
        $this->numsiguientecheque = $numsiguientecheque;

        return $this;
    }

    /**
     * Get numsiguientecheque
     *
     * @return integer 
     */
    public function getNumsiguientecheque()
    {
        return $this->numsiguientecheque;
    }

    /**
     * Set strformatocheques
     *
     * @param string $strformatocheques
     * @return Cuentasbancarias
     */
    public function setStrformatocheques($strformatocheques)
    {
        $this->strformatocheques = $strformatocheques;

        return $this;
    }

    /**
     * Get strformatocheques
     *
     * @return string 
     */
    public function getStrformatocheques()
    {
        return $this->strformatocheques;
    }

    /**
     * Set strformatoestadocuenta
     *
     * @param string $strformatoestadocuenta
     * @return Cuentasbancarias
     */
    public function setStrformatoestadocuenta($strformatoestadocuenta)
    {
        $this->strformatoestadocuenta = $strformatoestadocuenta;

        return $this;
    }

    /**
     * Get strformatoestadocuenta
     *
     * @return string 
     */
    public function getStrformatoestadocuenta()
    {
        return $this->strformatoestadocuenta;
    }

    /**
     * Set numlimitecredito
     *
     * @param integer $numlimitecredito
     * @return Cuentasbancarias
     */
    public function setNumlimitecredito($numlimitecredito)
    {
        $this->numlimitecredito = $numlimitecredito;

        return $this;
    }

    /**
     * Get numlimitecredito
     *
     * @return integer 
     */
    public function getNumlimitecredito()
    {
        return $this->numlimitecredito;
    }

    /**
     * Set numporcentajecomision
     *
     * @param float $numporcentajecomision
     * @return Cuentasbancarias
     */
    public function setNumporcentajecomision($numporcentajecomision)
    {
        $this->numporcentajecomision = $numporcentajecomision;

        return $this;
    }

    /**
     * Get numporcentajecomision
     *
     * @return float 
     */
    public function getNumporcentajecomision()
    {
        return $this->numporcentajecomision;
    }

    /**
     * Set numporcentajeinteres
     *
     * @param float $numporcentajeinteres
     * @return Cuentasbancarias
     */
    public function setNumporcentajeinteres($numporcentajeinteres)
    {
        $this->numporcentajeinteres = $numporcentajeinteres;

        return $this;
    }

    /**
     * Get numporcentajeinteres
     *
     * @return float 
     */
    public function getNumporcentajeinteres()
    {
        return $this->numporcentajeinteres;
    }

    /**
     * Set numpagominimo
     *
     * @param integer $numpagominimo
     * @return Cuentasbancarias
     */
    public function setNumpagominimo($numpagominimo)
    {
        $this->numpagominimo = $numpagominimo;

        return $this;
    }

    /**
     * Get numpagominimo
     *
     * @return integer 
     */
    public function getNumpagominimo()
    {
        return $this->numpagominimo;
    }

    /**
     * Set numcodigoacceso
     *
     * @param integer $numcodigoacceso
     * @return Cuentasbancarias
     */
    public function setNumcodigoacceso($numcodigoacceso)
    {
        $this->numcodigoacceso = $numcodigoacceso;

        return $this;
    }

    /**
     * Get numcodigoacceso
     *
     * @return integer 
     */
    public function getNumcodigoacceso()
    {
        return $this->numcodigoacceso;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Cuentasbancarias
     */
    public function setNumclasificacion1Id($numclasificacion1Id)
    {
        $this->numclasificacion1Id = $numclasificacion1Id;

        return $this;
    }

    /**
     * Get numclasificacion1Id
     *
     * @return integer 
     */
    public function getNumclasificacion1Id()
    {
        return $this->numclasificacion1Id;
    }

    /**
     * Set numclasificacion2Id
     *
     * @param integer $numclasificacion2Id
     * @return Cuentasbancarias
     */
    public function setNumclasificacion2Id($numclasificacion2Id)
    {
        $this->numclasificacion2Id = $numclasificacion2Id;

        return $this;
    }

    /**
     * Get numclasificacion2Id
     *
     * @return integer 
     */
    public function getNumclasificacion2Id()
    {
        return $this->numclasificacion2Id;
    }

    /**
     * Set numclasificacion3Id
     *
     * @param integer $numclasificacion3Id
     * @return Cuentasbancarias
     */
    public function setNumclasificacion3Id($numclasificacion3Id)
    {
        $this->numclasificacion3Id = $numclasificacion3Id;

        return $this;
    }

    /**
     * Get numclasificacion3Id
     *
     * @return integer 
     */
    public function getNumclasificacion3Id()
    {
        return $this->numclasificacion3Id;
    }

    /**
     * Set numclasificacion4Id
     *
     * @param integer $numclasificacion4Id
     * @return Cuentasbancarias
     */
    public function setNumclasificacion4Id($numclasificacion4Id)
    {
        $this->numclasificacion4Id = $numclasificacion4Id;

        return $this;
    }

    /**
     * Get numclasificacion4Id
     *
     * @return integer 
     */
    public function getNumclasificacion4Id()
    {
        return $this->numclasificacion4Id;
    }

    /**
     * Set memobservaciones
     *
     * @param string $memobservaciones
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * @return Cuentasbancarias
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
     * Set strcuentacontableKy
     *
     * @param string $strcuentacontableKy
     * @return Cuentasbancarias
     */
    public function setStrcuentacontableKy($strcuentacontableKy)
    {
        $this->strcuentacontableKy = $strcuentacontableKy;

        return $this;
    }

    /**
     * Get strcuentacontableKy
     *
     * @return string 
     */
    public function getStrcuentacontableKy()
    {
        return $this->strcuentacontableKy;
    }
}
