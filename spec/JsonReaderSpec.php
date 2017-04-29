<?php

declare(strict_types=1);

namespace spec\Devboard\Thesting\Source;

use Devboard\Thesting\Source\JsonReader;
use PhpSpec\ObjectBehavior;

class JsonReaderSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('path/to/files');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(JsonReader::class);
    }
}
