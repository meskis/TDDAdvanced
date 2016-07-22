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
     * @param Conference $conference
     * @param TimeSlot   $timeSlot
     */
    public function present(Conference $conference, TimeSlot $timeSlot)
    {
        $this->conference = $conference;
        $this->timeSlot   = $timeSlot;
    }

    public function answerQuestion($argument1)
    {
        // TODO: write logic here
    }
}
