<?php

namespace TwitchApi\Exceptions;

class InvalidLimitException extends InvalidTypeException
{
    public function __construct()
    {
        parent::__construct('Invalid \'limit\' provided. Limit must be a numeric value greater than 0.');
    }
}
