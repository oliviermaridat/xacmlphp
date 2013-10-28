<?php
namespace Xacmlphp;

/**
 * Policy definition
 *
 * @package Xacmlphp
 */
class Policy
{

    /**
     * Set of policy rules
     * 
     * @var array
     */
    private $rules = array();

    /**
     * Policy target
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
     * Version of the policy
     * 
     * @var string
     */
    private $version = '1.0';

    /**
     * Obligations to perform after match
     * 
     * @var array
     */
    private $obligations = array();

    /**
     * Conditional advice to follow after match
     * 
     * @var array
     */
    private $advice = array();

    /**
     * Description of the policy
     * 
     * @var string
     */
    private $description = '';

    /**
     * Policy ID (Ex.
     * "Policy1")
     * 
     * @var string
     */
    private $id = null;

    /**
     * Action instance
     * 
     * @var \Xacmlphp\Action
     */
    private $action = null;

    /**
     * Add a new Rule to the Policy
     *
     * @param \Xacmlphp\Rule $rule
     *            Policy rule object
     * @return \Xacmlphp\Policy instance
     */
    public function addRule(\Xacmlphp\Rule $rule)
    {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * Get the current rule set
     *
     * @return array Rule set
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set the policy target
     *
     * @param string $target
     *            Target path of related
     *            resource/action/environment
     * @return \Xacmlphp\Policy instance
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Get the current Policy target
     *
     * @return string Target path
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set the Policy description
     *
     * @param string $description            
     * @return \Xacmlphp\Policy instance
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
     * Set the combining Algorithm to use for Policy's rule results
     *
     * @param mixed $algorithm
     *            Algorithm name or object instance
     * @return \Xacmlphp\Policy instance
     */
    public function setAlgorithm($algorithm)
    {
        if (is_string($algorithm)) {
            $algorithmClass = '\\Xacmlphp\\Algorithm\\' . $algorithm;
            if (! class_exists($algorithmClass)) {
                throw new \InvalidArgumentException('Invalid algorithm ' . $algorithm);
            }
            $algorithm = new $algorithmClass();
        }
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Get the current combining Algorithm
     *
     * @return \Xacmlphp\Algorithm Combining algorithm
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set the Polidy ID
     *
     * @param string $id
     *            Policy ID
     * @return string Policy ID
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the current Policy ID
     *
     * @return string Policy ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add an action
     *
     * @param \Xacmlphp\Action $action
     *            Action instance
     */
    public function addAction(\Xacmlphp\Action $action)
    {
        $this->action = $action;
    }

    /**
     * Get the current action
     *
     * @return \Xacmlphp\Action Action instance
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get the current Policy version
     *
     * @return string Policy version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the Polidy version
     *
     * @param string $id
     *            Policy version
     * @return string Policy version
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}