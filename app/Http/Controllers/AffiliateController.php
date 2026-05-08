<?php
namespace App\Http\Controllers; use Inertia\Inertia; use Inertia\Response; class AffiliateController extends Controller { public function index(): Response { $user=request()->user(); return Inertia::render('Affiliate/Index', ['referralLink'=>url('/register?ref='.$user->referral_code),'referrals'=>$user->referrals()->with('referredUser')->latest()->paginate(15)]); } }
