<?php

namespace BugrovWeb\YandexTracker\Api\Entities;

use DateTime as GlobalDateTime;

/**
 * Undocumented class
 */
class DateTime extends GlobalDateTime
{
    public function __construct(string $datetime = "now") {
        parent::__construct($datetime);
    }
}