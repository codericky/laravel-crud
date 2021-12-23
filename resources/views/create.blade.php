@extends('layout.master')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Tambah Data Mahasiswa</h4>
</div>
<div class="panel-body">
    <form action="{{url('insert')}}" method="post">
        <div class="form-group row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="nim" id="nim" class="form-control" required="require">
</div>
</div>
<div class="form-group row">
    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
        </div>
    </div>
<div class="form-group row">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
        <select name="jurusan" class="custom_select form-control" id="jurusan">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="PGSD">PGSD</option>
</select>
    </div>
</div>
<div class="form-group">
    <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">
    {!!csrf_field()!!}
    <div>
</form>
        </div>
    </div>
</div>
@endsection