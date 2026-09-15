<?php

use Heritage\Foundation\Inspiring;
use Heritage\Support\Facades\Scribe;
use Heritage\Support\Facades\Schedule;

Scribe::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('chirps:delete-all')->hourly();
