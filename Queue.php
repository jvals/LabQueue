<?php

namespace LabQueue;

use LabQueue\Person;

/**
 * Class Queue
 */
class Queue
{
    private $persons;

    /**
     * @return array
     */
    public function getPersons()
    {
        return $this->persons;
    }
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
    public function addPerson(Person $person)
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
        if ($person_position === 1) {
            // Can't remove a person if the person is in front.
        }
        unset($this->persons[$person_position]);
        $this->persons = array_values($this->persons);
    }


    /**
     * Remove the person in the front of the queue, and update current_person to reflect the front.
     *
     */
    public function advance()
    {

    }

    public function length()
    {
        return count($this->persons);
    }



}

/*$p1 = new Person("Per");
$p2 = new Person("Karl");
$p3 = new Person("Tor");


$q = new Queue();
$q->addPerson($p1);
$q->addPerson($p2);
$q->addPerson($p3);


$q->removePerson($p2);

foreach ($q->getPersons() as $index => $person)
{
    echo $person->getName()."\n";
    echo $index;
}*/

