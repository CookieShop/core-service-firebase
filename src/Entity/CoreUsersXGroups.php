<?php

namespace Adteam\Core\Service\Firebase;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUsersXGroups
 *
 * @ORM\Table(name="core_users_x_groups", indexes={@ORM\Index(name="FK_core_users_x_groups_oauth_users", columns={"user_id"}), @ORM\Index(name="FK_core_users_x_groups_core_groups", columns={"group_id"})})
 * @ORM\Entity
 */
class CoreUsersXGroups
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
     * @var \Adteam\Core\Service\Firebase\CoreGroups
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\CoreGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $group;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set group
     *
     * @param \Adteam\Core\Service\Firebase\CoreGroups $group
     *
     * @return CoreUsersXGroups
     */
    public function setGroup(\Adteam\Core\Service\Firebase\CoreGroups $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Adteam\Core\Service\Firebase\CoreGroups
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set user
     *
     * @param \Adteam\Core\Service\Firebase\OauthUsers $user
     *
     * @return CoreUsersXGroups
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
}

