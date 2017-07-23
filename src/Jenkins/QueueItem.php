<?php

namespace JenkinsKhan\Jenkins;

use JenkinsKhan\Jenkins;

class QueueItem
{

    /**
     * @var \stdClass
     */
    private $queueItem;

    /**
     * @var Jenkins
     */
    protected $jenkins;

    /**
     * @param \stdClass $queueItem
     * @param Jenkins   $jenkins
     */
    public function __construct($queueItem, Jenkins $jenkins)
    {
        $this->queueItem = $queueItem;
        $this->setJenkins($jenkins);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->queueItem->id; 
    }

    /**
     * @return null|\stdClass
     */
    public function getExecutable()
    {
        return $this->queueItem->executable;
    }

    /**
     * @return Jenkins
     */
    public function getJenkins()
    {
        return $this->jenkins;
    }

    /**
     * @param Jenkins $jenkins
     *
     * @return Queue
     */
    public function setJenkins(Jenkins $jenkins)
    {
        $this->jenkins = $jenkins;

        return $this;
    }
}
