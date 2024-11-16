<?php

namespace App\Service;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{
        /** Get all payment gateway settings and store in cache */
  function getSettings(): array {
    return Cache::rememberForever('settings', function() {
        return Setting::pluck('value', 'key')->toArray(); // ['KEY' => 'VALUE']
    });
  } 

  /** set the settings in config */
  function setGlobalSettings() {
    $settings = $this->getSettings();
    config()->set('settings', $settings);
  }
}
