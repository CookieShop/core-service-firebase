<?php

namespace Adteam\Core\Service\Firebase;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreUserReports
 *
 * @ORM\Table(name="core_user_reports", indexes={@ORM\Index(name="FK_core_user_reports_oauth_users", columns={"user_id"}), @ORM\Index(name="FK_core_user_reports_core_reports", columns={"report_id"})})
 * @ORM\Entity
 */
class CoreUserReports
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
     * @var \Adteam\Core\Service\Firebase\CoreReports
     *
     * @ORM\ManyToOne(targetEntity="Adteam\Core\Service\Firebase\CoreReports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $report;

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
     * Set report
     *
     * @param \Adteam\Core\Service\Firebase\CoreReports $report
     *
     * @return CoreUserReports
     */
    public function setReport(\Adteam\Core\Service\Firebase\CoreReports $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \Adteam\Core\Service\Firebase\CoreReports
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set user
     *
     * @param \Adteam\Core\Service\Firebase\OauthUsers $user
     *
     * @return CoreUserReports
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

