<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    public function pemilih(Request $request)
    {
        $data = Vote::with('user', 'candidate')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $button = '<div class="btn-group" role="group">';
                    $button .= '<a href="javascript:void(0)" data-toggle="modal" data-id="' . $row->id . '" data-target="#delete-pemilih-modal" class="btn btn-sm btn-danger btn-delete-pemilih"><i class="fas fa-fw fa-times"></i> Reset</a>';
                    $button .= '</div>';
                    return $button;
                })
                ->editColumn('candidate', function ($row) {
                    return $row->candidate->user->name;
                })
                ->editColumn('order', function ($row) {
                    return '<span class="badge badge-primary p-2">' . $row->candidate->order . '</span>';
                })
                ->rawColumns(['action', 'candidate', 'order'])
                ->make(true);
        }
        return view('admin.pemilih.index', compact('data'));
    }

    public function destroyPemilih($id)
    {
        $data = Vote::findOrFail($id);
        $data->delete();
        toast('Data berhasil di reset.', 'success');
        return redirect()->back();
    }
}