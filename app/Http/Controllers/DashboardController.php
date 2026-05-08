<?php
namespace App\Http\Controllers; use App\Services\DashboardService; use Inertia\Inertia; use Inertia\Response; class DashboardController extends Controller { public function __invoke(DashboardService $dashboards): Response { return Inertia::render('Dashboard/Index', ['metrics'=>$dashboards->for(request()->user())]); } }
