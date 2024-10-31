<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    //

    function index(): View
    {
        return view('admin.setting.general-settings');
    }

    function updateGeneralSettings(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'site_name' => ['required'],
            'phone' => ['nullable'],
            'location' => ['nullable'],
            'default_currency' => ['required'],
            'currency_icon' => ['required']
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value
            ]);
        }

        Cache::forget('settings');

        notyf()->success('Update Successfully!');
        return redirect()->back();
    }


    function commissionSettingIndex(): View
    {
        return view('admin.setting.commission-settings');
    }

    function updateCommissionSetting(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'commission_rate' => ['required', 'numeric'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value
            ]);
        }

        Cache::forget('settings');

        notyf()->success('Update Successfully!');
        return redirect()->back();
    }

    function smtpSetting(): View
    {
        return view('admin.setting.smtp-settings');
    }

    function updateSmtpSetting(Request $request): RedirectResponse
    {
       $validatedData = $request->validate([
            'receiver_email' => ['required', 'email', 'max:255'],
            'sender_email' => ['required', 'email', 'max:255'],
        ]);

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value
            ]);
        }

        Cache::forget('settings');

        notyf()->success('Update Successfully!');
        return redirect()->back();
    }
}
