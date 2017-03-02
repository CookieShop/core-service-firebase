<?php

namespace Adteam\Core\Service\Firebase\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUsersDevices
 *
 * @ORM\Table(name="core_users_devices", indexes={@ORM\Index(name="core_users_devices_1_ibfk_1", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="Adteam\Core\Service\Firebase\Repository\CoreUsersDevicesRepository")
 */
class CoreUsersDevices
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
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $device;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=65535, precision=0, scale=0, nullable=false, unique=false)
     */
    private $payload;

    /**
     * @var \Adteam\Core\Service\Firebase\OauthUsers
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\Entity\OauthUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


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
     * Set device
     *
     * @param string $device
     *
     * @return CoreUsersDevices
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set payload
     *
     * @param string $payload
     *
     * @return CoreUsersDevices
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Set user
     *
     * @param \Adteam\Core\Service\Firebase\Entity\OauthUsers $user
     *
     * @return CoreUsersDevices
     */
    public function setUser(\Adteam\Core\Service\Firebase\Entity\OauthUsers $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Adteam\Core\Service\Firebase\OauthUsers
     */
    public function getUser()
    {
        return $this->user;
    }
}

