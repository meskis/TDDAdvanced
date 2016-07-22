<?php

namespace spec\TddAdvanced;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Console\Question\Question;
use TddAdvanced\Conference;
use TddAdvanced\Presenter;
use TddAdvanced\TimeSlot;

class PresenterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Presenter::class);
    }

    function it_should_present_at_given_conference(Conference $conference, TimeSlot $timeSlog)
    {
        $this->present($conference, $timeSlog);
    }

    function it_should_answer_question_during_conference(Question $question)
    {
        $this->answerQuestion($question);
    }

    function it_should_not_be_able_to_present_at_busy_time_slot(TimeSlot $timeSlot)
    {
        $timeSlot->isTaken()->willReturn(true);
    }
}
