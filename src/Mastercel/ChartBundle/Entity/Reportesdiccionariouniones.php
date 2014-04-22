<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesdiccionariouniones
 *
 * @ORM\Table(name="ReportesDiccionarioUniones")
 * @ORM\Entity
 */
class Reportesdiccionariouniones
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla_1_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strnombretabla1Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla_2_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strnombretabla2Ky;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrTipoUnion", type="string", length=60, nullable=true)
     */
    private $chrtipounion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampos_1", type="string", length=255, nullable=true)
     */
    private $strnombrecampos1;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampos_2", type="string", length=255, nullable=true)
     */
    private $strnombrecampos2;

    /**
     * @var string
     *
     * @ORM\Column(name="StrOperadores", type="string", length=60, nullable=true)
     */
    private $stroperadores;



    /**
     * Set strnombretabla1Ky
     *
     * @param string $strnombretabla1Ky
     * @return Reportesdiccionariouniones
     */
    public function setStrnombretabla1Ky($strnombretabla1Ky)
    {
        $this->strnombretabla1Ky = $strnombretabla1Ky;

        return $this;
    }

    /**
     * Get strnombretabla1Ky
     *
     * @return string 
     */
    public function getStrnombretabla1Ky()
    {
        return $this->strnombretabla1Ky;
    }

    /**
     * Set strnombretabla2Ky
     *
     * @param string $strnombretabla2Ky
     * @return Reportesdiccionariouniones
     */
    public function setStrnombretabla2Ky($strnombretabla2Ky)
    {
        $this->strnombretabla2Ky = $strnombretabla2Ky;

        return $this;
    }

    /**
     * Get strnombretabla2Ky
     *
     * @return string 
     */
    public function getStrnombretabla2Ky()
    {
        return $this->strnombretabla2Ky;
    }

    /**
     * Set chrtipounion
     *
     * @param string $chrtipounion
     * @return Reportesdiccionariouniones
     */
    public function setChrtipounion($chrtipounion)
    {
        $this->chrtipounion = $chrtipounion;

        return $this;
    }

    /**
     * Get chrtipounion
     *
     * @return string 
     */
    public function getChrtipounion()
    {
        return $this->chrtipounion;
    }

    /**
     * Set strnombrecampos1
     *
     * @param string $strnombrecampos1
     * @return Reportesdiccionariouniones
     */
    public function setStrnombrecampos1($strnombrecampos1)
    {
        $this->strnombrecampos1 = $strnombrecampos1;

        return $this;
    }

    /**
     * Get strnombrecampos1
     *
     * @return string 
     */
    public function getStrnombrecampos1()
    {
        return $this->strnombrecampos1;
    }

    /**
     * Set strnombrecampos2
     *
     * @param string $strnombrecampos2
     * @return Reportesdiccionariouniones
     */
    public function setStrnombrecampos2($strnombrecampos2)
    {
        $this->strnombrecampos2 = $strnombrecampos2;

        return $this;
    }

    /**
     * Get strnombrecampos2
     *
     * @return string 
     */
    public function getStrnombrecampos2()
    {
        return $this->strnombrecampos2;
    }

    /**
     * Set stroperadores
     *
     * @param string $stroperadores
     * @return Reportesdiccionariouniones
     */
    public function setStroperadores($stroperadores)
    {
        $this->stroperadores = $stroperadores;

        return $this;
    }

    /**
     * Get stroperadores
     *
     * @return string 
     */
    public function getStroperadores()
    {
        return $this->stroperadores;
    }
}
