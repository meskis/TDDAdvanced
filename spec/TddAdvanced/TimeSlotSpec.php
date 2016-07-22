<?php

namespace spec\TddAdvanced;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TddAdvanced\Presenter;
use TddAdvanced\TimeSlot;

class TimeSlotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TimeSlot::class);
    }

    function it_can_be_taken(Presenter $presenter)
    {
        $this->isTaken()->shouldEqual(false);

        $this->reserveSlotFor($presenter);

        $this->isTaken()->shouldEqual(true);
    }
}
