<?php

namespace Flagrow\Hebrew\Listener;

use Flarum\Event\ConfigureLocales;
use Flarum\Locale\LocaleManager;
use Illuminate\Contracts\Events\Dispatcher;

class ChangeLanguage
{
    public function subscribe(Dispatcher $events)
    {
		$events->listen(ConfigureLocales::class, [$this, 'changeLanguage']);
    }

    public function changeLanguage(ConfigureLocales $event)
    {
		//$event->loadLanguagePackFrom(__DIR__);
		//$event->setLocale($file);
		$event->getLocale();
    }
}
