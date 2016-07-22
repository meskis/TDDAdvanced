<?php

namespace spec\TddAdvanced;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TddAdvanced\Conference;
use TddAdvanced\Presenter;
use TddAdvanced\Question;
use TddAdvanced\TimeSlot;

class PresenterSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('named', ['John Smith']);
    }

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

    function it_has_a_name()
    {
        $this->getName()->shouldEqual('John Smith');
    }

    function it_should_have_no_name_when_is_a_guest()
    {
        $this->beConstructedThrough('asGuest');

        $this->getName()->shouldEqual(null);
    }
}
