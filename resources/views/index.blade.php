@extends('layout.master')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1; ?>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $d->nim }}</td>
                            <td>{{ $d->nama_lengkap }}</td>
                            <td>{{ $d->jurusan }}</td>
                            <td>
                                <a href="{{url('read',array($d->id))}}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{url('delete',array($d->id))}}" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="{{url('edit',array($d->id))}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
