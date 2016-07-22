<?php

namespace spec\TddAdvanced;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TddAdvanced\Conference;

class ConferenceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Conference::class);
    }

    function it_be_busy_when_presenter_is_presenting()
    {
        $this->isBusy()->shouldEqual(true);
    }
}
