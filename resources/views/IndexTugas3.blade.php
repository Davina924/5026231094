<body>
    @extends('template')
    @section('content')

    <h3>Data Karyawan</h3>

	{{-- <form action="/meja/cari" method="GET" class="form-inline">
         <label class="form-label">Cari Data Meja :</label>
		<input type="text" name="cari" placeholder="Cari Meja ..." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form> --}}

    <div class="table-responsive" style="border-radius: 8px; border: 1px solid #dee2e6;">
    <table class="table">
        <tr class="table table-active">
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai}}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawanlat3/hapus/{{ $p->kodepegawai }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-2 mb-3">
        <a href="/karyawanlat3/tambah" class="btn btn-info"> + Tambah Karyawan Baru</a>
    </div>
    @endsection

</body>
