<?php

namespace Mastercel\ChartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objetivosplanesterritorios
 *
 * @ORM\Table(name="ObjetivosPlanesTerritorios", indexes={@ORM\Index(name="Indice_1", columns={"NumObjetivoPlan_id"})})
 * @ORM\Entity
 */
class Objetivosplanesterritorios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlanTerritorio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numobjetivoplanterritorioId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumObjetivoPlan_id", type="integer", nullable=true)
     */
    private $numobjetivoplanId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="StrAbreviacion", type="string", length=10, nullable=true)
     */
    private $strabreviacion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrDescripcion", type="string", length=60, nullable=true)
     */
    private $strdescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="StrGrupo", type="string", length=60, nullable=true)
     */
    private $strgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumOrdenAparicion", type="integer", nullable=true)
     */
    private $numordenaparicion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumEmpresa_id", type="integer", nullable=true)
     */
    private $numempresaId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumAlmacen_id", type="integer", nullable=true)
     */
    private $numalmacenId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCentroControl_id", type="integer", nullable=true)
     */
    private $numcentrocontrolId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCategoria_id", type="integer", nullable=true)
     */
    private $numcategoriaId = '0';

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
     * @ORM\Column(name="NumVendedor_1_id", type="integer", nullable=true)
     */
    private $numvendedor1Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_2_id", type="integer", nullable=true)
     */
    private $numvendedor2Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_3_id", type="integer", nullable=true)
     */
    private $numvendedor3Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_4_id", type="integer", nullable=true)
     */
    private $numvendedor4Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_5_id", type="integer", nullable=true)
     */
    private $numvendedor5Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumVendedor_6_id", type="integer", nullable=true)
     */
    private $numvendedor6Id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NumCliente_id", type="integer", nullable=true)
     */
    private $numclienteId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="NumFactorDistribucion", type="float", precision=53, scale=0, nullable=true)
     */
    private $numfactordistribucion = '0';



    /**
     * Get numobjetivoplanterritorioId
     *
     * @return integer 
     */
    public function getNumobjetivoplanterritorioId()
    {
        return $this->numobjetivoplanterritorioId;
    }

    /**
     * Set numobjetivoplanId
     *
     * @param integer $numobjetivoplanId
     * @return Objetivosplanesterritorios
     */
    public function setNumobjetivoplanId($numobjetivoplanId)
    {
        $this->numobjetivoplanId = $numobjetivoplanId;

        return $this;
    }

    /**
     * Get numobjetivoplanId
     *
     * @return integer 
     */
    public function getNumobjetivoplanId()
    {
        return $this->numobjetivoplanId;
    }

    /**
     * Set strabreviacion
     *
     * @param string $strabreviacion
     * @return Objetivosplanesterritorios
     */
    public function setStrabreviacion($strabreviacion)
    {
        $this->strabreviacion = $strabreviacion;

        return $this;
    }

    /**
     * Get strabreviacion
     *
     * @return string 
     */
    public function getStrabreviacion()
    {
        return $this->strabreviacion;
    }

    /**
     * Set strdescripcion
     *
     * @param string $strdescripcion
     * @return Objetivosplanesterritorios
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
     * Set strgrupo
     *
     * @param string $strgrupo
     * @return Objetivosplanesterritorios
     */
    public function setStrgrupo($strgrupo)
    {
        $this->strgrupo = $strgrupo;

        return $this;
    }

    /**
     * Get strgrupo
     *
     * @return string 
     */
    public function getStrgrupo()
    {
        return $this->strgrupo;
    }

    /**
     * Set numordenaparicion
     *
     * @param integer $numordenaparicion
     * @return Objetivosplanesterritorios
     */
    public function setNumordenaparicion($numordenaparicion)
    {
        $this->numordenaparicion = $numordenaparicion;

        return $this;
    }

    /**
     * Get numordenaparicion
     *
     * @return integer 
     */
    public function getNumordenaparicion()
    {
        return $this->numordenaparicion;
    }

    /**
     * Set numempresaId
     *
     * @param integer $numempresaId
     * @return Objetivosplanesterritorios
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
     * Set numalmacenId
     *
     * @param integer $numalmacenId
     * @return Objetivosplanesterritorios
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
     * Set numcentrocontrolId
     *
     * @param integer $numcentrocontrolId
     * @return Objetivosplanesterritorios
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
     * Set numcategoriaId
     *
     * @param integer $numcategoriaId
     * @return Objetivosplanesterritorios
     */
    public function setNumcategoriaId($numcategoriaId)
    {
        $this->numcategoriaId = $numcategoriaId;

        return $this;
    }

    /**
     * Get numcategoriaId
     *
     * @return integer 
     */
    public function getNumcategoriaId()
    {
        return $this->numcategoriaId;
    }

    /**
     * Set numclasificacion1Id
     *
     * @param integer $numclasificacion1Id
     * @return Objetivosplanesterritorios
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
     * @return Objetivosplanesterritorios
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
     * @return Objetivosplanesterritorios
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
     * @return Objetivosplanesterritorios
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
     * Set numvendedor1Id
     *
     * @param integer $numvendedor1Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor1Id($numvendedor1Id)
    {
        $this->numvendedor1Id = $numvendedor1Id;

        return $this;
    }

    /**
     * Get numvendedor1Id
     *
     * @return integer 
     */
    public function getNumvendedor1Id()
    {
        return $this->numvendedor1Id;
    }

    /**
     * Set numvendedor2Id
     *
     * @param integer $numvendedor2Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor2Id($numvendedor2Id)
    {
        $this->numvendedor2Id = $numvendedor2Id;

        return $this;
    }

    /**
     * Get numvendedor2Id
     *
     * @return integer 
     */
    public function getNumvendedor2Id()
    {
        return $this->numvendedor2Id;
    }

    /**
     * Set numvendedor3Id
     *
     * @param integer $numvendedor3Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor3Id($numvendedor3Id)
    {
        $this->numvendedor3Id = $numvendedor3Id;

        return $this;
    }

    /**
     * Get numvendedor3Id
     *
     * @return integer 
     */
    public function getNumvendedor3Id()
    {
        return $this->numvendedor3Id;
    }

    /**
     * Set numvendedor4Id
     *
     * @param integer $numvendedor4Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor4Id($numvendedor4Id)
    {
        $this->numvendedor4Id = $numvendedor4Id;

        return $this;
    }

    /**
     * Get numvendedor4Id
     *
     * @return integer 
     */
    public function getNumvendedor4Id()
    {
        return $this->numvendedor4Id;
    }

    /**
     * Set numvendedor5Id
     *
     * @param integer $numvendedor5Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor5Id($numvendedor5Id)
    {
        $this->numvendedor5Id = $numvendedor5Id;

        return $this;
    }

    /**
     * Get numvendedor5Id
     *
     * @return integer 
     */
    public function getNumvendedor5Id()
    {
        return $this->numvendedor5Id;
    }

    /**
     * Set numvendedor6Id
     *
     * @param integer $numvendedor6Id
     * @return Objetivosplanesterritorios
     */
    public function setNumvendedor6Id($numvendedor6Id)
    {
        $this->numvendedor6Id = $numvendedor6Id;

        return $this;
    }

    /**
     * Get numvendedor6Id
     *
     * @return integer 
     */
    public function getNumvendedor6Id()
    {
        return $this->numvendedor6Id;
    }

    /**
     * Set numclienteId
     *
     * @param integer $numclienteId
     * @return Objetivosplanesterritorios
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
     * Set numfactordistribucion
     *
     * @param float $numfactordistribucion
     * @return Objetivosplanesterritorios
     */
    public function setNumfactordistribucion($numfactordistribucion)
    {
        $this->numfactordistribucion = $numfactordistribucion;

        return $this;
    }

    /**
     * Get numfactordistribucion
     *
     * @return float 
     */
    public function getNumfactordistribucion()
    {
        return $this->numfactordistribucion;
    }
}
