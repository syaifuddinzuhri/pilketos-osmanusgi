@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('vendor') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('title', 'Laporan Pemilih')

@section('content')
<div class="container-fluid" style="min-height: 80vh">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Pemilih</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow rounded">
                <div class="card-header">
                    <h5 class="m-0 card-title">Laporan Pemilih</h5>
                </div>
                <div class="card-body">
                    <table id="table-pemilih" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NISN/NIP</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Pilihan Kandidat</th>
                                <th>Nomor Urut Kandidat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-pemilih-modal" tabindex="-1" role="dialog" aria-labelledby="delete-pemilih-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-pemilih-modal-title">Reset Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin akan mereset data?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" id="form-delete-pemilih">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-submit">
                            <i class="fas fa-fw fa-times"></i>
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendor') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('vendor') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('vendor') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('vendor') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="{{asset('js/pemilih.js')}}"></script>

@endsection
