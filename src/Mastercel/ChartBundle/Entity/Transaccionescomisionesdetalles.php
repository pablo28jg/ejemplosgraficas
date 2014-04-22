<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaccionescomisionesdetalles
 *
 * @ORM\Table(name="TransaccionesComisionesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumAlmacen_id"}), @ORM\Index(name="Indice_10", columns={"NumAlmacenComision_id"}), @ORM\Index(name="Indice_12", columns={"NumTransaccionVenta_id", "NumAlmacenVenta_id", "NumTipoTransaccionVenta", "NumConsecutivoVenta_id", "NumTransaccionRegistroVenta_id"}), @ORM\Index(name="Indice_13", columns={"NumTransaccionPago_id", "NumAlmacenPago_id", "NumTipoTransaccionPago"}), @ORM\Index(name="Indice_14", columns={"NumTipoEstado"}), @ORM\Index(name="Indice_2", columns={"NumGrupoComision_id"}), @ORM\Index(name="Indice_3", columns={"StrArticulo_ky"}), @ORM\Index(name="Indice_4", columns={"StrSerie_ky"}), @ORM\Index(name="Indice_5", columns={"StrArticuloRelacionado_ky"}), @ORM\Index(name="Indice_6", columns={"StrSerieRelacionado_ky"}), @ORM\Index(name="Indice_7", columns={"StrTelefono"}), @ORM\Index(name="Indice_8", columns={"NumCliente_id"}), @ORM\Index(name="Indice_9", columns={"NumVendedor_id"})})
 * @ORM\Entity
 */
