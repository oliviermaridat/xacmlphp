<?php
namespace Xacmlphp;

/**
 * Set of Policies, complete with it's own combining algorithm
 *
 * @package Xacmlphp
 */
class PolicySet
{

    /**
     * Set of Policies
     *
     * @var array
     */
    private $policies = array();

    /**
     * Policies target
     *
     * @var Resource/action/environment it applies to
     */
    private $target = null;

    /**
     * Combining algorithm
     *
     * @var \Xacmlphp\Algorithm
     */
    private $algorithm = null;

    /**
     * Policy set description
     *
     * @var string
     */
    private $description = null;

    /**
     * Add a new policy to the set
     *
     * @param \Xacmlphp\Policy $policy
     *            Policy object
     * @return \Xacmlphp\PolicySet
     */
    public function addPolicy(\Xacmlphp\Policy $policy)
    {
        $this->policies[] = $policy;
        return $this;
    }

    /**
     * Get all current policies
     *
     * @return array Set of policies
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Set the PolicySet combining algorithm
     *
     * @param \Xacmlphp\Algorithm $algorithm
     *            Combining algorithm
     * @return \Xacmlphp\PolicySet
     */
    public function setAlgorithm(\Xacmlphp\Algorithm $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Get the current combining Algorithm
     *
     * @return \Xacmlphp\Algorithm instance
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set the Policy description
     *
     * @param string $description            
     * @return \Xacmlphp\PolicySet instance
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get teh current description
     *
     * @return string Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the policies target
     *
     * @param string $target
     *            Target path of related
     *            resource/action/environment
     * @return \Xacmlphp\PolicySet instance
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Get the current policies target
     *
     * @return string Target path
     */
    public function getTarget()
    {
        return $this->target;
    }
}
