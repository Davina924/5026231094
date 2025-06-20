    @extends('template')
    @section('content')

    <body>
    <h3>Data Karyawan</h3>

    <div class="table-responsive" style="border-radius: 8px; border: 1px solid #dee2e6;">
    <table class="table">
        <tr class="table table-active">
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mykaryawan as $p)
            <tr>
                <td>{{ $p->kodepegawai}}</td>
                <td>{{ ucfirst($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ ucfirst($p->departemen) }}</td>
                <td>
                <a href="/eas/edit/{{$p->kodepegawai}}" class="btn btn-success">Edit</a>
                <a href="/eas/view/{{$p->kodepegawai}}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

    @endsection

</body>
