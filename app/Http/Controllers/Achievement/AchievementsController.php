<?php

namespace App\Http\Controllers\Achievement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AchievementsController extends Controller
{
    public function achievement1() {
        return view('achievement.achievement1');
    }
}
