<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reportesdiccionariotablas
 *
 * @ORM\Table(name="ReportesDiccionarioTablas")
 * @ORM\Entity
 */
class Reportesdiccionariotablas
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
     * @ORM\Column(name="StrAliasTabla", type="string", length=60, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $straliastabla;



    /**
     * Set strnombretablaKy
     *
     * @param string $strnombretablaKy
     * @return Reportesdiccionariotablas
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
     * Set straliastabla
     *
     * @param string $straliastabla
     * @return Reportesdiccionariotablas
     */
    public function setStraliastabla($straliastabla)
    {
        $this->straliastabla = $straliastabla;

        return $this;
    }

    /**
     * Get straliastabla
     *
     * @return string 
     */
    public function getStraliastabla()
    {
        return $this->straliastabla;
    }
}
