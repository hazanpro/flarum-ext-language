<?php

namespace Flagrow\Language;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->subscribe(Listener\ChangeLanguage::class);
};
