<?php

// This file is included at the top of every front facing PHP page.
// It's not recommended to output any html in this file.
// Use this for initialization code that must be run on every page load.

// Set default timezone.
// This is required by newer versions of PHP, otherwise we get the following
// error message:
//   'DateTime::__construct(): It is not safe to rely on the system's timezone
//   settings. You are *required* to use the date.timezone setting or the
//   date_default_timezone_set() function. In case you used any of those methods
//   and you are still getting this warning, you most likely misspelled the
//   timezone identifier. We selected the timezone 'UTC' for now, but please set
//   date.timezone to select your timezone.' )
date_default_timezone_set("UTC");
