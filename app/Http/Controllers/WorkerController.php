<?php
namespace App\Http\Controllers; use App\Enums\UserRole; use App\Models\User; use Inertia\Inertia; use Inertia\Response; class WorkerController extends Controller { public function index(): Response { $this->authorize('assign', \App\Models\Order::class); return Inertia::render('Workers/Index', ['workers'=>User::where('role',UserRole::Worker)->withCount('workerOrders')->paginate(15)]); } }
