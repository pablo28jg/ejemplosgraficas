<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telcelcomisiones
 *
 * @ORM\Table(name="TelcelComisiones", indexes={@ORM\Index(name="Indice_1", columns={"StrSerieIMEI_ky", "NumClasificacion_id"}), @ORM\Index(name="Indice_10", columns={"StrArticuloICCID_ky"}), @ORM\Index(name="Indice_2", columns={"StrSerieICCID_ky", "NumClasificacion_id"}), @ORM\Index(name="Indice_3", columns={"StrTelefono", "NumClasificacion_id"}), @ORM\Index(name="Indice_4", columns={"NumTipoEstadoComision", "NumClasificacion_id"}), @ORM\Index(name="Indice_5", columns={"DteActualizacion"}), @ORM\Index(name="Indice_6", columns={"NumTransaccionPago_id", "NumAlmacenPago_id", "NumTipoTransaccionPago"}), @ORM\Index(name="Indice_7", columns={"NumCliente_id", "NumTipoEstadoComision"}), @ORM\Index(name="Indice_8", columns={"NumVendedor_id", "NumTipoEstadoComision"}), @ORM\Index(name="Indice_9", columns={"StrArticuloIMEI_ky"})})
 * @ORM\Entity
 */
class Telcelcomisiones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccion_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionId = '0';

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
     * @ORM\Column(name="NumTipoTransaccion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtipotransaccion = '0';

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
     * @ORM\Column(name="NumTransaccionRegistro_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numtransaccionregistroId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieIMEI_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strserieimeiKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieICCID_ky", type="string", length=20, nullable=true)
     */
    private $strserieiccidKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloIMEI_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloimeiKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloICCID_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloiccidKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTelefono", type="string", length=20, nullable=true)
     */
    private $strtelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="StrPlanTarifario", type="string", length=20, nullable=true)
     */
    private $strplantarifario;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_id", type="integer", nullable=true)
     */
    private $numvendedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionEmpresa", type="integer", nullable=true)
     */
    private $numcomisionempresa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionVendedor", type="integer", nullable=true)
     */
    private $numcomisionvendedor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=10, nullable=true)
     */
    private $strreferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteTransaccion", type="datetime", nullable=true)
     */
    private $dtetransaccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteActivacion", type="datetime", nullable=true)
     */
    private $dteactivacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteCancelacion", type="datetime", nullable=true)
     */
    private $dtecancelacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteEntregaDocumento", type="datetime", nullable=true)
     */
    private $dteentregadocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionPago_id", type="integer", nullable=true)
     */
    private $numtransaccionpagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenPago_id", type="integer", nullable=true)
     */
    private $numalmacenpagoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionPago", type="integer", nullable=true)
     */
    private $numtipotransaccionpago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrTransaccionPago", type="string", length=10, nullable=true)
     */
    private $strtransaccionpago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtePago", type="datetime", nullable=true)
     */
    private $dtepago;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_id", type="integer", nullable=true)
     */
    private $numclasificacionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrObservaciones", type="string", length=30, nullable=true)
     */
    private $strobservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstadoComision", type="integer", nullable=true)
     */
    private $numtipoestadocomision = '0';

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
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Telcelcomisiones
     */
    public function setNumtransaccionId($numtransaccionId)
    {
        $this->numtransaccionId = $numtransaccionId;

        return $this;
    }

    /**
     * Get numtransaccionId
     *
     * @return integer 
     */
    public function getNumtransaccionId()
    {
        return $this->numtransaccionId;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Telcelcomisiones
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
     * Set numtipotransaccion
     *
     * @param integer $numtipotransaccion
     * @return Telcelcomisiones
     */
    public function setNumtipotransaccion($numtipotransaccion)
    {
        $this->numtipotransaccion = $numtipotransaccion;

        return $this;
    }

    /**
     * Get numtipotransaccion
     *
     * @return integer 
     */
    public function getNumtipotransaccion()
    {
        return $this->numtipotransaccion;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Telcelcomisiones
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
     * @return Telcelcomisiones
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
     * Set strserieimeiKy
     *
     * @param string $strserieimeiKy
     * @return Telcelcomisiones
     */
    public function setStrserieimeiKy($strserieimeiKy)
    {
        $this->strserieimeiKy = $strserieimeiKy;

        return $this;
    }

    /**
     * Get strserieimeiKy
     *
     * @return string 
     */
    public function getStrserieimeiKy()
    {
        return $this->strserieimeiKy;
    }

    /**
     * Set strserieiccidKy
     *
     * @param string $strserieiccidKy
     * @return Telcelcomisiones
     */
    public function setStrserieiccidKy($strserieiccidKy)
    {
        $this->strserieiccidKy = $strserieiccidKy;

        return $this;
    }

    /**
     * Get strserieiccidKy
     *
     * @return string 
     */
    public function getStrserieiccidKy()
    {
        return $this->strserieiccidKy;
    }

    /**
     * Set strarticuloimeiKy
     *
     * @param string $strarticuloimeiKy
     * @return Telcelcomisiones
     */
    public function setStrarticuloimeiKy($strarticuloimeiKy)
    {
        $this->strarticuloimeiKy = $strarticuloimeiKy;

        return $this;
    }

    /**
     * Get strarticuloimeiKy
     *
     * @return string 
     */
    public function getStrarticuloimeiKy()
    {
        return $this->strarticuloimeiKy;
    }

    /**
     * Set strarticuloiccidKy
     *
     * @param string $strarticuloiccidKy
     * @return Telcelcomisiones
     */
    public function setStrarticuloiccidKy($strarticuloiccidKy)
    {
        $this->strarticuloiccidKy = $strarticuloiccidKy;

        return $this;
    }

    /**
     * Get strarticuloiccidKy
     *
     * @return string 
     */
    public function getStrarticuloiccidKy()
    {
        return $this->strarticuloiccidKy;
    }

    /**
     * Set strtelefono
     *
     * @param string $strtelefono
     * @return Telcelcomisiones
     */
    public function setStrtelefono($strtelefono)
    {
        $this->strtelefono = $strtelefono;

        return $this;
    }

    /**
     * Get strtelefono
     *
     * @return string 
     */
    public function getStrtelefono()
    {
        return $this->strtelefono;
    }

    /**
     * Set strplantarifario
     *
     * @param string $strplantarifario
     * @return Telcelcomisiones
     */
    public function setStrplantarifario($strplantarifario)
    {
        $this->strplantarifario = $strplantarifario;

        return $this;
    }

    /**
     * Get strplantarifario
     *
     * @return string 
     */
    public function getStrplantarifario()
    {
        return $this->strplantarifario;
    }

    /**
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Telcelcomisiones
     */
    public function setNumclienteId($numclienteId)
    {
        $this->numclienteId = $numclienteId;

        return $this;
    }

    /**
     * Get numclienteId
     *
     * @return integer 
     */
    public function getNumclienteId()
    {
        return $this->numclienteId;
    }

    /**
     * Set numvendedorId
     *
     * @param integer $numvendedorId
     * @return Telcelcomisiones
     */
    public function setNumvendedorId($numvendedorId)
    {
        $this->numvendedorId = $numvendedorId;

        return $this;
    }

    /**
     * Get numvendedorId
     *
     * @return integer 
     */
    public function getNumvendedorId()
    {
        return $this->numvendedorId;
    }

    /**
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Telcelcomisiones
     */
    public function setNumprecioventa($numprecioventa)
    {
        $this->numprecioventa = $numprecioventa;

        return $this;
    }

    /**
     * Get numprecioventa
     *
     * @return integer 
     */
    public function getNumprecioventa()
    {
        return $this->numprecioventa;
    }

    /**
     * Set numcomisionempresa
     *
     * @param integer $numcomisionempresa
     * @return Telcelcomisiones
     */
    public function setNumcomisionempresa($numcomisionempresa)
    {
        $this->numcomisionempresa = $numcomisionempresa;

        return $this;
    }

    /**
     * Get numcomisionempresa
     *
     * @return integer 
     */
    public function getNumcomisionempresa()
    {
        return $this->numcomisionempresa;
    }

    /**
     * Set numcomisionvendedor
     *
     * @param integer $numcomisionvendedor
     * @return Telcelcomisiones
     */
    public function setNumcomisionvendedor($numcomisionvendedor)
    {
        $this->numcomisionvendedor = $numcomisionvendedor;

        return $this;
    }

    /**
     * Get numcomisionvendedor
     *
     * @return integer 
     */
    public function getNumcomisionvendedor()
    {
        return $this->numcomisionvendedor;
    }

    /**
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Telcelcomisiones
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
     * Set dtetransaccion
     *
     * @param \DateTime $dtetransaccion
     * @return Telcelcomisiones
     */
    public function setDtetransaccion($dtetransaccion)
    {
        $this->dtetransaccion = $dtetransaccion;

        return $this;
    }

    /**
     * Get dtetransaccion
     *
     * @return \DateTime 
     */
    public function getDtetransaccion()
    {
        return $this->dtetransaccion;
    }

    /**
     * Set dteactivacion
     *
     * @param \DateTime $dteactivacion
     * @return Telcelcomisiones
     */
    public function setDteactivacion($dteactivacion)
    {
        $this->dteactivacion = $dteactivacion;

        return $this;
    }

    /**
     * Get dteactivacion
     *
     * @return \DateTime 
     */
    public function getDteactivacion()
    {
        return $this->dteactivacion;
    }

    /**
     * Set dtecancelacion
     *
     * @param \DateTime $dtecancelacion
     * @return Telcelcomisiones
     */
    public function setDtecancelacion($dtecancelacion)
    {
        $this->dtecancelacion = $dtecancelacion;

        return $this;
    }

    /**
     * Get dtecancelacion
     *
     * @return \DateTime 
     */
    public function getDtecancelacion()
    {
        return $this->dtecancelacion;
    }

    /**
     * Set dteentregadocumento
     *
     * @param \DateTime $dteentregadocumento
     * @return Telcelcomisiones
     */
    public function setDteentregadocumento($dteentregadocumento)
    {
        $this->dteentregadocumento = $dteentregadocumento;

        return $this;
    }

    /**
     * Get dteentregadocumento
     *
     * @return \DateTime 
     */
    public function getDteentregadocumento()
    {
        return $this->dteentregadocumento;
    }

    /**
     * Set numtransaccionpagoId
     *
     * @param integer $numtransaccionpagoId
     * @return Telcelcomisiones
     */
    public function setNumtransaccionpagoId($numtransaccionpagoId)
    {
        $this->numtransaccionpagoId = $numtransaccionpagoId;

        return $this;
    }

    /**
     * Get numtransaccionpagoId
     *
     * @return integer 
     */
    public function getNumtransaccionpagoId()
    {
        return $this->numtransaccionpagoId;
    }

    /**
     * Set numalmacenpagoId
     *
     * @param integer $numalmacenpagoId
     * @return Telcelcomisiones
     */
    public function setNumalmacenpagoId($numalmacenpagoId)
    {
        $this->numalmacenpagoId = $numalmacenpagoId;

        return $this;
    }

    /**
     * Get numalmacenpagoId
     *
     * @return integer 
     */
    public function getNumalmacenpagoId()
    {
        return $this->numalmacenpagoId;
    }

    /**
     * Set numtipotransaccionpago
     *
     * @param integer $numtipotransaccionpago
     * @return Telcelcomisiones
     */
    public function setNumtipotransaccionpago($numtipotransaccionpago)
    {
        $this->numtipotransaccionpago = $numtipotransaccionpago;

        return $this;
    }

    /**
     * Get numtipotransaccionpago
     *
     * @return integer 
     */
    public function getNumtipotransaccionpago()
    {
        return $this->numtipotransaccionpago;
    }

    /**
     * Set strtransaccionpago
     *
     * @param string $strtransaccionpago
     * @return Telcelcomisiones
     */
    public function setStrtransaccionpago($strtransaccionpago)
    {
        $this->strtransaccionpago = $strtransaccionpago;

        return $this;
    }

    /**
     * Get strtransaccionpago
     *
     * @return string 
     */
    public function getStrtransaccionpago()
    {
        return $this->strtransaccionpago;
    }

    /**
     * Set dtepago
     *
     * @param \DateTime $dtepago
     * @return Telcelcomisiones
     */
    public function setDtepago($dtepago)
    {
        $this->dtepago = $dtepago;

        return $this;
    }

    /**
     * Get dtepago
     *
     * @return \DateTime 
     */
    public function getDtepago()
    {
        return $this->dtepago;
    }

    /**
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Telcelcomisiones
     */
    public function setNumcaracteristicaId($numcaracteristicaId)
    {
        $this->numcaracteristicaId = $numcaracteristicaId;

        return $this;
    }

    /**
     * Get numcaracteristicaId
     *
     * @return integer 
     */
    public function getNumcaracteristicaId()
    {
        return $this->numcaracteristicaId;
    }

    /**
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Telcelcomisiones
     */
    public function setNumclasificacionId($numclasificacionId)
    {
        $this->numclasificacionId = $numclasificacionId;

        return $this;
    }

    /**
     * Get numclasificacionId
     *
     * @return integer 
     */
    public function getNumclasificacionId()
    {
        return $this->numclasificacionId;
    }

    /**
     * Set strobservaciones
     *
     * @param string $strobservaciones
     * @return Telcelcomisiones
     */
    public function setStrobservaciones($strobservaciones)
    {
        $this->strobservaciones = $strobservaciones;

        return $this;
    }

    /**
     * Get strobservaciones
     *
     * @return string 
     */
    public function getStrobservaciones()
    {
        return $this->strobservaciones;
    }

    /**
     * Set numtipoestadocomision
     *
     * @param integer $numtipoestadocomision
     * @return Telcelcomisiones
     */
    public function setNumtipoestadocomision($numtipoestadocomision)
    {
        $this->numtipoestadocomision = $numtipoestadocomision;

        return $this;
    }

    /**
     * Get numtipoestadocomision
     *
     * @return integer 
     */
    public function getNumtipoestadocomision()
    {
        return $this->numtipoestadocomision;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Telcelcomisiones
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
     * @return Telcelcomisiones
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
     * @return Telcelcomisiones
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
     * @return Telcelcomisiones
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
}
