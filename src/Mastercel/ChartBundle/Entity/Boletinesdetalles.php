<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boletinesdetalles
 *
 * @ORM\Table(name="BoletinesDetalles", indexes={@ORM\Index(name="Indice_1", columns={"NumPrioridad", "NumCodigoSeleccion"}), @ORM\Index(name="Indice_2", columns={"NumCodigoSeleccion", "NumPrioridad"})})
 * @ORM\Entity
 */
class Boletinesdetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumBoletin_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numboletinId = '0';

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
     * @ORM\Column(name="NumAumentoRebaja_id", type="integer", nullable=true)
     */
    private $numaumentorebajaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrioridad", type="integer", nullable=true)
     */
    private $numprioridad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumCantidadOfertar", type="float", precision=53, scale=0, nullable=true)
     */
    private $numcantidadofertar = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioMinimo", type="integer", nullable=true)
     */
    private $numpreciominimo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPrecioMaximo", type="integer", nullable=true)
     */
    private $numpreciomaximo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCliente", type="integer", nullable=true)
     */
    private $numtipocliente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrArticulo_ky", type="string", length=20, nullable=true)
     */
    private $strarticuloKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrModelo_ky", type="string", length=20, nullable=true)
     */
    private $strmodeloKy;

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
     * @ORM\Column(name="NumFamilia_id", type="integer", nullable=true)
     */
    private $numfamiliaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumMarca_id", type="integer", nullable=true)
     */
    private $nummarcaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTemporada_id", type="integer", nullable=true)
     */
    private $numtemporadaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCoordinado_id", type="integer", nullable=true)
     */
    private $numcoordinadoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumProveedor_id", type="integer", nullable=true)
     */
    private $numproveedorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColor_id", type="integer", nullable=true)
     */
    private $numcolorId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLargo_id", type="integer", nullable=true)
     */
    private $numlargoId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTalla_id", type="integer", nullable=true)
     */
    private $numtallaId = '0';

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
     * @var integer
     *
     * @ORM\Column(name="NumCodigoSeleccion", type="integer", nullable=true)
     */
    private $numcodigoseleccion = '0';



    /**
     * Set numboletinId
     *
     * @param integer $numboletinId
     * @return Boletinesdetalles
     */
    public function setNumboletinId($numboletinId)
    {
        $this->numboletinId = $numboletinId;

        return $this;
    }

    /**
     * Get numboletinId
     *
     * @return integer 
     */
    public function getNumboletinId()
    {
        return $this->numboletinId;
    }

    /**
     * Set numconsecutivoId
     *
     * @param integer $numconsecutivoId
     * @return Boletinesdetalles
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
     * Set numaumentorebajaId
     *
     * @param integer $numaumentorebajaId
     * @return Boletinesdetalles
     */
    public function setNumaumentorebajaId($numaumentorebajaId)
    {
        $this->numaumentorebajaId = $numaumentorebajaId;

        return $this;
    }

    /**
     * Get numaumentorebajaId
     *
     * @return integer 
     */
    public function getNumaumentorebajaId()
    {
        return $this->numaumentorebajaId;
    }

    /**
     * Set numprioridad
     *
     * @param integer $numprioridad
     * @return Boletinesdetalles
     */
    public function setNumprioridad($numprioridad)
    {
        $this->numprioridad = $numprioridad;

        return $this;
    }

    /**
     * Get numprioridad
     *
     * @return integer 
     */
    public function getNumprioridad()
    {
        return $this->numprioridad;
    }

    /**
     * Set numcantidadofertar
     *
     * @param float $numcantidadofertar
     * @return Boletinesdetalles
     */
    public function setNumcantidadofertar($numcantidadofertar)
    {
        $this->numcantidadofertar = $numcantidadofertar;

        return $this;
    }

    /**
     * Get numcantidadofertar
     *
     * @return float 
     */
    public function getNumcantidadofertar()
    {
        return $this->numcantidadofertar;
    }

    /**
     * Set numpreciominimo
     *
     * @param integer $numpreciominimo
     * @return Boletinesdetalles
     */
    public function setNumpreciominimo($numpreciominimo)
    {
        $this->numpreciominimo = $numpreciominimo;

        return $this;
    }

    /**
     * Get numpreciominimo
     *
     * @return integer 
     */
    public function getNumpreciominimo()
    {
        return $this->numpreciominimo;
    }

    /**
     * Set numpreciomaximo
     *
     * @param integer $numpreciomaximo
     * @return Boletinesdetalles
     */
    public function setNumpreciomaximo($numpreciomaximo)
    {
        $this->numpreciomaximo = $numpreciomaximo;

        return $this;
    }

    /**
     * Get numpreciomaximo
     *
     * @return integer 
     */
    public function getNumpreciomaximo()
    {
        return $this->numpreciomaximo;
    }

    /**
     * Set numtipocliente
     *
     * @param integer $numtipocliente
     * @return Boletinesdetalles
     */
    public function setNumtipocliente($numtipocliente)
    {
        $this->numtipocliente = $numtipocliente;

        return $this;
    }

    /**
     * Get numtipocliente
     *
     * @return integer 
     */
    public function getNumtipocliente()
    {
        return $this->numtipocliente;
    }

    /**
     * Set strarticuloKy
     *
     * @param string $strarticuloKy
     * @return Boletinesdetalles
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
     * Set strmodeloKy
     *
     * @param string $strmodeloKy
     * @return Boletinesdetalles
     */
    public function setStrmodeloKy($strmodeloKy)
    {
        $this->strmodeloKy = $strmodeloKy;

        return $this;
    }

    /**
     * Get strmodeloKy
     *
     * @return string 
     */
    public function getStrmodeloKy()
    {
        return $this->strmodeloKy;
    }

    /**
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Boletinesdetalles
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
     * @return Boletinesdetalles
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
     * Set numfamiliaId
     *
     * @param integer $numfamiliaId
     * @return Boletinesdetalles
     */
    public function setNumfamiliaId($numfamiliaId)
    {
        $this->numfamiliaId = $numfamiliaId;

        return $this;
    }

    /**
     * Get numfamiliaId
     *
     * @return integer 
     */
    public function getNumfamiliaId()
    {
        return $this->numfamiliaId;
    }

    /**
     * Set nummarcaId
     *
     * @param integer $nummarcaId
     * @return Boletinesdetalles
     */
    public function setNummarcaId($nummarcaId)
    {
        $this->nummarcaId = $nummarcaId;

        return $this;
    }

    /**
     * Get nummarcaId
     *
     * @return integer 
     */
    public function getNummarcaId()
    {
        return $this->nummarcaId;
    }

    /**
     * Set numtemporadaId
     *
     * @param integer $numtemporadaId
     * @return Boletinesdetalles
     */
    public function setNumtemporadaId($numtemporadaId)
    {
        $this->numtemporadaId = $numtemporadaId;

        return $this;
    }

    /**
     * Get numtemporadaId
     *
     * @return integer 
     */
    public function getNumtemporadaId()
    {
        return $this->numtemporadaId;
    }

    /**
     * Set numcoordinadoId
     *
     * @param integer $numcoordinadoId
     * @return Boletinesdetalles
     */
    public function setNumcoordinadoId($numcoordinadoId)
    {
        $this->numcoordinadoId = $numcoordinadoId;

        return $this;
    }

    /**
     * Get numcoordinadoId
     *
     * @return integer 
     */
    public function getNumcoordinadoId()
    {
        return $this->numcoordinadoId;
    }

    /**
     * Set numproveedorId
     *
     * @param integer $numproveedorId
     * @return Boletinesdetalles
     */
    public function setNumproveedorId($numproveedorId)
    {
        $this->numproveedorId = $numproveedorId;

        return $this;
    }

    /**
     * Get numproveedorId
     *
     * @return integer 
     */
    public function getNumproveedorId()
    {
        return $this->numproveedorId;
    }

    /**
     * Set numcolorId
     *
     * @param integer $numcolorId
     * @return Boletinesdetalles
     */
    public function setNumcolorId($numcolorId)
    {
        $this->numcolorId = $numcolorId;

        return $this;
    }

    /**
     * Get numcolorId
     *
     * @return integer 
     */
    public function getNumcolorId()
    {
        return $this->numcolorId;
    }

    /**
     * Set numlargoId
     *
     * @param integer $numlargoId
     * @return Boletinesdetalles
     */
    public function setNumlargoId($numlargoId)
    {
        $this->numlargoId = $numlargoId;

        return $this;
    }

    /**
     * Get numlargoId
     *
     * @return integer 
     */
    public function getNumlargoId()
    {
        return $this->numlargoId;
    }

    /**
     * Set numtallaId
     *
     * @param integer $numtallaId
     * @return Boletinesdetalles
     */
    public function setNumtallaId($numtallaId)
    {
        $this->numtallaId = $numtallaId;

        return $this;
    }

    /**
     * Get numtallaId
     *
     * @return integer 
     */
    public function getNumtallaId()
    {
        return $this->numtallaId;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Boletinesdetalles
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
     * @return Boletinesdetalles
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
     * @return Boletinesdetalles
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
     * @return Boletinesdetalles
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
     * Set numcodigoseleccion
     *
     * @param integer $numcodigoseleccion
     * @return Boletinesdetalles
     */
    public function setNumcodigoseleccion($numcodigoseleccion)
    {
        $this->numcodigoseleccion = $numcodigoseleccion;

        return $this;
    }

    /**
     * Get numcodigoseleccion
     *
     * @return integer 
     */
    public function getNumcodigoseleccion()
    {
        return $this->numcodigoseleccion;
    }
}
