<?php

namespace Adteam\Core\Service\Firebase;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoreReports
 *
 * @ORM\Table(name="core_reports")
 * @ORM\Entity
 */
class CoreReports
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
     * @ORM\Column(name="name", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="columns", type="text", length=65535, precision=0, scale=0, nullable=false, unique=false)
     */
    private $columns;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customized", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $customized;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $modifiedAt;


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
     * Set name
     *
     * @param string $name
     *
     * @return CoreReports
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return CoreReports
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set columns
     *
     * @param string $columns
     *
     * @return CoreReports
     */
    public function setColumns($columns)
    {
        $this->columns = $columns;

        return $this;
    }

    /**
     * Get columns
     *
     * @return string
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Set customized
     *
     * @param boolean $customized
     *
     * @return CoreReports
     */
    public function setCustomized($customized)
    {
        $this->customized = $customized;

        return $this;
    }

    /**
     * Get customized
     *
     * @return boolean
     */
    public function getCustomized()
    {
        return $this->customized;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CoreReports
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     *
     * @return CoreReports
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }
}

