<?php

namespace TddAdvanced;

class TimeSlot
{
    /**
     * @var Presenter
     */
    private $presenter;

    public function isTaken()
    {
        return isset($this->presenter);
    }

    public function reserveSlotFor(Presenter $presenter)
    {
        $this->presenter = $presenter;
    }
}
