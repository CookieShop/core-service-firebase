<?php

namespace Adteam\Core\Service\Firebase;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUserCedis
 *
 * @ORM\Table(name="core_user_cedis", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id"})}, indexes={@ORM\Index(name="core_user_cedis_ibfk_1", columns={"user_id"}), @ORM\Index(name="core_user_cedis_ibfk_2", columns={"cedis_id"})})
 * @ORM\Entity
 */
class CoreUserCedis
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
     * @var \Adteam\Core\Service\Firebase\OauthUsers
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\OauthUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \Adteam\Core\Service\Firebase\OauthUsers $user
     *
     * @return CoreUserCedis
     */
    public function setUser(\Adteam\Core\Service\Firebase\OauthUsers $user = null)
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

    /**
     * Set cedis
     *
     * @param \Adteam\Core\Service\Firebase\CoreCedis $cedis
     *
     * @return CoreUserCedis
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
}

