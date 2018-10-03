<?php

namespace Westsworld\TimeAgo\Future\Language\Translations;

/**
 * English translations
 */
class En extends \Westsworld\TimeAgo\Language
{
    public function __construct()
    {
        $this->setTranslations([
            'aboutOneDay' => "1 day to go",
            'aboutOneHour' => "about 1 hour to go",
            'aboutOneMonth' => "about 1 month to go",
            'aboutOneYear' => "about 1 year to go",
            'days' => "%s days to go",
            'hours' => "%s hours to go",
            'lessThanAMinute' => "less than a minute to go",
            'lessThanOneHour' => "%s minutes to go",
            'months' => "%s months to go",
            'oneMinute' => "1 minute to go",
            'years' => "over %s years to go",
            'never' => 'Never'
        ]);
    }
}
