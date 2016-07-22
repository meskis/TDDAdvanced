<?php

namespace spec\TddAdvanced;

use TddAdvanced\Question;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class QuestionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Question of the day');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Question::class);
    }

    function it_can_be_answered()
    {
        $this->answer('Some answer');
    }
}
