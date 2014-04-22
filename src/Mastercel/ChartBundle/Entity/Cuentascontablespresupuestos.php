<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuentascontablespresupuestos
 *
 * @ORM\Table(name="CuentasContablesPresupuestos", indexes={@ORM\Index(name="Indice_1", columns={"NumAsignacion_id"}), @ORM\Index(name="Indice_2", columns={"DteActualizacion"}), @ORM\Index(name="Indice_3", columns={"NumEstadoComunicacion"}), @ORM\Index(name="Indice_4", columns={"NumEjercicio_id", "NumEmpresa_id", "NumCentroControl_id", "StrCuenta_ky"})})
 * @ORM\Entity
 */
class Cuentascontablespresupuestos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEjercicio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numejercicioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrCuenta_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strcuentaKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numcentrocontrolId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DteUltimaRevision", type="datetime", nullable=true)
     */
    private $dteultimarevision;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAsignacion_id", type="integer", nullable=true)
     */
    private $numasignacionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPresupuesto_1", type="integer", nullable=true)
     */
    private $numtotalpresupuesto1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_1", type="integer", nullable=true)
     */
    private $numpresupuesto11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_2", type="integer", nullable=true)
     */
    private $numpresupuesto12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_3", type="integer", nullable=true)
     */
    private $numpresupuesto13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_4", type="integer", nullable=true)
     */
    private $numpresupuesto14 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_5", type="integer", nullable=true)
     */
    private $numpresupuesto15 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_6", type="integer", nullable=true)
     */
    private $numpresupuesto16 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_7", type="integer", nullable=true)
     */
    private $numpresupuesto17 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_8", type="integer", nullable=true)
     */
    private $numpresupuesto18 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_9", type="integer", nullable=true)
     */
    private $numpresupuesto19 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_10", type="integer", nullable=true)
     */
    private $numpresupuesto110 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_11", type="integer", nullable=true)
     */
    private $numpresupuesto111 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_12", type="integer", nullable=true)
     */
    private $numpresupuesto112 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_1_13", type="integer", nullable=true)
     */
    private $numpresupuesto113 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPresupuesto_2", type="integer", nullable=true)
     */
    private $numtotalpresupuesto2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_1", type="integer", nullable=true)
     */
    private $numpresupuesto21 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_2", type="integer", nullable=true)
     */
    private $numpresupuesto22 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_3", type="integer", nullable=true)
     */
    private $numpresupuesto23 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_4", type="integer", nullable=true)
     */
    private $numpresupuesto24 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_5", type="integer", nullable=true)
     */
    private $numpresupuesto25 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_6", type="integer", nullable=true)
     */
    private $numpresupuesto26 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_7", type="integer", nullable=true)
     */
    private $numpresupuesto27 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_8", type="integer", nullable=true)
     */
    private $numpresupuesto28 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_9", type="integer", nullable=true)
     */
    private $numpresupuesto29 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_10", type="integer", nullable=true)
     */
    private $numpresupuesto210 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_11", type="integer", nullable=true)
     */
    private $numpresupuesto211 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_12", type="integer", nullable=true)
     */
    private $numpresupuesto212 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_2_13", type="integer", nullable=true)
     */
    private $numpresupuesto213 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTotalPresupuesto_3", type="integer", nullable=true)
     */
    private $numtotalpresupuesto3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_1", type="integer", nullable=true)
     */
    private $numpresupuesto31 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_2", type="integer", nullable=true)
     */
    private $numpresupuesto32 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_3", type="integer", nullable=true)
     */
    private $numpresupuesto33 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_4", type="integer", nullable=true)
     */
    private $numpresupuesto34 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_5", type="integer", nullable=true)
     */
    private $numpresupuesto35 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_6", type="integer", nullable=true)
     */
    private $numpresupuesto36 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_7", type="integer", nullable=true)
     */
    private $numpresupuesto37 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_8", type="integer", nullable=true)
     */
    private $numpresupuesto38 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_9", type="integer", nullable=true)
     */
    private $numpresupuesto39 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_10", type="integer", nullable=true)
     */
    private $numpresupuesto310 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_11", type="integer", nullable=true)
     */
    private $numpresupuesto311 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_12", type="integer", nullable=true)
     */
    private $numpresupuesto312 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_3_13", type="integer", nullable=true)
     */
    private $numpresupuesto313 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_1", type="integer", nullable=true)
     */
    private $numpresupuestoEap11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_2", type="integer", nullable=true)
     */
    private $numpresupuestoEap12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_3", type="integer", nullable=true)
     */
    private $numpresupuestoEap13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_4", type="integer", nullable=true)
     */
    private $numpresupuestoEap14 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_5", type="integer", nullable=true)
     */
    private $numpresupuestoEap15 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_6", type="integer", nullable=true)
     */
    private $numpresupuestoEap16 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_7", type="integer", nullable=true)
     */
    private $numpresupuestoEap17 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_8", type="integer", nullable=true)
     */
    private $numpresupuestoEap18 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_9", type="integer", nullable=true)
     */
    private $numpresupuestoEap19 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_10", type="integer", nullable=true)
     */
    private $numpresupuestoEap110 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_11", type="integer", nullable=true)
     */
    private $numpresupuestoEap111 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_12", type="integer", nullable=true)
     */
    private $numpresupuestoEap112 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_1_13", type="integer", nullable=true)
     */
    private $numpresupuestoEap113 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_1", type="integer", nullable=true)
     */
    private $numpresupuestoEap21 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_2", type="integer", nullable=true)
     */
    private $numpresupuestoEap22 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_3", type="integer", nullable=true)
     */
    private $numpresupuestoEap23 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_4", type="integer", nullable=true)
     */
    private $numpresupuestoEap24 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_5", type="integer", nullable=true)
     */
    private $numpresupuestoEap25 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_6", type="integer", nullable=true)
     */
    private $numpresupuestoEap26 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_7", type="integer", nullable=true)
     */
    private $numpresupuestoEap27 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_8", type="integer", nullable=true)
     */
    private $numpresupuestoEap28 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_9", type="integer", nullable=true)
     */
    private $numpresupuestoEap29 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_10", type="integer", nullable=true)
     */
    private $numpresupuestoEap210 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_11", type="integer", nullable=true)
     */
    private $numpresupuestoEap211 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_12", type="integer", nullable=true)
     */
    private $numpresupuestoEap212 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_2_13", type="integer", nullable=true)
     */
    private $numpresupuestoEap213 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_1", type="integer", nullable=true)
     */
    private $numpresupuestoEap31 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_2", type="integer", nullable=true)
     */
    private $numpresupuestoEap32 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_3", type="integer", nullable=true)
     */
    private $numpresupuestoEap33 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_4", type="integer", nullable=true)
     */
    private $numpresupuestoEap34 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_5", type="integer", nullable=true)
     */
    private $numpresupuestoEap35 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_6", type="integer", nullable=true)
     */
    private $numpresupuestoEap36 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_7", type="integer", nullable=true)
     */
    private $numpresupuestoEap37 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_8", type="integer", nullable=true)
     */
    private $numpresupuestoEap38 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_9", type="integer", nullable=true)
     */
    private $numpresupuestoEap39 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_10", type="integer", nullable=true)
     */
    private $numpresupuestoEap310 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_11", type="integer", nullable=true)
     */
    private $numpresupuestoEap311 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_12", type="integer", nullable=true)
     */
    private $numpresupuestoEap312 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumPresupuesto_EAP_3_13", type="integer", nullable=true)
     */
    private $numpresupuestoEap313 = '0';

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
     * Set numejercicioId
     *
     * @param integer $numejercicioId
     * @return Cuentascontablespresupuestos
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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Cuentascontablespresupuestos
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
     * Set strcuentaKy
     *
     * @param string $strcuentaKy
     * @return Cuentascontablespresupuestos
     */
    public function setStrcuentaKy($strcuentaKy)
    {
        $this->strcuentaKy = $strcuentaKy;

        return $this;
    }

    /**
     * Get strcuentaKy
     *
     * @return string 
     */
    public function getStrcuentaKy()
    {
        return $this->strcuentaKy;
    }

    /**
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Cuentascontablespresupuestos
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
     * Set dteultimarevision
     *
     * @param \DateTime $dteultimarevision
     * @return Cuentascontablespresupuestos
     */
    public function setDteultimarevision($dteultimarevision)
    {
        $this->dteultimarevision = $dteultimarevision;

        return $this;
    }

    /**
     * Get dteultimarevision
     *
     * @return \DateTime 
     */
    public function getDteultimarevision()
    {
        return $this->dteultimarevision;
    }

    /**
     * Set numasignacionId
     *
     * @param integer $numasignacionId
     * @return Cuentascontablespresupuestos
     */
    public function setNumasignacionId($numasignacionId)
    {
        $this->numasignacionId = $numasignacionId;

        return $this;
    }

    /**
     * Get numasignacionId
     *
     * @return integer 
     */
    public function getNumasignacionId()
    {
        return $this->numasignacionId;
    }

    /**
     * Set numtotalpresupuesto1
     *
     * @param integer $numtotalpresupuesto1
     * @return Cuentascontablespresupuestos
     */
    public function setNumtotalpresupuesto1($numtotalpresupuesto1)
    {
        $this->numtotalpresupuesto1 = $numtotalpresupuesto1;

        return $this;
    }

    /**
     * Get numtotalpresupuesto1
     *
     * @return integer 
     */
    public function getNumtotalpresupuesto1()
    {
        return $this->numtotalpresupuesto1;
    }

    /**
     * Set numpresupuesto11
     *
     * @param integer $numpresupuesto11
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto11($numpresupuesto11)
    {
        $this->numpresupuesto11 = $numpresupuesto11;

        return $this;
    }

    /**
     * Get numpresupuesto11
     *
     * @return integer 
     */
    public function getNumpresupuesto11()
    {
        return $this->numpresupuesto11;
    }

    /**
     * Set numpresupuesto12
     *
     * @param integer $numpresupuesto12
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto12($numpresupuesto12)
    {
        $this->numpresupuesto12 = $numpresupuesto12;

        return $this;
    }

    /**
     * Get numpresupuesto12
     *
     * @return integer 
     */
    public function getNumpresupuesto12()
    {
        return $this->numpresupuesto12;
    }

    /**
     * Set numpresupuesto13
     *
     * @param integer $numpresupuesto13
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto13($numpresupuesto13)
    {
        $this->numpresupuesto13 = $numpresupuesto13;

        return $this;
    }

    /**
     * Get numpresupuesto13
     *
     * @return integer 
     */
    public function getNumpresupuesto13()
    {
        return $this->numpresupuesto13;
    }

    /**
     * Set numpresupuesto14
     *
     * @param integer $numpresupuesto14
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto14($numpresupuesto14)
    {
        $this->numpresupuesto14 = $numpresupuesto14;

        return $this;
    }

    /**
     * Get numpresupuesto14
     *
     * @return integer 
     */
    public function getNumpresupuesto14()
    {
        return $this->numpresupuesto14;
    }

    /**
     * Set numpresupuesto15
     *
     * @param integer $numpresupuesto15
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto15($numpresupuesto15)
    {
        $this->numpresupuesto15 = $numpresupuesto15;

        return $this;
    }

    /**
     * Get numpresupuesto15
     *
     * @return integer 
     */
    public function getNumpresupuesto15()
    {
        return $this->numpresupuesto15;
    }

    /**
     * Set numpresupuesto16
     *
     * @param integer $numpresupuesto16
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto16($numpresupuesto16)
    {
        $this->numpresupuesto16 = $numpresupuesto16;

        return $this;
    }

    /**
     * Get numpresupuesto16
     *
     * @return integer 
     */
    public function getNumpresupuesto16()
    {
        return $this->numpresupuesto16;
    }

    /**
     * Set numpresupuesto17
     *
     * @param integer $numpresupuesto17
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto17($numpresupuesto17)
    {
        $this->numpresupuesto17 = $numpresupuesto17;

        return $this;
    }

    /**
     * Get numpresupuesto17
     *
     * @return integer 
     */
    public function getNumpresupuesto17()
    {
        return $this->numpresupuesto17;
    }

    /**
     * Set numpresupuesto18
     *
     * @param integer $numpresupuesto18
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto18($numpresupuesto18)
    {
        $this->numpresupuesto18 = $numpresupuesto18;

        return $this;
    }

    /**
     * Get numpresupuesto18
     *
     * @return integer 
     */
    public function getNumpresupuesto18()
    {
        return $this->numpresupuesto18;
    }

    /**
     * Set numpresupuesto19
     *
     * @param integer $numpresupuesto19
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto19($numpresupuesto19)
    {
        $this->numpresupuesto19 = $numpresupuesto19;

        return $this;
    }

    /**
     * Get numpresupuesto19
     *
     * @return integer 
     */
    public function getNumpresupuesto19()
    {
        return $this->numpresupuesto19;
    }

    /**
     * Set numpresupuesto110
     *
     * @param integer $numpresupuesto110
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto110($numpresupuesto110)
    {
        $this->numpresupuesto110 = $numpresupuesto110;

        return $this;
    }

    /**
     * Get numpresupuesto110
     *
     * @return integer 
     */
    public function getNumpresupuesto110()
    {
        return $this->numpresupuesto110;
    }

    /**
     * Set numpresupuesto111
     *
     * @param integer $numpresupuesto111
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto111($numpresupuesto111)
    {
        $this->numpresupuesto111 = $numpresupuesto111;

        return $this;
    }

    /**
     * Get numpresupuesto111
     *
     * @return integer 
     */
    public function getNumpresupuesto111()
    {
        return $this->numpresupuesto111;
    }

    /**
     * Set numpresupuesto112
     *
     * @param integer $numpresupuesto112
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto112($numpresupuesto112)
    {
        $this->numpresupuesto112 = $numpresupuesto112;

        return $this;
    }

    /**
     * Get numpresupuesto112
     *
     * @return integer 
     */
    public function getNumpresupuesto112()
    {
        return $this->numpresupuesto112;
    }

    /**
     * Set numpresupuesto113
     *
     * @param integer $numpresupuesto113
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto113($numpresupuesto113)
    {
        $this->numpresupuesto113 = $numpresupuesto113;

        return $this;
    }

    /**
     * Get numpresupuesto113
     *
     * @return integer 
     */
    public function getNumpresupuesto113()
    {
        return $this->numpresupuesto113;
    }

    /**
     * Set numtotalpresupuesto2
     *
     * @param integer $numtotalpresupuesto2
     * @return Cuentascontablespresupuestos
     */
    public function setNumtotalpresupuesto2($numtotalpresupuesto2)
    {
        $this->numtotalpresupuesto2 = $numtotalpresupuesto2;

        return $this;
    }

    /**
     * Get numtotalpresupuesto2
     *
     * @return integer 
     */
    public function getNumtotalpresupuesto2()
    {
        return $this->numtotalpresupuesto2;
    }

    /**
     * Set numpresupuesto21
     *
     * @param integer $numpresupuesto21
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto21($numpresupuesto21)
    {
        $this->numpresupuesto21 = $numpresupuesto21;

        return $this;
    }

    /**
     * Get numpresupuesto21
     *
     * @return integer 
     */
    public function getNumpresupuesto21()
    {
        return $this->numpresupuesto21;
    }

    /**
     * Set numpresupuesto22
     *
     * @param integer $numpresupuesto22
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto22($numpresupuesto22)
    {
        $this->numpresupuesto22 = $numpresupuesto22;

        return $this;
    }

    /**
     * Get numpresupuesto22
     *
     * @return integer 
     */
    public function getNumpresupuesto22()
    {
        return $this->numpresupuesto22;
    }

    /**
     * Set numpresupuesto23
     *
     * @param integer $numpresupuesto23
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto23($numpresupuesto23)
    {
        $this->numpresupuesto23 = $numpresupuesto23;

        return $this;
    }

    /**
     * Get numpresupuesto23
     *
     * @return integer 
     */
    public function getNumpresupuesto23()
    {
        return $this->numpresupuesto23;
    }

    /**
     * Set numpresupuesto24
     *
     * @param integer $numpresupuesto24
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto24($numpresupuesto24)
    {
        $this->numpresupuesto24 = $numpresupuesto24;

        return $this;
    }

    /**
     * Get numpresupuesto24
     *
     * @return integer 
     */
    public function getNumpresupuesto24()
    {
        return $this->numpresupuesto24;
    }

    /**
     * Set numpresupuesto25
     *
     * @param integer $numpresupuesto25
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto25($numpresupuesto25)
    {
        $this->numpresupuesto25 = $numpresupuesto25;

        return $this;
    }

    /**
     * Get numpresupuesto25
     *
     * @return integer 
     */
    public function getNumpresupuesto25()
    {
        return $this->numpresupuesto25;
    }

    /**
     * Set numpresupuesto26
     *
     * @param integer $numpresupuesto26
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto26($numpresupuesto26)
    {
        $this->numpresupuesto26 = $numpresupuesto26;

        return $this;
    }

    /**
     * Get numpresupuesto26
     *
     * @return integer 
     */
    public function getNumpresupuesto26()
    {
        return $this->numpresupuesto26;
    }

    /**
     * Set numpresupuesto27
     *
     * @param integer $numpresupuesto27
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto27($numpresupuesto27)
    {
        $this->numpresupuesto27 = $numpresupuesto27;

        return $this;
    }

    /**
     * Get numpresupuesto27
     *
     * @return integer 
     */
    public function getNumpresupuesto27()
    {
        return $this->numpresupuesto27;
    }

    /**
     * Set numpresupuesto28
     *
     * @param integer $numpresupuesto28
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto28($numpresupuesto28)
    {
        $this->numpresupuesto28 = $numpresupuesto28;

        return $this;
    }

    /**
     * Get numpresupuesto28
     *
     * @return integer 
     */
    public function getNumpresupuesto28()
    {
        return $this->numpresupuesto28;
    }

    /**
     * Set numpresupuesto29
     *
     * @param integer $numpresupuesto29
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto29($numpresupuesto29)
    {
        $this->numpresupuesto29 = $numpresupuesto29;

        return $this;
    }

    /**
     * Get numpresupuesto29
     *
     * @return integer 
     */
    public function getNumpresupuesto29()
    {
        return $this->numpresupuesto29;
    }

    /**
     * Set numpresupuesto210
     *
     * @param integer $numpresupuesto210
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto210($numpresupuesto210)
    {
        $this->numpresupuesto210 = $numpresupuesto210;

        return $this;
    }

    /**
     * Get numpresupuesto210
     *
     * @return integer 
     */
    public function getNumpresupuesto210()
    {
        return $this->numpresupuesto210;
    }

    /**
     * Set numpresupuesto211
     *
     * @param integer $numpresupuesto211
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto211($numpresupuesto211)
    {
        $this->numpresupuesto211 = $numpresupuesto211;

        return $this;
    }

    /**
     * Get numpresupuesto211
     *
     * @return integer 
     */
    public function getNumpresupuesto211()
    {
        return $this->numpresupuesto211;
    }

    /**
     * Set numpresupuesto212
     *
     * @param integer $numpresupuesto212
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto212($numpresupuesto212)
    {
        $this->numpresupuesto212 = $numpresupuesto212;

        return $this;
    }

    /**
     * Get numpresupuesto212
     *
     * @return integer 
     */
    public function getNumpresupuesto212()
    {
        return $this->numpresupuesto212;
    }

    /**
     * Set numpresupuesto213
     *
     * @param integer $numpresupuesto213
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto213($numpresupuesto213)
    {
        $this->numpresupuesto213 = $numpresupuesto213;

        return $this;
    }

    /**
     * Get numpresupuesto213
     *
     * @return integer 
     */
    public function getNumpresupuesto213()
    {
        return $this->numpresupuesto213;
    }

    /**
     * Set numtotalpresupuesto3
     *
     * @param integer $numtotalpresupuesto3
     * @return Cuentascontablespresupuestos
     */
    public function setNumtotalpresupuesto3($numtotalpresupuesto3)
    {
        $this->numtotalpresupuesto3 = $numtotalpresupuesto3;

        return $this;
    }

    /**
     * Get numtotalpresupuesto3
     *
     * @return integer 
     */
    public function getNumtotalpresupuesto3()
    {
        return $this->numtotalpresupuesto3;
    }

    /**
     * Set numpresupuesto31
     *
     * @param integer $numpresupuesto31
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto31($numpresupuesto31)
    {
        $this->numpresupuesto31 = $numpresupuesto31;

        return $this;
    }

    /**
     * Get numpresupuesto31
     *
     * @return integer 
     */
    public function getNumpresupuesto31()
    {
        return $this->numpresupuesto31;
    }

    /**
     * Set numpresupuesto32
     *
     * @param integer $numpresupuesto32
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto32($numpresupuesto32)
    {
        $this->numpresupuesto32 = $numpresupuesto32;

        return $this;
    }

    /**
     * Get numpresupuesto32
     *
     * @return integer 
     */
    public function getNumpresupuesto32()
    {
        return $this->numpresupuesto32;
    }

    /**
     * Set numpresupuesto33
     *
     * @param integer $numpresupuesto33
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto33($numpresupuesto33)
    {
        $this->numpresupuesto33 = $numpresupuesto33;

        return $this;
    }

    /**
     * Get numpresupuesto33
     *
     * @return integer 
     */
    public function getNumpresupuesto33()
    {
        return $this->numpresupuesto33;
    }

    /**
     * Set numpresupuesto34
     *
     * @param integer $numpresupuesto34
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto34($numpresupuesto34)
    {
        $this->numpresupuesto34 = $numpresupuesto34;

        return $this;
    }

    /**
     * Get numpresupuesto34
     *
     * @return integer 
     */
    public function getNumpresupuesto34()
    {
        return $this->numpresupuesto34;
    }

    /**
     * Set numpresupuesto35
     *
     * @param integer $numpresupuesto35
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto35($numpresupuesto35)
    {
        $this->numpresupuesto35 = $numpresupuesto35;

        return $this;
    }

    /**
     * Get numpresupuesto35
     *
     * @return integer 
     */
    public function getNumpresupuesto35()
    {
        return $this->numpresupuesto35;
    }

    /**
     * Set numpresupuesto36
     *
     * @param integer $numpresupuesto36
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto36($numpresupuesto36)
    {
        $this->numpresupuesto36 = $numpresupuesto36;

        return $this;
    }

    /**
     * Get numpresupuesto36
     *
     * @return integer 
     */
    public function getNumpresupuesto36()
    {
        return $this->numpresupuesto36;
    }

    /**
     * Set numpresupuesto37
     *
     * @param integer $numpresupuesto37
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto37($numpresupuesto37)
    {
        $this->numpresupuesto37 = $numpresupuesto37;

        return $this;
    }

    /**
     * Get numpresupuesto37
     *
     * @return integer 
     */
    public function getNumpresupuesto37()
    {
        return $this->numpresupuesto37;
    }

    /**
     * Set numpresupuesto38
     *
     * @param integer $numpresupuesto38
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto38($numpresupuesto38)
    {
        $this->numpresupuesto38 = $numpresupuesto38;

        return $this;
    }

    /**
     * Get numpresupuesto38
     *
     * @return integer 
     */
    public function getNumpresupuesto38()
    {
        return $this->numpresupuesto38;
    }

    /**
     * Set numpresupuesto39
     *
     * @param integer $numpresupuesto39
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto39($numpresupuesto39)
    {
        $this->numpresupuesto39 = $numpresupuesto39;

        return $this;
    }

    /**
     * Get numpresupuesto39
     *
     * @return integer 
     */
    public function getNumpresupuesto39()
    {
        return $this->numpresupuesto39;
    }

    /**
     * Set numpresupuesto310
     *
     * @param integer $numpresupuesto310
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto310($numpresupuesto310)
    {
        $this->numpresupuesto310 = $numpresupuesto310;

        return $this;
    }

    /**
     * Get numpresupuesto310
     *
     * @return integer 
     */
    public function getNumpresupuesto310()
    {
        return $this->numpresupuesto310;
    }

    /**
     * Set numpresupuesto311
     *
     * @param integer $numpresupuesto311
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto311($numpresupuesto311)
    {
        $this->numpresupuesto311 = $numpresupuesto311;

        return $this;
    }

    /**
     * Get numpresupuesto311
     *
     * @return integer 
     */
    public function getNumpresupuesto311()
    {
        return $this->numpresupuesto311;
    }

    /**
     * Set numpresupuesto312
     *
     * @param integer $numpresupuesto312
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto312($numpresupuesto312)
    {
        $this->numpresupuesto312 = $numpresupuesto312;

        return $this;
    }

    /**
     * Get numpresupuesto312
     *
     * @return integer 
     */
    public function getNumpresupuesto312()
    {
        return $this->numpresupuesto312;
    }

    /**
     * Set numpresupuesto313
     *
     * @param integer $numpresupuesto313
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuesto313($numpresupuesto313)
    {
        $this->numpresupuesto313 = $numpresupuesto313;

        return $this;
    }

    /**
     * Get numpresupuesto313
     *
     * @return integer 
     */
    public function getNumpresupuesto313()
    {
        return $this->numpresupuesto313;
    }

    /**
     * Set numpresupuestoEap11
     *
     * @param integer $numpresupuestoEap11
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap11($numpresupuestoEap11)
    {
        $this->numpresupuestoEap11 = $numpresupuestoEap11;

        return $this;
    }

    /**
     * Get numpresupuestoEap11
     *
     * @return integer 
     */
    public function getNumpresupuestoEap11()
    {
        return $this->numpresupuestoEap11;
    }

    /**
     * Set numpresupuestoEap12
     *
     * @param integer $numpresupuestoEap12
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap12($numpresupuestoEap12)
    {
        $this->numpresupuestoEap12 = $numpresupuestoEap12;

        return $this;
    }

    /**
     * Get numpresupuestoEap12
     *
     * @return integer 
     */
    public function getNumpresupuestoEap12()
    {
        return $this->numpresupuestoEap12;
    }

    /**
     * Set numpresupuestoEap13
     *
     * @param integer $numpresupuestoEap13
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap13($numpresupuestoEap13)
    {
        $this->numpresupuestoEap13 = $numpresupuestoEap13;

        return $this;
    }

    /**
     * Get numpresupuestoEap13
     *
     * @return integer 
     */
    public function getNumpresupuestoEap13()
    {
        return $this->numpresupuestoEap13;
    }

    /**
     * Set numpresupuestoEap14
     *
     * @param integer $numpresupuestoEap14
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap14($numpresupuestoEap14)
    {
        $this->numpresupuestoEap14 = $numpresupuestoEap14;

        return $this;
    }

    /**
     * Get numpresupuestoEap14
     *
     * @return integer 
     */
    public function getNumpresupuestoEap14()
    {
        return $this->numpresupuestoEap14;
    }

    /**
     * Set numpresupuestoEap15
     *
     * @param integer $numpresupuestoEap15
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap15($numpresupuestoEap15)
    {
        $this->numpresupuestoEap15 = $numpresupuestoEap15;

        return $this;
    }

    /**
     * Get numpresupuestoEap15
     *
     * @return integer 
     */
    public function getNumpresupuestoEap15()
    {
        return $this->numpresupuestoEap15;
    }

    /**
     * Set numpresupuestoEap16
     *
     * @param integer $numpresupuestoEap16
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap16($numpresupuestoEap16)
    {
        $this->numpresupuestoEap16 = $numpresupuestoEap16;

        return $this;
    }

    /**
     * Get numpresupuestoEap16
     *
     * @return integer 
     */
    public function getNumpresupuestoEap16()
    {
        return $this->numpresupuestoEap16;
    }

    /**
     * Set numpresupuestoEap17
     *
     * @param integer $numpresupuestoEap17
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap17($numpresupuestoEap17)
    {
        $this->numpresupuestoEap17 = $numpresupuestoEap17;

        return $this;
    }

    /**
     * Get numpresupuestoEap17
     *
     * @return integer 
     */
    public function getNumpresupuestoEap17()
    {
        return $this->numpresupuestoEap17;
    }

    /**
     * Set numpresupuestoEap18
     *
     * @param integer $numpresupuestoEap18
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap18($numpresupuestoEap18)
    {
        $this->numpresupuestoEap18 = $numpresupuestoEap18;

        return $this;
    }

    /**
     * Get numpresupuestoEap18
     *
     * @return integer 
     */
    public function getNumpresupuestoEap18()
    {
        return $this->numpresupuestoEap18;
    }

    /**
     * Set numpresupuestoEap19
     *
     * @param integer $numpresupuestoEap19
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap19($numpresupuestoEap19)
    {
        $this->numpresupuestoEap19 = $numpresupuestoEap19;

        return $this;
    }

    /**
     * Get numpresupuestoEap19
     *
     * @return integer 
     */
    public function getNumpresupuestoEap19()
    {
        return $this->numpresupuestoEap19;
    }

    /**
     * Set numpresupuestoEap110
     *
     * @param integer $numpresupuestoEap110
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap110($numpresupuestoEap110)
    {
        $this->numpresupuestoEap110 = $numpresupuestoEap110;

        return $this;
    }

    /**
     * Get numpresupuestoEap110
     *
     * @return integer 
     */
    public function getNumpresupuestoEap110()
    {
        return $this->numpresupuestoEap110;
    }

    /**
     * Set numpresupuestoEap111
     *
     * @param integer $numpresupuestoEap111
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap111($numpresupuestoEap111)
    {
        $this->numpresupuestoEap111 = $numpresupuestoEap111;

        return $this;
    }

    /**
     * Get numpresupuestoEap111
     *
     * @return integer 
     */
    public function getNumpresupuestoEap111()
    {
        return $this->numpresupuestoEap111;
    }

    /**
     * Set numpresupuestoEap112
     *
     * @param integer $numpresupuestoEap112
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap112($numpresupuestoEap112)
    {
        $this->numpresupuestoEap112 = $numpresupuestoEap112;

        return $this;
    }

    /**
     * Get numpresupuestoEap112
     *
     * @return integer 
     */
    public function getNumpresupuestoEap112()
    {
        return $this->numpresupuestoEap112;
    }

    /**
     * Set numpresupuestoEap113
     *
     * @param integer $numpresupuestoEap113
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap113($numpresupuestoEap113)
    {
        $this->numpresupuestoEap113 = $numpresupuestoEap113;

        return $this;
    }

    /**
     * Get numpresupuestoEap113
     *
     * @return integer 
     */
    public function getNumpresupuestoEap113()
    {
        return $this->numpresupuestoEap113;
    }

    /**
     * Set numpresupuestoEap21
     *
     * @param integer $numpresupuestoEap21
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap21($numpresupuestoEap21)
    {
        $this->numpresupuestoEap21 = $numpresupuestoEap21;

        return $this;
    }

    /**
     * Get numpresupuestoEap21
     *
     * @return integer 
     */
    public function getNumpresupuestoEap21()
    {
        return $this->numpresupuestoEap21;
    }

    /**
     * Set numpresupuestoEap22
     *
     * @param integer $numpresupuestoEap22
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap22($numpresupuestoEap22)
    {
        $this->numpresupuestoEap22 = $numpresupuestoEap22;

        return $this;
    }

    /**
     * Get numpresupuestoEap22
     *
     * @return integer 
     */
    public function getNumpresupuestoEap22()
    {
        return $this->numpresupuestoEap22;
    }

    /**
     * Set numpresupuestoEap23
     *
     * @param integer $numpresupuestoEap23
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap23($numpresupuestoEap23)
    {
        $this->numpresupuestoEap23 = $numpresupuestoEap23;

        return $this;
    }

    /**
     * Get numpresupuestoEap23
     *
     * @return integer 
     */
    public function getNumpresupuestoEap23()
    {
        return $this->numpresupuestoEap23;
    }

    /**
     * Set numpresupuestoEap24
     *
     * @param integer $numpresupuestoEap24
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap24($numpresupuestoEap24)
    {
        $this->numpresupuestoEap24 = $numpresupuestoEap24;

        return $this;
    }

    /**
     * Get numpresupuestoEap24
     *
     * @return integer 
     */
    public function getNumpresupuestoEap24()
    {
        return $this->numpresupuestoEap24;
    }

    /**
     * Set numpresupuestoEap25
     *
     * @param integer $numpresupuestoEap25
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap25($numpresupuestoEap25)
    {
        $this->numpresupuestoEap25 = $numpresupuestoEap25;

        return $this;
    }

    /**
     * Get numpresupuestoEap25
     *
     * @return integer 
     */
    public function getNumpresupuestoEap25()
    {
        return $this->numpresupuestoEap25;
    }

    /**
     * Set numpresupuestoEap26
     *
     * @param integer $numpresupuestoEap26
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap26($numpresupuestoEap26)
    {
        $this->numpresupuestoEap26 = $numpresupuestoEap26;

        return $this;
    }

    /**
     * Get numpresupuestoEap26
     *
     * @return integer 
     */
    public function getNumpresupuestoEap26()
    {
        return $this->numpresupuestoEap26;
    }

    /**
     * Set numpresupuestoEap27
     *
     * @param integer $numpresupuestoEap27
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap27($numpresupuestoEap27)
    {
        $this->numpresupuestoEap27 = $numpresupuestoEap27;

        return $this;
    }

    /**
     * Get numpresupuestoEap27
     *
     * @return integer 
     */
    public function getNumpresupuestoEap27()
    {
        return $this->numpresupuestoEap27;
    }

    /**
     * Set numpresupuestoEap28
     *
     * @param integer $numpresupuestoEap28
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap28($numpresupuestoEap28)
    {
        $this->numpresupuestoEap28 = $numpresupuestoEap28;

        return $this;
    }

    /**
     * Get numpresupuestoEap28
     *
     * @return integer 
     */
    public function getNumpresupuestoEap28()
    {
        return $this->numpresupuestoEap28;
    }

    /**
     * Set numpresupuestoEap29
     *
     * @param integer $numpresupuestoEap29
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap29($numpresupuestoEap29)
    {
        $this->numpresupuestoEap29 = $numpresupuestoEap29;

        return $this;
    }

    /**
     * Get numpresupuestoEap29
     *
     * @return integer 
     */
    public function getNumpresupuestoEap29()
    {
        return $this->numpresupuestoEap29;
    }

    /**
     * Set numpresupuestoEap210
     *
     * @param integer $numpresupuestoEap210
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap210($numpresupuestoEap210)
    {
        $this->numpresupuestoEap210 = $numpresupuestoEap210;

        return $this;
    }

    /**
     * Get numpresupuestoEap210
     *
     * @return integer 
     */
    public function getNumpresupuestoEap210()
    {
        return $this->numpresupuestoEap210;
    }

    /**
     * Set numpresupuestoEap211
     *
     * @param integer $numpresupuestoEap211
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap211($numpresupuestoEap211)
    {
        $this->numpresupuestoEap211 = $numpresupuestoEap211;

        return $this;
    }

    /**
     * Get numpresupuestoEap211
     *
     * @return integer 
     */
    public function getNumpresupuestoEap211()
    {
        return $this->numpresupuestoEap211;
    }

    /**
     * Set numpresupuestoEap212
     *
     * @param integer $numpresupuestoEap212
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap212($numpresupuestoEap212)
    {
        $this->numpresupuestoEap212 = $numpresupuestoEap212;

        return $this;
    }

    /**
     * Get numpresupuestoEap212
     *
     * @return integer 
     */
    public function getNumpresupuestoEap212()
    {
        return $this->numpresupuestoEap212;
    }

    /**
     * Set numpresupuestoEap213
     *
     * @param integer $numpresupuestoEap213
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap213($numpresupuestoEap213)
    {
        $this->numpresupuestoEap213 = $numpresupuestoEap213;

        return $this;
    }

    /**
     * Get numpresupuestoEap213
     *
     * @return integer 
     */
    public function getNumpresupuestoEap213()
    {
        return $this->numpresupuestoEap213;
    }

    /**
     * Set numpresupuestoEap31
     *
     * @param integer $numpresupuestoEap31
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap31($numpresupuestoEap31)
    {
        $this->numpresupuestoEap31 = $numpresupuestoEap31;

        return $this;
    }

    /**
     * Get numpresupuestoEap31
     *
     * @return integer 
     */
    public function getNumpresupuestoEap31()
    {
        return $this->numpresupuestoEap31;
    }

    /**
     * Set numpresupuestoEap32
     *
     * @param integer $numpresupuestoEap32
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap32($numpresupuestoEap32)
    {
        $this->numpresupuestoEap32 = $numpresupuestoEap32;

        return $this;
    }

    /**
     * Get numpresupuestoEap32
     *
     * @return integer 
     */
    public function getNumpresupuestoEap32()
    {
        return $this->numpresupuestoEap32;
    }

    /**
     * Set numpresupuestoEap33
     *
     * @param integer $numpresupuestoEap33
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap33($numpresupuestoEap33)
    {
        $this->numpresupuestoEap33 = $numpresupuestoEap33;

        return $this;
    }

    /**
     * Get numpresupuestoEap33
     *
     * @return integer 
     */
    public function getNumpresupuestoEap33()
    {
        return $this->numpresupuestoEap33;
    }

    /**
     * Set numpresupuestoEap34
     *
     * @param integer $numpresupuestoEap34
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap34($numpresupuestoEap34)
    {
        $this->numpresupuestoEap34 = $numpresupuestoEap34;

        return $this;
    }

    /**
     * Get numpresupuestoEap34
     *
     * @return integer 
     */
    public function getNumpresupuestoEap34()
    {
        return $this->numpresupuestoEap34;
    }

    /**
     * Set numpresupuestoEap35
     *
     * @param integer $numpresupuestoEap35
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap35($numpresupuestoEap35)
    {
        $this->numpresupuestoEap35 = $numpresupuestoEap35;

        return $this;
    }

    /**
     * Get numpresupuestoEap35
     *
     * @return integer 
     */
    public function getNumpresupuestoEap35()
    {
        return $this->numpresupuestoEap35;
    }

    /**
     * Set numpresupuestoEap36
     *
     * @param integer $numpresupuestoEap36
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap36($numpresupuestoEap36)
    {
        $this->numpresupuestoEap36 = $numpresupuestoEap36;

        return $this;
    }

    /**
     * Get numpresupuestoEap36
     *
     * @return integer 
     */
    public function getNumpresupuestoEap36()
    {
        return $this->numpresupuestoEap36;
    }

    /**
     * Set numpresupuestoEap37
     *
     * @param integer $numpresupuestoEap37
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap37($numpresupuestoEap37)
    {
        $this->numpresupuestoEap37 = $numpresupuestoEap37;

        return $this;
    }

    /**
     * Get numpresupuestoEap37
     *
     * @return integer 
     */
    public function getNumpresupuestoEap37()
    {
        return $this->numpresupuestoEap37;
    }

    /**
     * Set numpresupuestoEap38
     *
     * @param integer $numpresupuestoEap38
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap38($numpresupuestoEap38)
    {
        $this->numpresupuestoEap38 = $numpresupuestoEap38;

        return $this;
    }

    /**
     * Get numpresupuestoEap38
     *
     * @return integer 
     */
    public function getNumpresupuestoEap38()
    {
        return $this->numpresupuestoEap38;
    }

    /**
     * Set numpresupuestoEap39
     *
     * @param integer $numpresupuestoEap39
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap39($numpresupuestoEap39)
    {
        $this->numpresupuestoEap39 = $numpresupuestoEap39;

        return $this;
    }

    /**
     * Get numpresupuestoEap39
     *
     * @return integer 
     */
    public function getNumpresupuestoEap39()
    {
        return $this->numpresupuestoEap39;
    }

    /**
     * Set numpresupuestoEap310
     *
     * @param integer $numpresupuestoEap310
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap310($numpresupuestoEap310)
    {
        $this->numpresupuestoEap310 = $numpresupuestoEap310;

        return $this;
    }

    /**
     * Get numpresupuestoEap310
     *
     * @return integer 
     */
    public function getNumpresupuestoEap310()
    {
        return $this->numpresupuestoEap310;
    }

    /**
     * Set numpresupuestoEap311
     *
     * @param integer $numpresupuestoEap311
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap311($numpresupuestoEap311)
    {
        $this->numpresupuestoEap311 = $numpresupuestoEap311;

        return $this;
    }

    /**
     * Get numpresupuestoEap311
     *
     * @return integer 
     */
    public function getNumpresupuestoEap311()
    {
        return $this->numpresupuestoEap311;
    }

    /**
     * Set numpresupuestoEap312
     *
     * @param integer $numpresupuestoEap312
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap312($numpresupuestoEap312)
    {
        $this->numpresupuestoEap312 = $numpresupuestoEap312;

        return $this;
    }

    /**
     * Get numpresupuestoEap312
     *
     * @return integer 
     */
    public function getNumpresupuestoEap312()
    {
        return $this->numpresupuestoEap312;
    }

    /**
     * Set numpresupuestoEap313
     *
     * @param integer $numpresupuestoEap313
     * @return Cuentascontablespresupuestos
     */
    public function setNumpresupuestoEap313($numpresupuestoEap313)
    {
        $this->numpresupuestoEap313 = $numpresupuestoEap313;

        return $this;
    }

    /**
     * Get numpresupuestoEap313
     *
     * @return integer 
     */
    public function getNumpresupuestoEap313()
    {
        return $this->numpresupuestoEap313;
    }

    /**
     * Set numcreadoporId
     *
     * @param integer $numcreadoporId
     * @return Cuentascontablespresupuestos
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
     * @return Cuentascontablespresupuestos
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
     * @return Cuentascontablespresupuestos
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
     * @return Cuentascontablespresupuestos
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
     * @return Cuentascontablespresupuestos
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
