<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomasinventariosregistros
 *
 * @ORM\Table(name="TomasInventariosRegistros", indexes={@ORM\Index(name="Indice_1", columns={"DteDocumento", "TmeDocumento"}), @ORM\Index(name="Indice_2", columns={"NumEmpresa_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky", "NumTipoEstado"}), @ORM\Index(name="Indice_3", columns={"NumEjercicio_id", "NumAlmacen_id", "StrArticulo_ky", "StrPedimento_ky", "StrLote_ky", "StrSerie_ky"}), @ORM\Index(name="Indice_4", columns={"NumAlmacen_id", "NumTipoEstado"}), @ORM\Index(name="Indice_5", columns={"NumEmpresa_id", "StrArticulo_ky", "StrSerie_ky", "NumTipoEstado"}), @ORM\Index(name="Indice_6", columns={"NumToma_id", "NumAlmacen_id", "StrArticulo_ky", "StrSerieControl_ky", "NumTipoEstado"})})
 * @ORM\Entity
 */
class Tomasinventariosregistros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumToma_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtomaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionRegistro_id", type="integer", nullable=true)
     */
    private $numtransaccionregistroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrDocumento", type="string", length=10, nullable=true)
     */
    private $strdocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteDocumento", type="datetime", nullable=true)
     */
    private $dtedocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TmeDocumento", type="datetime", nullable=true)
     */
    private $tmedocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=true)
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPeriodo_id", type="integer", nullable=true)
     */
    private $numperiodoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumSemana_id", type="integer", nullable=true)
     */
    private $numsemanaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPedimento_ky", type="string", length=20, nullable=true)
     */
    private $strpedimentoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrLote_ky", type="string", length=20, nullable=true)
     */
    private $strloteKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=true)
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieControl_ky", type="string", length=20, nullable=true)
     */
    private $strseriecontrolKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumUnidadMedida_id", type="integer", nullable=true)
     */
    private $numunidadmedidaId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorConversion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactorconversion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidad", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidad = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteExpiracion", type="datetime", nullable=true)
     */
    private $dteexpiracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMesesGarantia", type="integer", nullable=true)
     */
    private $nummesesgarantia = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoCompra", type="integer", nullable=true)
     */
    private $numcostocompra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoEstandar", type="integer", nullable=true)
     */
    private $numcostoestandar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPromedio", type="integer", nullable=true)
     */
    private $numcostopromedio = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoPEPS", type="integer", nullable=true)
     */
    private $numcostopeps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCostoUEPS", type="integer", nullable=true)
     */
    private $numcostoueps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numtomaId
     *
     * @param integer $numtomaId
     * @return Tomasinventariosregistros
     */
    public function setNumtomaId($numtomaId)
    {
        $this->numtomaId = $numtomaId;

        return $this;
    }

    /**
     * Get numtomaId
     *
     * @return integer 
     */
    public function getNumtomaId()
    {
        return $this->numtomaId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Tomasinventariosregistros
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
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Tomasinventariosregistros
     */
    public function setNumconsecutivoId($numconsecutivoId)
    {
        $this->numconsecutivoId = $numconsecutivoId;

        return $this;
    }

    /**
     * Get numconsecutivoId
     *
     * @return integer 
     */
    public function getNumconsecutivoId()
    {
        return $this->numconsecutivoId;
    }

    /**
     * Set numtransaccionregistroId
     *
     * @param integer $numtransaccionregistroId
     * @return Tomasinventariosregistros
     */
    public function setNumtransaccionregistroId($numtransaccionregistroId)
    {
        $this->numtransaccionregistroId = $numtransaccionregistroId;

        return $this;
    }

    /**
     * Get numtransaccionregistroId
     *
     * @return integer 
     */
    public function getNumtransaccionregistroId()
    {
        return $this->numtransaccionregistroId;
    }

    /**
     * Set strdocumento
     *
     * @param string $strdocumento
     * @return Tomasinventariosregistros
     */
    public function setStrdocumento($strdocumento)
    {
        $this->strdocumento = $strdocumento;

        return $this;
    }

    /**
     * Get strdocumento
     *
     * @return string 
     */
    public function getStrdocumento()
    {
        return $this->strdocumento;
    }

    /**
     * Set dtedocumento
     *
     * @param \DateTime $dtedocumento
     * @return Tomasinventariosregistros
     */
    public function setDtedocumento($dtedocumento)
    {
        $this->dtedocumento = $dtedocumento;

        return $this;
    }

    /**
     * Get dtedocumento
     *
     * @return \DateTime 
     */
    public function getDtedocumento()
    {
        return $this->dtedocumento;
    }

    /**
     * Set tmedocumento
     *
     * @param \DateTime $tmedocumento
     * @return Tomasinventariosregistros
     */
    public function setTmedocumento($tmedocumento)
    {
        $this->tmedocumento = $tmedocumento;

        return $this;
    }

    /**
     * Get tmedocumento
     *
     * @return \DateTime 
     */
    public function getTmedocumento()
    {
        return $this->tmedocumento;
    }

    /**
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Tomasinventariosregistros
     */
    public function setNumejercicioId($numejercicioId)
    {
        $this->numejercicioId = $numejercicioId;

        return $this;
    }

    /**
     * Get numejercicioId
     *
     * @return integer 
     */
    public function getNumejercicioId()
    {
        return $this->numejercicioId;
    }

    /**
     * Set numperiodoId
     *
     * @param integer $numperiodoId
     * @return Tomasinventariosregistros
     */
    public function setNumperiodoId($numperiodoId)
    {
        $this->numperiodoId = $numperiodoId;

        return $this;
    }

    /**
     * Get numperiodoId
     *
     * @return integer 
     */
    public function getNumperiodoId()
    {
        return $this->numperiodoId;
    }

    /**
     * Set numsemanaId
     *
     * @param integer $numsemanaId
     * @return Tomasinventariosregistros
     */
    public function setNumsemanaId($numsemanaId)
    {
        $this->numsemanaId = $numsemanaId;

        return $this;
    }

    /**
     * Get numsemanaId
     *
     * @return integer 
     */
    public function getNumsemanaId()
    {
        return $this->numsemanaId;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Tomasinventariosregistros
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Tomasinventariosregistros
     */
    public function setNumcentrocontrolId($numcentrocontrolId)
    {
        $this->numcentrocontrolId = $numcentrocontrolId;

        return $this;
    }

    /**
     * Get numcentrocontrolId
     *
     * @return integer 
     */
    public function getNumcentrocontrolId()
    {
        return $this->numcentrocontrolId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Tomasinventariosregistros
     */
    public function setStrarticuloKy($strarticuloKy)
    {
        $this->strarticuloKy = $strarticuloKy;

        return $this;
    }

    /**
     * Get strarticuloKy
     *
     * @return string 
     */
    public function getStrarticuloKy()
    {
        return $this->strarticuloKy;
    }

    /**
     * Set strpedimentoKy
     *
     * @param string $strpedimentoKy
     * @return Tomasinventariosregistros
     */
    public function setStrpedimentoKy($strpedimentoKy)
    {
        $this->strpedimentoKy = $strpedimentoKy;

        return $this;
    }

    /**
     * Get strpedimentoKy
     *
     * @return string 
     */
    public function getStrpedimentoKy()
    {
        return $this->strpedimentoKy;
    }

    /**
     * Set strloteKy
     *
     * @param string $strloteKy
     * @return Tomasinventariosregistros
     */
    public function setStrloteKy($strloteKy)
    {
        $this->strloteKy = $strloteKy;

        return $this;
    }

    /**
     * Get strloteKy
     *
     * @return string 
     */
    public function getStrloteKy()
    {
        return $this->strloteKy;
    }

    /**
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Tomasinventariosregistros
     */
    public function setStrserieKy($strserieKy)
    {
        $this->strserieKy = $strserieKy;

        return $this;
    }

    /**
     * Get strserieKy
     *
     * @return string 
     */
    public function getStrserieKy()
    {
        return $this->strserieKy;
    }

    /**
     * Set strseriecontrolKy
     *
     * @param string $strseriecontrolKy
     * @return Tomasinventariosregistros
     */
    public function setStrseriecontrolKy($strseriecontrolKy)
    {
        $this->strseriecontrolKy = $strseriecontrolKy;

        return $this;
    }

    /**
     * Get strseriecontrolKy
     *
     * @return string 
     */
    public function getStrseriecontrolKy()
    {
        return $this->strseriecontrolKy;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Tomasinventariosregistros
     */
    public function setStrreferencia($strreferencia)
    {
        $this->strreferencia = $strreferencia;

        return $this;
    }

    /**
     * Get strreferencia
     *
     * @return string 
     */
    public function getStrreferencia()
    {
        return $this->strreferencia;
    }

    /**
     * Set numunidadmedidaId
     *
     * @param integer $numunidadmedidaId
     * @return Tomasinventariosregistros
     */
    public function setNumunidadmedidaId($numunidadmedidaId)
    {
        $this->numunidadmedidaId = $numunidadmedidaId;

        return $this;
    }

    /**
     * Get numunidadmedidaId
     *
     * @return integer 
     */
    public function getNumunidadmedidaId()
    {
        return $this->numunidadmedidaId;
    }

    /**
     * Set numfactorconversion
     *
     * @param float $numfactorconversion
     * @return Tomasinventariosregistros
     */
    public function setNumfactorconversion($numfactorconversion)
    {
        $this->numfactorconversion = $numfactorconversion;

        return $this;
    }

    /**
     * Get numfactorconversion
     *
     * @return float 
     */
    public function getNumfactorconversion()
    {
        return $this->numfactorconversion;
    }

    /**
     * Set numcantidad
     *
     * @param float $numcantidad
     * @return Tomasinventariosregistros
     */
    public function setNumcantidad($numcantidad)
    {
        $this->numcantidad = $numcantidad;

        return $this;
    }

    /**
     * Get numcantidad
     *
     * @return float 
     */
    public function getNumcantidad()
    {
        return $this->numcantidad;
    }

    /**
     * Set dteexpiracion
     *
     * @param \DateTime $dteexpiracion
     * @return Tomasinventariosregistros
     */
    public function setDteexpiracion($dteexpiracion)
    {
        $this->dteexpiracion = $dteexpiracion;

        return $this;
    }

    /**
     * Get dteexpiracion
     *
     * @return \DateTime 
     */
    public function getDteexpiracion()
    {
        return $this->dteexpiracion;
    }

    /**
     * Set nummesesgarantia
     *
     * @param integer $nummesesgarantia
     * @return Tomasinventariosregistros
     */
    public function setNummesesgarantia($nummesesgarantia)
    {
        $this->nummesesgarantia = $nummesesgarantia;

        return $this;
    }

    /**
     * Get nummesesgarantia
     *
     * @return integer 
     */
    public function getNummesesgarantia()
    {
        return $this->nummesesgarantia;
    }

    /**
     * Set numcostocompra
     *
     * @param integer $numcostocompra
     * @return Tomasinventariosregistros
     */
    public function setNumcostocompra($numcostocompra)
    {
        $this->numcostocompra = $numcostocompra;

        return $this;
    }

    /**
     * Get numcostocompra
     *
     * @return integer 
     */
    public function getNumcostocompra()
    {
        return $this->numcostocompra;
    }

    /**
     * Set numcostoestandar
     *
     * @param integer $numcostoestandar
     * @return Tomasinventariosregistros
     */
    public function setNumcostoestandar($numcostoestandar)
    {
        $this->numcostoestandar = $numcostoestandar;

        return $this;
    }

    /**
     * Get numcostoestandar
     *
     * @return integer 
     */
    public function getNumcostoestandar()
    {
        return $this->numcostoestandar;
    }

    /**
     * Set numcostopromedio
     *
     * @param integer $numcostopromedio
     * @return Tomasinventariosregistros
     */
    public function setNumcostopromedio($numcostopromedio)
    {
        $this->numcostopromedio = $numcostopromedio;

        return $this;
    }

    /**
     * Get numcostopromedio
     *
     * @return integer 
     */
    public function getNumcostopromedio()
    {
        return $this->numcostopromedio;
    }

    /**
     * Set numcostopeps
     *
     * @param integer $numcostopeps
     * @return Tomasinventariosregistros
     */
    public function setNumcostopeps($numcostopeps)
    {
        $this->numcostopeps = $numcostopeps;

        return $this;
    }

    /**
     * Get numcostopeps
     *
     * @return integer 
     */
    public function getNumcostopeps()
    {
        return $this->numcostopeps;
    }

    /**
     * Set numcostoueps
     *
     * @param integer $numcostoueps
     * @return Tomasinventariosregistros
     */
    public function setNumcostoueps($numcostoueps)
    {
        $this->numcostoueps = $numcostoueps;

        return $this;
    }

    /**
     * Get numcostoueps
     *
     * @return integer 
     */
    public function getNumcostoueps()
    {
        return $this->numcostoueps;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Tomasinventariosregistros
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
}