class Transaccionescomisionesdetalles
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
     * @ORM\Column(name="NumConsecutivo_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numconsecutivoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumGrupoComision_id", type="integer", nullable=true)
     */
    private $numgrupocomisionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerie_ky", type="string", length=20, nullable=true)
     */
    private $strserieKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticuloRelacionado_ky", type="string", length=20, nullable=true)
     */
    private $strarticulorelacionadoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrSerieRelacionado_ky", type="string", length=20, nullable=true)
     */
    private $strserierelacionadoKy;

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
     * @ORM\Column(name="NumCaracteristica_id", type="integer", nullable=true)
     */
    private $numcaracteristicaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrReferencia", type="string", length=20, nullable=true)
     */
    private $strreferencia;

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
     * @ORM\Column(name="NumAlmacenComision_id", type="integer", nullable=true)
     */
    private $numalmacencomisionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumComisionVendedor", type="integer", nullable=true)
     */
    private $numcomisionvendedor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioVenta", type="integer", nullable=true)
     */
    private $numprecioventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumClasificacion_id", type="integer", nullable=true)
     */
    private $numclasificacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionVenta_id", type="integer", nullable=true)
     */
    private $numtransaccionventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacenVenta_id", type="integer", nullable=true)
     */
    private $numalmacenventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoTransaccionVenta", type="integer", nullable=true)
     */
    private $numtipotransaccionventa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumConsecutivoVenta_id", type="integer", nullable=true)
     */
    private $numconsecutivoventaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTransaccionRegistroVenta_id", type="integer", nullable=true)
     */
    private $numtransaccionregistroventaId = '0';

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
     * @ORM\Column(name="StrMonedero_ky", type="string", length=20, nullable=true)
     */
    private $strmonederoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstado", type="integer", nullable=true)
     */
    private $numtipoestado = '0';



    /**
     * Set numtransaccionId
     *
     * @param integer $numtransaccionId
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * Set numgrupocomisionId
     *
     * @param integer $numgrupocomisionId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumgrupocomisionId($numgrupocomisionId)
    {
        $this->numgrupocomisionId = $numgrupocomisionId;

        return $this;
    }

    /**
     * Get numgrupocomisionId
     *
     * @return integer 
     */
    public function getNumgrupocomisionId()
    {
        return $this->numgrupocomisionId;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Transaccionescomisionesdetalles
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
     * Set strserieKy
     *
     * @param string $strserieKy
     * @return Transaccionescomisionesdetalles
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
     * Set strarticulorelacionadoKy
     *
     * @param string $strarticulorelacionadoKy
     * @return Transaccionescomisionesdetalles
     */
    public function setStrarticulorelacionadoKy($strarticulorelacionadoKy)
    {
        $this->strarticulorelacionadoKy = $strarticulorelacionadoKy;

        return $this;
    }

    /**
     * Get strarticulorelacionadoKy
     *
     * @return string 
     */
    public function getStrarticulorelacionadoKy()
    {
        return $this->strarticulorelacionadoKy;
    }

    /**
     * Set strserierelacionadoKy
     *
     * @param string $strserierelacionadoKy
     * @return Transaccionescomisionesdetalles
     */
    public function setStrserierelacionadoKy($strserierelacionadoKy)
    {
        $this->strserierelacionadoKy = $strserierelacionadoKy;

        return $this;
    }

    /**
     * Get strserierelacionadoKy
     *
     * @return string 
     */
    public function getStrserierelacionadoKy()
    {
        return $this->strserierelacionadoKy;
    }

    /**
     * Set strtelefono
     *
     * @param string $strtelefono
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * Set numcaracteristicaId
     *
     * @param integer $numcaracteristicaId
     * @return Transaccionescomisionesdetalles
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
     * Set strreferencia
     *
     * @param string $strreferencia
     * @return Transaccionescomisionesdetalles
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
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * Set numalmacencomisionId
     *
     * @param integer $numalmacencomisionId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumalmacencomisionId($numalmacencomisionId)
    {
        $this->numalmacencomisionId = $numalmacencomisionId;

        return $this;
    }

    /**
     * Get numalmacencomisionId
     *
     * @return integer 
     */
    public function getNumalmacencomisionId()
    {
        return $this->numalmacencomisionId;
    }

    /**
     * Set numcomisionvendedor
     *
     * @param integer $numcomisionvendedor
     * @return Transaccionescomisionesdetalles
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
     * Set numprecioventa
     *
     * @param integer $numprecioventa
     * @return Transaccionescomisionesdetalles
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
     * Set numclasificacionId
     *
     * @param integer $numclasificacionId
     * @return Transaccionescomisionesdetalles
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
     * Set numtransaccionventaId
     *
     * @param integer $numtransaccionventaId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumtransaccionventaId($numtransaccionventaId)
    {
        $this->numtransaccionventaId = $numtransaccionventaId;

        return $this;
    }

    /**
     * Get numtransaccionventaId
     *
     * @return integer 
     */
    public function getNumtransaccionventaId()
    {
        return $this->numtransaccionventaId;
    }

    /**
     * Set numalmacenventaId
     *
     * @param integer $numalmacenventaId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumalmacenventaId($numalmacenventaId)
    {
        $this->numalmacenventaId = $numalmacenventaId;

        return $this;
    }

    /**
     * Get numalmacenventaId
     *
     * @return integer 
     */
    public function getNumalmacenventaId()
    {
        return $this->numalmacenventaId;
    }

    /**
     * Set numtipotransaccionventa
     *
     * @param integer $numtipotransaccionventa
     * @return Transaccionescomisionesdetalles
     */
    public function setNumtipotransaccionventa($numtipotransaccionventa)
    {
        $this->numtipotransaccionventa = $numtipotransaccionventa;

        return $this;
    }

    /**
     * Get numtipotransaccionventa
     *
     * @return integer 
     */
    public function getNumtipotransaccionventa()
    {
        return $this->numtipotransaccionventa;
    }

    /**
     * Set numconsecutivoventaId
     *
     * @param integer $numconsecutivoventaId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumconsecutivoventaId($numconsecutivoventaId)
    {
        $this->numconsecutivoventaId = $numconsecutivoventaId;

        return $this;
    }

    /**
     * Get numconsecutivoventaId
     *
     * @return integer 
     */
    public function getNumconsecutivoventaId()
    {
        return $this->numconsecutivoventaId;
    }

    /**
     * Set numtransaccionregistroventaId
     *
     * @param integer $numtransaccionregistroventaId
     * @return Transaccionescomisionesdetalles
     */
    public function setNumtransaccionregistroventaId($numtransaccionregistroventaId)
    {
        $this->numtransaccionregistroventaId = $numtransaccionregistroventaId;

        return $this;
    }

    /**
     * Get numtransaccionregistroventaId
     *
     * @return integer 
     */
    public function getNumtransaccionregistroventaId()
    {
        return $this->numtransaccionregistroventaId;
    }

    /**
     * Set numtransaccionpagoId
     *
     * @param integer $numtransaccionpagoId
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * @return Transaccionescomisionesdetalles
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
     * Set strmonederoKy
     *
     * @param string $strmonederoKy
     * @return Transaccionescomisionesdetalles
     */
    public function setStrmonederoKy($strmonederoKy)
    {
        $this->strmonederoKy = $strmonederoKy;

        return $this;
    }

    /**
     * Get strmonederoKy
     *
     * @return string 
     */
    public function getStrmonederoKy()
    {
        return $this->strmonederoKy;
    }

    /**
     * Set numtipoestado
     *
     * @param integer $numtipoestado
     * @return Transaccionescomisionesdetalles
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
