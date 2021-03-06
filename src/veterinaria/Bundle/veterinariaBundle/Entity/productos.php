<?php

namespace veterinaria\Bundle\veterinariaBundle\Entity;

/**
 * productos
 */
class productos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreProd;

    /**
     * @var integer
     */
    private $costo;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var \DateTime
     */
    private $fechaEntrega;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreProd
     *
     * @param string $nombreProd
     *
     * @return productos
     */
    public function setNombreProd($nombreProd)
    {
        $this->nombreProd = $nombreProd;

        return $this;
    }

    /**
     * Get nombreProd
     *
     * @return string
     */
    public function getNombreProd()
    {
        return $this->nombreProd;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return productos
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return integer
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     *
     * @return productos
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    public function __toString()
    {
        return $this->nombreProd;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\proveedores
     */
    private $proveedores;


    /**
     * Set proveedores
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\proveedores $proveedores
     *
     * @return productos
     */
    public function setProveedores(\veterinaria\Bundle\veterinariaBundle\Entity\proveedores $proveedores = null)
    {
        $this->proveedores = $proveedores;

        return $this;
    }

    /**
     * Get proveedores
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\proveedores
     */
    public function getProveedores()
    {
        return $this->proveedores;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\inventario
     */
    private $inventario;


    /**
     * Set inventario
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\inventario $inventario
     *
     * @return productos
     */
    public function setInventario(\veterinaria\Bundle\veterinariaBundle\Entity\inventario $inventario = null)
    {
        $this->inventario = $inventario;

        return $this;
    }

    /**
     * Get inventario
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\inventario
     */
    public function getInventario()
    {
        return $this->inventario;
    }
    /**
     * @var \veterinaria\Bundle\veterinariaBundle\Entity\ventas
     */
    private $ventas;


    /**
     * Set ventas
     *
     * @param \veterinaria\Bundle\veterinariaBundle\Entity\ventas $ventas
     *
     * @return productos
     */
    public function setVentas(\veterinaria\Bundle\veterinariaBundle\Entity\ventas $ventas = null)
    {
        $this->ventas = $ventas;

        return $this;
    }

    /**
     * Get ventas
     *
     * @return \veterinaria\Bundle\veterinariaBundle\Entity\ventas
     */
    public function getVentas()
    {
        return $this->ventas;
    }
}
