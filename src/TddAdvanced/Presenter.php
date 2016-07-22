<?php

namespace TddAdvanced;

class Presenter
{
    /**
     * @var TimeSlot
     */
    private $timeSlot;

    /**
     * @var Conference
     */
    private $conference;

    /**
     * @var string
     */
    private $name;

    private function __construct()
    {
    }

    public static function asGuest()
    {
        $presenter = new Presenter();

        return $presenter;
    }

    public static function named($name)
    {
        $presenter = new Presenter();

        $presenter->setName($name);

        return $presenter;
    }

    /**
     * @param Conference $conference
     * @param TimeSlot   $timeSlot
     */
    public function present(Conference $conference, TimeSlot $timeSlot)
    {
        $this->conference = $conference;
        $this->timeSlot   = $timeSlot;
    }

    public function answerQuestion(Question $question)
    {
        $question->answer('My answer');
    }

    public function getName()
    {
        return $this->name;
    }

    private function setName($name)
    {
        $this->name = $name;
    }
}
