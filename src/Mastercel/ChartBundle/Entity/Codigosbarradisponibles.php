<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codigosbarradisponibles
 *
 * @ORM\Table(name="CodigosBarraDisponibles", indexes={@ORM\Index(name="Indice_1", columns={"NumTipoCodigoBarra"})})
 * @ORM\Entity
 */
class Codigosbarradisponibles
{
    /**
     * @var string
     *
     * @ORM\Column(name="StrAsociado_ky", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $strasociadoKy;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumTipoCodigoBarra", type="integer", nullable=true)
     */
    private $numtipocodigobarra = '0';



    /**
     * Get strasociadoKy
     *
     * @return string 
     */
    public function getStrasociadoKy()
    {
        return $this->strasociadoKy;
    }

    /**
     * Set numtipocodigobarra
     *
     * @param integer $numtipocodigobarra
     * @return Codigosbarradisponibles
     */
    public function setNumtipocodigobarra($numtipocodigobarra)
    {
        $this->numtipocodigobarra = $numtipocodigobarra;

        return $this;
    }

    /**
     * Get numtipocodigobarra
     *
     * @return integer 
     */
    public function getNumtipocodigobarra()
    {
        return $this->numtipocodigobarra;
    }
}
