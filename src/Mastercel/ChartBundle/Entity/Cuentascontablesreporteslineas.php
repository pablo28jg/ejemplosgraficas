<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablesreporteslineas
 *
 * @ORM\Table(name="CuentasContablesReportesLineas", indexes={@ORM\Index(name="Indice_1", columns={"NumReporte_id", "NumOrden_id"})})
 * @ORM\Entity
 */
class Cuentascontablesreporteslineas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumLinea_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numlineaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumReporte_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreporteId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumJerarquia_id", type="integer", nullable=true)
     */
    private $numjerarquiaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrden_id", type="integer", nullable=true)
     */
    private $numordenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumNivel_id", type="integer", nullable=true)
     */
    private $numnivelId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogUltimoNivel", type="boolean", nullable=true)
     */
    private $logultimonivel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrClasificacion_ky", type="string", length=20, nullable=true)
     */
    private $strclasificacionKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=100, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreLetra", type="string", length=30, nullable=true)
     */
    private $strnombreletra;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoEstiloLetra", type="integer", nullable=true)
     */
    private $numtipoestiloletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTamanoLetra", type="integer", nullable=true)
     */
    private $numtamanoletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumColorLetra", type="integer", nullable=true)
     */
    private $numcolorletra = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAlineacion", type="integer", nullable=true)
     */
    private $numtipoalineacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImprimir", type="boolean", nullable=true)
     */
    private $logimprimir = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogInsertarLineaBlanco", type="boolean", nullable=true)
     */
    private $loginsertarlineablanco = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoDato", type="integer", nullable=true)
     */
    private $numtipodato = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaInicial_ky", type="string", length=20, nullable=true)
     */
    private $strcuentainicialKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuentaFinal_ky", type="string", length=20, nullable=true)
     */
    private $strcuentafinalKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoOperacion", type="integer", nullable=true)
     */
    private $numtipooperacion = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogInvertirValor", type="boolean", nullable=true)
     */
    private $loginvertirvalor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_1", type="boolean", nullable=true)
     */
    private $logacumularen1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_2", type="boolean", nullable=true)
     */
    private $logacumularen2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_3", type="boolean", nullable=true)
     */
    private $logacumularen3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_4", type="boolean", nullable=true)
     */
    private $logacumularen4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_5", type="boolean", nullable=true)
     */
    private $logacumularen5 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogAcumularEn_6", type="boolean", nullable=true)
     */
    private $logacumularen6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAcumuladorTomar", type="integer", nullable=true)
     */
    private $numacumuladortomar = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LogImprimerValoresCero", type="boolean", nullable=true)
     */
    private $logimprimervalorescero = '0';



    /**
     * Set numlineaId
     *
     * @param integer $numlineaId
     * @return Cuentascontablesreporteslineas
     */
    public function setNumlineaId($numlineaId)
    {
        $this->numlineaId = $numlineaId;

        return $this;
    }

    /**
     * Get numlineaId
     *
     * @return integer 
     */
    public function getNumlineaId()
    {
        return $this->numlineaId;
    }

    /**
     * Set numreporteId
     *
     * @param integer $numreporteId
     * @return Cuentascontablesreporteslineas
     */
    public function setNumreporteId($numreporteId)
    {
        $this->numreporteId = $numreporteId;

        return $this;
    }

    /**
     * Get numreporteId
     *
     * @return integer 
     */
    public function getNumreporteId()
    {
        return $this->numreporteId;
    }

    /**
     * Set numjerarquiaId
     *
     * @param integer $numjerarquiaId
     * @return Cuentascontablesreporteslineas
     */
    public function setNumjerarquiaId($numjerarquiaId)
    {
        $this->numjerarquiaId = $numjerarquiaId;

        return $this;
    }

    /**
     * Get numjerarquiaId
     *
     * @return integer 
     */
    public function getNumjerarquiaId()
    {
        return $this->numjerarquiaId;
    }

    /**
     * Set numordenId
     *
     * @param integer $numordenId
     * @return Cuentascontablesreporteslineas
     */
    public function setNumordenId($numordenId)
    {
        $this->numordenId = $numordenId;

        return $this;
    }

    /**
     * Get numordenId
     *
     * @return integer 
     */
    public function getNumordenId()
    {
        return $this->numordenId;
    }

    /**
     * Set numnivelId
     *
     * @param integer $numnivelId
     * @return Cuentascontablesreporteslineas
     */
    public function setNumnivelId($numnivelId)
    {
        $this->numnivelId = $numnivelId;

        return $this;
    }

    /**
     * Get numnivelId
     *
     * @return integer 
     */
    public function getNumnivelId()
    {
        return $this->numnivelId;
    }

    /**
     * Set logultimonivel
     *
     * @param boolean $logultimonivel
     * @return Cuentascontablesreporteslineas
     */
    public function setLogultimonivel($logultimonivel)
    {
        $this->logultimonivel = $logultimonivel;

        return $this;
    }

    /**
     * Get logultimonivel
     *
     * @return boolean 
     */
    public function getLogultimonivel()
    {
        return $this->logultimonivel;
    }

    /**
     * Set strclasificacionKy
     *
     * @param string $strclasificacionKy
     * @return Cuentascontablesreporteslineas
     */
    public function setStrclasificacionKy($strclasificacionKy)
    {
        $this->strclasificacionKy = $strclasificacionKy;

        return $this;
    }

    /**
     * Get strclasificacionKy
     *
     * @return string 
     */
    public function getStrclasificacionKy()
    {
        return $this->strclasificacionKy;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Cuentascontablesreporteslineas
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
     * Set strnombreletra
     *
     * @param string $strnombreletra
     * @return Cuentascontablesreporteslineas
     */
    public function setStrnombreletra($strnombreletra)
    {
        $this->strnombreletra = $strnombreletra;

        return $this;
    }

    /**
     * Get strnombreletra
     *
     * @return string 
     */
    public function getStrnombreletra()
    {
        return $this->strnombreletra;
    }

    /**
     * Set numtipoestiloletra
     *
     * @param integer $numtipoestiloletra
     * @return Cuentascontablesreporteslineas
     */
    public function setNumtipoestiloletra($numtipoestiloletra)
    {
        $this->numtipoestiloletra = $numtipoestiloletra;

        return $this;
    }

    /**
     * Get numtipoestiloletra
     *
     * @return integer 
     */
    public function getNumtipoestiloletra()
    {
        return $this->numtipoestiloletra;
    }

    /**
     * Set numtamanoletra
     *
     * @param integer $numtamanoletra
     * @return Cuentascontablesreporteslineas
     */
    public function setNumtamanoletra($numtamanoletra)
    {
        $this->numtamanoletra = $numtamanoletra;

        return $this;
    }

    /**
     * Get numtamanoletra
     *
     * @return integer 
     */
    public function getNumtamanoletra()
    {
        return $this->numtamanoletra;
    }

    /**
     * Set numcolorletra
     *
     * @param integer $numcolorletra
     * @return Cuentascontablesreporteslineas
     */
    public function setNumcolorletra($numcolorletra)
    {
        $this->numcolorletra = $numcolorletra;

        return $this;
    }

    /**
     * Get numcolorletra
     *
     * @return integer 
     */
    public function getNumcolorletra()
    {
        return $this->numcolorletra;
    }

    /**
     * Set numtipoalineacion
     *
     * @param integer $numtipoalineacion
     * @return Cuentascontablesreporteslineas
     */
    public function setNumtipoalineacion($numtipoalineacion)
    {
        $this->numtipoalineacion = $numtipoalineacion;

        return $this;
    }

    /**
     * Get numtipoalineacion
     *
     * @return integer 
     */
    public function getNumtipoalineacion()
    {
        return $this->numtipoalineacion;
    }

    /**
     * Set logimprimir
     *
     * @param boolean $logimprimir
     * @return Cuentascontablesreporteslineas
     */
    public function setLogimprimir($logimprimir)
    {
        $this->logimprimir = $logimprimir;

        return $this;
    }

    /**
     * Get logimprimir
     *
     * @return boolean 
     */
    public function getLogimprimir()
    {
        return $this->logimprimir;
    }

    /**
     * Set loginsertarlineablanco
     *
     * @param boolean $loginsertarlineablanco
     * @return Cuentascontablesreporteslineas
     */
    public function setLoginsertarlineablanco($loginsertarlineablanco)
    {
        $this->loginsertarlineablanco = $loginsertarlineablanco;

        return $this;
    }

    /**
     * Get loginsertarlineablanco
     *
     * @return boolean 
     */
    public function getLoginsertarlineablanco()
    {
        return $this->loginsertarlineablanco;
    }

    /**
     * Set numtipodato
     *
     * @param integer $numtipodato
     * @return Cuentascontablesreporteslineas
     */
    public function setNumtipodato($numtipodato)
    {
        $this->numtipodato = $numtipodato;

        return $this;
    }

    /**
     * Get numtipodato
     *
     * @return integer 
     */
    public function getNumtipodato()
    {
        return $this->numtipodato;
    }

    /**
     * Set strcuentainicialKy
     *
     * @param string $strcuentainicialKy
     * @return Cuentascontablesreporteslineas
     */
    public function setStrcuentainicialKy($strcuentainicialKy)
    {
        $this->strcuentainicialKy = $strcuentainicialKy;

        return $this;
    }

    /**
     * Get strcuentainicialKy
     *
     * @return string 
     */
    public function getStrcuentainicialKy()
    {
        return $this->strcuentainicialKy;
    }

    /**
     * Set strcuentafinalKy
     *
     * @param string $strcuentafinalKy
     * @return Cuentascontablesreporteslineas
     */
    public function setStrcuentafinalKy($strcuentafinalKy)
    {
        $this->strcuentafinalKy = $strcuentafinalKy;

        return $this;
    }

    /**
     * Get strcuentafinalKy
     *
     * @return string 
     */
    public function getStrcuentafinalKy()
    {
        return $this->strcuentafinalKy;
    }

    /**
     * Set numtipooperacion
     *
     * @param integer $numtipooperacion
     * @return Cuentascontablesreporteslineas
     */
    public function setNumtipooperacion($numtipooperacion)
    {
        $this->numtipooperacion = $numtipooperacion;

        return $this;
    }

    /**
     * Get numtipooperacion
     *
     * @return integer 
     */
    public function getNumtipooperacion()
    {
        return $this->numtipooperacion;
    }

    /**
     * Set loginvertirvalor
     *
     * @param boolean $loginvertirvalor
     * @return Cuentascontablesreporteslineas
     */
    public function setLoginvertirvalor($loginvertirvalor)
    {
        $this->loginvertirvalor = $loginvertirvalor;

        return $this;
    }

    /**
     * Get loginvertirvalor
     *
     * @return boolean 
     */
    public function getLoginvertirvalor()
    {
        return $this->loginvertirvalor;
    }

    /**
     * Set logacumularen1
     *
     * @param boolean $logacumularen1
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen1($logacumularen1)
    {
        $this->logacumularen1 = $logacumularen1;

        return $this;
    }

    /**
     * Get logacumularen1
     *
     * @return boolean 
     */
    public function getLogacumularen1()
    {
        return $this->logacumularen1;
    }

    /**
     * Set logacumularen2
     *
     * @param boolean $logacumularen2
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen2($logacumularen2)
    {
        $this->logacumularen2 = $logacumularen2;

        return $this;
    }

    /**
     * Get logacumularen2
     *
     * @return boolean 
     */
    public function getLogacumularen2()
    {
        return $this->logacumularen2;
    }

    /**
     * Set logacumularen3
     *
     * @param boolean $logacumularen3
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen3($logacumularen3)
    {
        $this->logacumularen3 = $logacumularen3;

        return $this;
    }

    /**
     * Get logacumularen3
     *
     * @return boolean 
     */
    public function getLogacumularen3()
    {
        return $this->logacumularen3;
    }

    /**
     * Set logacumularen4
     *
     * @param boolean $logacumularen4
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen4($logacumularen4)
    {
        $this->logacumularen4 = $logacumularen4;

        return $this;
    }

    /**
     * Get logacumularen4
     *
     * @return boolean 
     */
    public function getLogacumularen4()
    {
        return $this->logacumularen4;
    }

    /**
     * Set logacumularen5
     *
     * @param boolean $logacumularen5
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen5($logacumularen5)
    {
        $this->logacumularen5 = $logacumularen5;

        return $this;
    }

    /**
     * Get logacumularen5
     *
     * @return boolean 
     */
    public function getLogacumularen5()
    {
        return $this->logacumularen5;
    }

    /**
     * Set logacumularen6
     *
     * @param boolean $logacumularen6
     * @return Cuentascontablesreporteslineas
     */
    public function setLogacumularen6($logacumularen6)
    {
        $this->logacumularen6 = $logacumularen6;

        return $this;
    }

    /**
     * Get logacumularen6
     *
     * @return boolean 
     */
    public function getLogacumularen6()
    {
        return $this->logacumularen6;
    }

    /**
     * Set numacumuladortomar
     *
     * @param integer $numacumuladortomar
     * @return Cuentascontablesreporteslineas
     */
    public function setNumacumuladortomar($numacumuladortomar)
    {
        $this->numacumuladortomar = $numacumuladortomar;

        return $this;
    }

    /**
     * Get numacumuladortomar
     *
     * @return integer 
     */
    public function getNumacumuladortomar()
    {
        return $this->numacumuladortomar;
    }

    /**
     * Set logimprimervalorescero
     *
     * @param boolean $logimprimervalorescero
     * @return Cuentascontablesreporteslineas
     */
    public function setLogimprimervalorescero($logimprimervalorescero)
    {
        $this->logimprimervalorescero = $logimprimervalorescero;

        return $this;
    }

    /**
     * Get logimprimervalorescero
     *
     * @return boolean 
     */
    public function getLogimprimervalorescero()
    {
        return $this->logimprimervalorescero;
    }
}
