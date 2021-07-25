<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = User::where(['status' => 'siswa'])->get()->count();
        $siswa_x = User::where(['status' => 'siswa', 'class' => 'X'])->get()->count();
        $siswa_xi = User::where(['status' => 'siswa', 'class' => 'XI'])->get()->count();
        $siswa_xii = User::where(['status' => 'siswa', 'class' => 'XII'])->get()->count();
        $guru = User::where(['status' => 'guru'])->get()->count();
        $kandidat = Candidate::get()->count();
        $pemilih = Vote::get()->count();
        return view('admin.dashboard.index', compact('siswa', 'guru', 'pemilih', 'kandidat', 'siswa_x', 'siswa_xi', 'siswa_xii'));
    }
}