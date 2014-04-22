<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadesclientesaddendas
 *
 * @ORM\Table(name="EntidadesClientesAddendas", indexes={@ORM\Index(name="Indice_1", columns={"NumEmpresa_id", "NumEntidad_id"})})
 * @ORM\Entity
 */
class Entidadesclientesaddendas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumEntidad_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numentidadId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoAddenda", type="integer", nullable=true)
     */
    private $numtipoaddenda = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorEDI", type="string", length=20, nullable=true)
     */
    private $stridentificadoredi;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorEmpresa", type="string", length=20, nullable=true)
     */
    private $stridentificadorempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorCliente", type="string", length=20, nullable=true)
     */
    private $stridentificadorcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="StrIdentificadorEntrega", type="string", length=20, nullable=true)
     */
    private $stridentificadorentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="StrCodigoProveedor", type="string", length=20, nullable=true)
     */
    private $strcodigoproveedor;



    /**
     * Set numentidadId
     *
     * @param integer $numentidadId
     * @return Entidadesclientesaddendas
     */
    public function setNumentidadId($numentidadId)
    {
        $this->numentidadId = $numentidadId;

        return $this;
    }

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
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Entidadesclientesaddendas
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
     * Set numtipoaddenda
     *
     * @param integer $numtipoaddenda
     * @return Entidadesclientesaddendas
     */
    public function setNumtipoaddenda($numtipoaddenda)
    {
        $this->numtipoaddenda = $numtipoaddenda;

        return $this;
    }

    /**
     * Get numtipoaddenda
     *
     * @return integer 
     */
    public function getNumtipoaddenda()
    {
        return $this->numtipoaddenda;
    }

    /**
     * Set stridentificadoredi
     *
     * @param string $stridentificadoredi
     * @return Entidadesclientesaddendas
     */
    public function setStridentificadoredi($stridentificadoredi)
    {
        $this->stridentificadoredi = $stridentificadoredi;

        return $this;
    }

    /**
     * Get stridentificadoredi
     *
     * @return string 
     */
    public function getStridentificadoredi()
    {
        return $this->stridentificadoredi;
    }

    /**
     * Set stridentificadorempresa
     *
     * @param string $stridentificadorempresa
     * @return Entidadesclientesaddendas
     */
    public function setStridentificadorempresa($stridentificadorempresa)
    {
        $this->stridentificadorempresa = $stridentificadorempresa;

        return $this;
    }

    /**
     * Get stridentificadorempresa
     *
     * @return string 
     */
    public function getStridentificadorempresa()
    {
        return $this->stridentificadorempresa;
    }

    /**
     * Set stridentificadorcliente
     *
     * @param string $stridentificadorcliente
     * @return Entidadesclientesaddendas
     */
    public function setStridentificadorcliente($stridentificadorcliente)
    {
        $this->stridentificadorcliente = $stridentificadorcliente;

        return $this;
    }

    /**
     * Get stridentificadorcliente
     *
     * @return string 
     */
    public function getStridentificadorcliente()
    {
        return $this->stridentificadorcliente;
    }

    /**
     * Set stridentificadorentrega
     *
     * @param string $stridentificadorentrega
     * @return Entidadesclientesaddendas
     */
    public function setStridentificadorentrega($stridentificadorentrega)
    {
        $this->stridentificadorentrega = $stridentificadorentrega;

        return $this;
    }

    /**
     * Get stridentificadorentrega
     *
     * @return string 
     */
    public function getStridentificadorentrega()
    {
        return $this->stridentificadorentrega;
    }

    /**
     * Set strcodigoproveedor
     *
     * @param string $strcodigoproveedor
     * @return Entidadesclientesaddendas
     */
    public function setStrcodigoproveedor($strcodigoproveedor)
    {
        $this->strcodigoproveedor = $strcodigoproveedor;

        return $this;
    }

    /**
     * Get strcodigoproveedor
     *
     * @return string 
     */
    public function getStrcodigoproveedor()
    {
        return $this->strcodigoproveedor;
    }
}
