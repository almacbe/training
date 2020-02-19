<?php

namespace Printer;

class Job
{
    public function toPostScript()
    {
        return 'Document serialized for printer';
    }

    public function getStaplePosition(): array
    {
        return [10, 25];
    }

    public function serializeForFax(): string
    {
        return 'Document serialized for fax';
    }
}
