<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::where('status', Client::STATUS_ACTIVE)->count();
        $projects = Project::count();
        $tasks = Task::whereNot('status', Task::STATUS_DONE)->count();

        return view('pages.dashboard.index', compact('clients', 'projects', 'tasks'));
    }
}
