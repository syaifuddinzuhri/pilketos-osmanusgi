@extends('user.layouts.main')

@section('title', 'Login')

@section('content')
<section class="bg-primary">
    <div class="container">
        <div class="row section align-items-center">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Login</h2>
                        <hr>
                        @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <form method="POST" action="{{route('auth.login')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN/NIP</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror"" name=" nisn" id="nisn" placeholder="Masukkan NISN/NIP" value="{{old('nisn')}}">
                                @error('nisn')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"" id=" date_of_birth" name="date_of_birth" placeholder="Masukkan tanggal lahir">
                                @error('date_of_birth')

                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"" name=" password" id="password" placeholder="Masukkan password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <small>Terjadi kendala? Klik untuk hubungi panitia via <a href="https://wa.me/6285648989767?text=Halo%20Kak...%0A%0ASaya%20mengalami%20kendala%20login%20pada%20Sistem%20Online%20Pemilihan%20Ketua%20OSIM%20MA%20NU%20Sunan%20Giri%20Prigen.%0A%0ABagaimana%20untuk%20mengatasi%20kendala%20ini%20kak%3F%0A%0ATerimakasih" target="_blank">WhatsApp</a></small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- @section('script')
<script src="{{asset('js/login.js')}}"></script>
@endsection --}}
