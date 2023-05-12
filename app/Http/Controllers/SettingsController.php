<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class SettingsController
 * @package App\Http\Controllers
 *
 * TODO: Add features for settings
 * - Notification settings
 * - Language settings
 * - Theme settings
 *
 * storing settings in database in a json format
 */

class SettingsController extends Controller
{
    /**
     * Show the settings page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.dashboard.settings');
    }

    /**
     * Update language.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateLanguage(Request $request): RedirectResponse
    {
        session()->put('locale', $request->get('language'));

        return redirect()->back()->with('success', 'Language updated successfully.');
    }
}
