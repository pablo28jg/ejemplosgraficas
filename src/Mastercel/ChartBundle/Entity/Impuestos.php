<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impuestos
 *
 * @ORM\Table(name="Impuestos", uniqueConstraints={@ORM\UniqueConstraint(name="Indice_1", columns={"StrImpuesto_ky"})}, indexes={@ORM\Index(name="Indice_2", columns={"StrDescripcion"}), @ORM\Index(name="Indice_3", columns={"DteActualizacion"}), @ORM\Index(name="Indice_4", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_5", columns={"StrCuentaAcreditar_ky"}), @ORM\Index(name="Indice_6", columns={"StrCuentaAcreditado_ky"}), @ORM\Index(name="Indice_7", columns={"StrCuentaTrasladar_ky"}), @ORM\Index(name="Indice_8", columns={"StrCuentaTrasladado_ky"})})
 * @ORM\Entity
 */
class Impuestos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumImpuesto_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numimpuestoId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrImpuesto_ky", type="string", length=10, nullable=true)
     */
    private $strimpuestoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipo", type="integer", nullable=true)
     */
    private $numtipo = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogRetencion", type="boolean", nullable=true)
     */
    private $logretencion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumPorcentaje", type="float", precision=53, scale=0, nullable=true)
     */
    private $numporcentaje = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoRedondeo", type="integer", nullable=true)
     */
    private $numtiporedondeo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaAcreditar_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaacreditarKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaAcreditado_ky", type="string", length=20, nullable=true)
     */
    private $strcuentaacreditadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaTrasladar_ky", type="string", length=20, nullable=true)
     */
    private $strcuentatrasladarKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaTrasladado_ky", type="string", length=20, nullable=true)
     */
    private $strcuentatrasladadoKy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImpuestoEnRecibo", type="boolean", nullable=true)
     */
    private $logimpuestoenrecibo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ChrIdentificadorImpuesto", type="string", length=1, nullable=true)
     */
    private $chridentificadorimpuesto;

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
     * Get numimpuestoId
     *
     * @return integer 
     */
    public function getNumimpuestoId()
    {
        return $this->numimpuestoId;
    }

    /**
     * Set strimpuestoKy
     *
     * @param string $strimpuestoKy
     * @return Impuestos
     */
    public function setStrimpuestoKy($strimpuestoKy)
    {
        $this->strimpuestoKy = $strimpuestoKy;

        return $this;
    }

    /**
     * Get strimpuestoKy
     *
     * @return string 
     */
    public function getStrimpuestoKy()
    {
        return $this->strimpuestoKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Impuestos
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Impuestos
     */
    public function setNumcategoriaId($numcategoriaId)
    {
        $this->numcategoriaId = $numcategoriaId;

        return $this;
    }

    /**
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set numtipo
     *
     * @param integer $numtipo
     * @return Impuestos
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
     * Set logretencion
     *
     * @param boolean $logretencion
     * @return Impuestos
     */
    public function setLogretencion($logretencion)
    {
        $this->logretencion = $logretencion;

        return $this;
    }

    /**
     * Get logretencion
     *
     * @return boolean 
     */
    public function getLogretencion()
    {
        return $this->logretencion;
    }

    /**
     * Set numporcentaje
     *
     * @param float $numporcentaje
     * @return Impuestos
     */
    public function setNumporcentaje($numporcentaje)
    {
        $this->numporcentaje = $numporcentaje;

        return $this;
    }

    /**
     * Get numporcentaje
     *
     * @return float 
     */
    public function getNumporcentaje()
    {
        return $this->numporcentaje;
    }

    /**
     * Set numtiporedondeo
     *
     * @param integer $numtiporedondeo
     * @return Impuestos
     */
    public function setNumtiporedondeo($numtiporedondeo)
    {
        $this->numtiporedondeo = $numtiporedondeo;

        return $this;
    }

    /**
     * Get numtiporedondeo
     *
     * @return integer 
     */
    public function getNumtiporedondeo()
    {
        return $this->numtiporedondeo;
    }

    /**
     * Set strcuentaacreditarKy
     *
     * @param string $strcuentaacreditarKy
     * @return Impuestos
     */
    public function setStrcuentaacreditarKy($strcuentaacreditarKy)
    {
        $this->strcuentaacreditarKy = $strcuentaacreditarKy;

        return $this;
    }

    /**
     * Get strcuentaacreditarKy
     *
     * @return string 
     */
    public function getStrcuentaacreditarKy()
    {
        return $this->strcuentaacreditarKy;
    }

    /**
     * Set strcuentaacreditadoKy
     *
     * @param string $strcuentaacreditadoKy
     * @return Impuestos
     */
    public function setStrcuentaacreditadoKy($strcuentaacreditadoKy)
    {
        $this->strcuentaacreditadoKy = $strcuentaacreditadoKy;

        return $this;
    }

    /**
     * Get strcuentaacreditadoKy
     *
     * @return string 
     */
    public function getStrcuentaacreditadoKy()
    {
        return $this->strcuentaacreditadoKy;
    }

    /**
     * Set strcuentatrasladarKy
     *
     * @param string $strcuentatrasladarKy
     * @return Impuestos
     */
    public function setStrcuentatrasladarKy($strcuentatrasladarKy)
    {
        $this->strcuentatrasladarKy = $strcuentatrasladarKy;

        return $this;
    }

    /**
     * Get strcuentatrasladarKy
     *
     * @return string 
     */
    public function getStrcuentatrasladarKy()
    {
        return $this->strcuentatrasladarKy;
    }

    /**
     * Set strcuentatrasladadoKy
     *
     * @param string $strcuentatrasladadoKy
     * @return Impuestos
     */
    public function setStrcuentatrasladadoKy($strcuentatrasladadoKy)
    {
        $this->strcuentatrasladadoKy = $strcuentatrasladadoKy;

        return $this;
    }

    /**
     * Get strcuentatrasladadoKy
     *
     * @return string 
     */
    public function getStrcuentatrasladadoKy()
    {
        return $this->strcuentatrasladadoKy;
    }

    /**
     * Set logimpuestoenrecibo
     *
     * @param boolean $logimpuestoenrecibo
     * @return Impuestos
     */
    public function setLogimpuestoenrecibo($logimpuestoenrecibo)
    {
        $this->logimpuestoenrecibo = $logimpuestoenrecibo;

        return $this;
    }

    /**
     * Get logimpuestoenrecibo
     *
     * @return boolean 
     */
    public function getLogimpuestoenrecibo()
    {
        return $this->logimpuestoenrecibo;
    }

    /**
     * Set chridentificadorimpuesto
     *
     * @param string $chridentificadorimpuesto
     * @return Impuestos
     */
    public function setChridentificadorimpuesto($chridentificadorimpuesto)
    {
        $this->chridentificadorimpuesto = $chridentificadorimpuesto;

        return $this;
    }

    /**
     * Get chridentificadorimpuesto
     *
     * @return string 
     */
    public function getChridentificadorimpuesto()
    {
        return $this->chridentificadorimpuesto;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Impuestos
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
     * @return Impuestos
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
     * @return Impuestos
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
     * @return Impuestos
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
     * @return Impuestos
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
}
