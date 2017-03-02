<?php

namespace Adteam\Core\Service\Firebase;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreOrderCedis
 *
 * @ORM\Table(name="core_order_cedis", indexes={@ORM\Index(name="core_order_cedis_ibfk_1", columns={"cedis_id"}), @ORM\Index(name="core_order_cedis_ibfk_2", columns={"order_id"})})
 * @ORM\Entity
 */
class CoreOrderCedis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Adteam\Core\Service\Firebase\CoreCedis
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\CoreCedis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cedis_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $cedis;

    /**
     * @var \Adteam\Core\Service\Firebase\CoreOrders
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\CoreOrders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $order;


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
     * Set cedis
     *
     * @param \Adteam\Core\Service\Firebase\CoreCedis $cedis
     *
     * @return CoreOrderCedis
     */
    public function setCedis(\Adteam\Core\Service\Firebase\CoreCedis $cedis = null)
    {
        $this->cedis = $cedis;

        return $this;
    }

    /**
     * Get cedis
     *
     * @return \Adteam\Core\Service\Firebase\CoreCedis
     */
    public function getCedis()
    {
        return $this->cedis;
    }

    /**
     * Set order
     *
     * @param \Adteam\Core\Service\Firebase\CoreOrders $order
     *
     * @return CoreOrderCedis
     */
    public function setOrder(\Adteam\Core\Service\Firebase\CoreOrders $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Adteam\Core\Service\Firebase\CoreOrders
     */
    public function getOrder()
    {
        return $this->order;
    }
}

