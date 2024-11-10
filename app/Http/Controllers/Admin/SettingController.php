<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    use FileUpload;

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

            'mail_mailer' => ['required', 'string', 'max:255'],
            'mail_host' => ['required', 'string', 'max:255'],
            'mail_port' => ['required', 'numeric'],
            'mail_port' => ['required', 'string', 'max:255'],
            'mail_username' => ['required', 'string', 'max:255'],
            'mail_password' => ['required', 'string', 'max:255'],
            'mail_encryption' => ['required', 'string', 'max:255'],
            'mail_queue' => ['required', 'boolean'],

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


    function logoSettingIndex() : View
    {
        return view('admin.setting.logo-settings');  
    }

    function updateLogoSetting(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
            'site_logo' => ['nullable', 'image', 'max:3000'],
            'site_footer_logo' => ['nullable', 'image', 'max:3000'],
            'site_favicon' => ['nullable', 'image', 'max:3000'],
            'site_breadcrumb' => ['nullable', 'image', 'max:3000'],
        ]);

        if ($request->hasFile('site_logo')) {
            $validatedData['site_logo'] = $this->uploadFile($request->file('site_logo'));
            $this->deleteFile(config('settings.site_logo'));
        }
        if ($request->hasFile('site_footer_logo')) {
            $validatedData['site_footer_logo'] = $this->uploadFile($request->file('site_footer_logo'));
            $this->deleteFile(config('settings.site_footer_logo'));
        }
        if ($request->hasFile('site_favicon')) {
            $validatedData['site_favicon'] = $this->uploadFile($request->file('site_favicon'));
            $this->deleteFile(config('settings.site_favicon'));

        }
        if ($request->hasFile('site_breadcrumb')) {
            $this->deleteFile(config('settings.site_breadcrumb'));
            $validatedData['site_breadcrumb'] = $this->uploadFile($request->file('site_breadcrumb'));
        }

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
