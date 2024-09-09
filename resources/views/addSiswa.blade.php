@extends('layout')
@section('content')
<title>Tambah Siswa Baru</title>
<div class="container mt-4">
    <div class="header text-center fst-italic">
        <h3>Tambah Siswa Baru</h3>
        <p>Lengkapi data siswa</p>
    </div>
    <div class="form">
        <form action="/tambah/store" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            {{-- first name --}}
            <div class="row mb-3">
                <label for="firstName" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>First Name</strong></label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <input type="text" class="form-control" name="firstName" id="firstName"
                        placeholder="First Name" required
                        oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                        oninput="this.setCustomValidity('')" />
                    @if ($errors->has('firstName'))
                        <div class="text-danger">
                            {{  $errors->first('firstName') }}
                        </div>
                    @endif
                </div>
            </div>
            {{-- last name --}}
            <div class="row mb-3">
                <label for="lastName" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Last Name</strong></label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <input type="text" class="form-control" name="lastName" id="lastName"
                        placeholder="Last Name" required
                        oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                        oninput="this.setCustomValidity('')" />
                    @if ($errors->has('lastName'))
                        <div class="text-danger">
                            {{  $errors->first('lastName') }}
                        </div>
                    @endif
                </div>
            </div>
            {{-- jenis kelamin --}}
            <div class="row mb-3">
                <label for="jenis_kelamin" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Jenis Kelamin</strong></label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <select name="jenis_kelamin" class="form-control" >
                        <option value="" disabled selected>Pilih Jenis Kelamin Siswa</option>
                        <option value="1">laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    @if ($errors->has('jenis_kelamin'))
                        <div class="text-danger">
                            {{  $errors->first('jenis_kelamin') }}
                        </div>
                    @endif
                </div>
            </div>
            {{-- usia --}}
            <div class="row mb-3">
                <label for="usia" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Usia</strong></label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <input type="number" class="form-control" min="0" max="150"
                        name="usia" id="usia" placeholder="usia" autocomplete="off" 
                        required oninvalid="this.setCustomValidity('Invalid input')"
                        oninput="this.setCustomValidity('')" />
                    @if ($errors->has('usia'))
                        <div class="text-danger">
                            {{  $errors->first('usia') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row mb-3 justify-content-end mx-3 my-4">
                <div class="col-sm-8 col-md-9 col-xl-10" style="text-align:end;">
                    <input type="submit" class="btn btn-primary mx-3" value="Tambah">
                    <a type="button" class="btn btn-secondary border" href="/">
                    Batal
                </a>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection