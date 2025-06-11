@extends('template')

@section('content')
    <h3 class="mb-3" style="font-weight: bold;">List Snack</h3>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Form pencarian -->
        <form action="/snack/cari" method="GET" class="form-inline d-flex align-items-center">
            <div class="position-relative">
                <input type="text"
                       name="cari"
                       placeholder="Cari Nama Snack"
                       class="form-control rounded-pill px-4"
                       style="background-color: #f8f9fa; padding-right: 45px; width: 300px; border: 1px solid #dfe1e5;">
                <button type="submit"
                        class="btn position-absolute top-50 end-0 translate-middle-y border-0"
                        style="background: none; right: 12px;">
                    <i class="fa-solid fa-magnifying-glass" style="color: #9aa0a6;"></i>
                </button>
            </div>
        </form>

        <!-- Form jumlah snack dan tombol tambah -->
        <div class="d-flex align-items-center gap-3">
            <div class="text-secondary" style="margin-right: 7px;">
                <span class="text-success fw-bold">{{ $availableSnacks }}</span>/{{ $totalSnacks }} Snack Tersedia
            </div>
            <a href="/snack/tambah" class="btn btn-outline-info" style="border-radius: 25px">+ Tambah Snack Baru</a>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive" style="border-radius: 8px; overflow: hidden; border: 1px solid #dee2e6;">
    <table class="table table-hover">
        <tr class="table table-active" style="text-align: center;">
            <th>Merk Snack</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat</th>
            <th style="padding-right: 0px;">Opsi</th>
        </tr>
        @foreach ($snack as $s)
            <tr>
                <td>{{ $s->merksnack }}</td>
                <td style="text-align: center">{{ $s->hargasnack }}</td>
                <td style="text-align: center">
                    <span class="{{ $s->status_class }} rounded-pill px-3 py-1 text-white">
                        {{ $s->status_tersedia }}
                    </span>
                </td>
                <td style="text-align: center">{{ $s->berat }}</td>
                <td style="text-align: center; padding-right: 0px;">
                    <a href="/snack/edit/{{ $s->id }}" class="btn btn-outline-warning">Edit</a>
                    <a data-href="/snack/hapus/{{ $s->id }}" class="btn btn-outline-danger"
                    style="margin-left: 20px;"
                    data-bs-toggle="modal"
                    data-bs-target="#deleteModal"
                    data-name="{{ $s->merksnack }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    <div class="mt-4">
    {{ $snack->links() }}
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close border-0 shadow-none p-0" data-bs-dismiss="modal" aria-label="Close" style="background: none;">
                    <i class="fa-solid fa-x" style="color: #292929; font-size: 1.2rem;"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah Anda yakin ingin menghapus <span id="deleteItemName"></span>?</p>
            </div>
            <div class="modal-footer justy-content-center border-top-0">
                <a href="" id="deleteLink" class="btn btn-outline-success px-4">Yes</a>
                <button type="button" class="btn btn-outline-danger px-4" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget;
    var name = button.getAttribute('data-name');
    var href = button.getAttribute('data-href');

    document.getElementById('deleteItemName').textContent = name;
    document.getElementById('deleteLink').href = href;
    });
});
</script>
    @endsection
