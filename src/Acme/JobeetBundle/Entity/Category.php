<?php

namespace Acme\JobeetBundle\Entity;

/**
 * @orm:Entity
 * @orm:Table(name="jobeet_category")
 */
class Category
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @orm:Column(type="string", length="255", unique=true)
     */
    protected $name;

    /**
     * @orm:ManyToMany(targetEntity="Affiliate", mappedBy="categories")
     */
    private $affiliates;

    /**
     * @orm:Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @orm:Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Add affiliate
     *
     * @param Acme\JobeetBundle\Entity\Affiliate $affiliate
     */
    public function addAffiliate(\Acme\JobeetBundle\Entity\Affiliate $affiliate)
    {
        $this->affiliates[] = $affiliate;
    }

    /**
     * Get affiliates
     *
     * @return Doctrine\Common\Collections\Collection $affiliates
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }
}
