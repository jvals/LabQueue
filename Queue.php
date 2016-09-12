<?php


/**
 * Class Queue
 */
class Queue
{
    private $persons;
    private $current_person;

    /**
     * Queue constructor.
     */
    public function __construct()
    {
        $this->persons = array();
        $this->current_person = null;
    }

    /**
     * Add a person to the end of the queue
     *
     * @param $person
     */
    public function addPerson($person)
    {
        $this->persons[] = $person;
        if ($this->current_person === null or $this->persons.count() === 1)
        {
            $this->current_person = $person;
        }
    }

    /**
     * Remove a person from the queue, regardless of position.
     *
     * @param $person
     */
    public function removePerson($person)
    {
        $person_position = array_search($person, $this->persons);
        unset($this->persons[$person_position]);
    }


    /**
     * Remove the person in the front of the queue, and update current_person to reflect the front.
     *
     */
    public function advance()
    {

    }



}