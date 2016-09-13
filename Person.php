<?php

namespace LabQueue;

/**
 * Class Person
 */
class Person
{
	private $name;
	private $queue_position;
    private $session_id;



    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->session_id = date_timestamp_get();
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getQueuePosition()
    {
        return $this->queue_position;
    }

    /**
     * @param mixed $queue_position
     */
    public function setQueuePosition($queue_position)
    {
        $this->queue_position = $queue_position;
    }

    /**
     * @return int
     */
    public function getSessionId()
    {
        return $this->session_id;
    }



}