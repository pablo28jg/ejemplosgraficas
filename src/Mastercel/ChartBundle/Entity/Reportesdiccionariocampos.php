<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesdiccionariocampos
 *
 * @ORM\Table(name="ReportesDiccionarioCampos")
 * @ORM\Entity
 */
class Reportesdiccionariocampos
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreTabla_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strnombretablaKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrNombreCampo_ky", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $strnombrecampoKy;

    /**
     * @var string
     *
     * @ORM\Column(name="StrAliasCampo", type="string", length=60, nullable=true)
     */
    private $straliascampo;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrSeleccionable", type="string", length=1, nullable=true)
     */
    private $chrseleccionable;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrBuscable", type="string", length=1, nullable=true)
     */
    private $chrbuscable;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrOrdenable", type="string", length=1, nullable=true)
     */
    private $chrordenable;

    /**
     * @var string
     *
     * @ORM\Column(name="StrTipoDato", type="string", length=60, nullable=true)
     */
    private $strtipodato;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrAutoBusqueda", type="string", length=1, nullable=true)
     */
    private $chrautobusqueda;

    /**
     * @var string
     *
     * @ORM\Column(name="ChrMandatorio", type="string", length=1, nullable=true)
     */
    private $chrmandatorio;



    /**
     * Set strnombretablaKy
     *
     * @param string $strnombretablaKy
     * @return Reportesdiccionariocampos
     */
    public function setStrnombretablaKy($strnombretablaKy)
    {
        $this->strnombretablaKy = $strnombretablaKy;

        return $this;
    }

    /**
     * Get strnombretablaKy
     *
     * @return string 
     */
    public function getStrnombretablaKy()
    {
        return $this->strnombretablaKy;
    }

    /**
     * Set strnombrecampoKy
     *
     * @param string $strnombrecampoKy
     * @return Reportesdiccionariocampos
     */
    public function setStrnombrecampoKy($strnombrecampoKy)
    {
        $this->strnombrecampoKy = $strnombrecampoKy;

        return $this;
    }

    /**
     * Get strnombrecampoKy
     *
     * @return string 
     */
    public function getStrnombrecampoKy()
    {
        return $this->strnombrecampoKy;
    }

    /**
     * Set straliascampo
     *
     * @param string $straliascampo
     * @return Reportesdiccionariocampos
     */
    public function setStraliascampo($straliascampo)
    {
        $this->straliascampo = $straliascampo;

        return $this;
    }

    /**
     * Get straliascampo
     *
     * @return string 
     */
    public function getStraliascampo()
    {
        return $this->straliascampo;
    }

    /**
     * Set chrseleccionable
     *
     * @param string $chrseleccionable
     * @return Reportesdiccionariocampos
     */
    public function setChrseleccionable($chrseleccionable)
    {
        $this->chrseleccionable = $chrseleccionable;

        return $this;
    }

    /**
     * Get chrseleccionable
     *
     * @return string 
     */
    public function getChrseleccionable()
    {
        return $this->chrseleccionable;
    }

    /**
     * Set chrbuscable
     *
     * @param string $chrbuscable
     * @return Reportesdiccionariocampos
     */
    public function setChrbuscable($chrbuscable)
    {
        $this->chrbuscable = $chrbuscable;

        return $this;
    }

    /**
     * Get chrbuscable
     *
     * @return string 
     */
    public function getChrbuscable()
    {
        return $this->chrbuscable;
    }

    /**
     * Set chrordenable
     *
     * @param string $chrordenable
     * @return Reportesdiccionariocampos
     */
    public function setChrordenable($chrordenable)
    {
        $this->chrordenable = $chrordenable;

        return $this;
    }

    /**
     * Get chrordenable
     *
     * @return string 
     */
    public function getChrordenable()
    {
        return $this->chrordenable;
    }

    /**
     * Set strtipodato
     *
     * @param string $strtipodato
     * @return Reportesdiccionariocampos
     */
    public function setStrtipodato($strtipodato)
    {
        $this->strtipodato = $strtipodato;

        return $this;
    }

    /**
     * Get strtipodato
     *
     * @return string 
     */
    public function getStrtipodato()
    {
        return $this->strtipodato;
    }

    /**
     * Set chrautobusqueda
     *
     * @param string $chrautobusqueda
     * @return Reportesdiccionariocampos
     */
    public function setChrautobusqueda($chrautobusqueda)
    {
        $this->chrautobusqueda = $chrautobusqueda;

        return $this;
    }

    /**
     * Get chrautobusqueda
     *
     * @return string 
     */
    public function getChrautobusqueda()
    {
        return $this->chrautobusqueda;
    }

    /**
     * Set chrmandatorio
     *
     * @param string $chrmandatorio
     * @return Reportesdiccionariocampos
     */
    public function setChrmandatorio($chrmandatorio)
    {
        $this->chrmandatorio = $chrmandatorio;

        return $this;
    }

    /**
     * Get chrmandatorio
     *
     * @return string 
     */
    public function getChrmandatorio()
    {
        return $this->chrmandatorio;
    }
}
