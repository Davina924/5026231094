<!DOCTYPE html>
<html>
    <body>
    @extends('template')

    @section('content')
        <h3>Edit Snack</h3>

        <a href="/snack" class="d-inline-block">Kembali</a>

        @foreach ($snack as $s)
            <form action="/snack/update" method="post" class="mt-4">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $s->id }}">

                <div class="mb-3">
                    <label class="form-label" style="font-weight: 500">Merk Snack</label>
                    <input type="text" name="merksnack" required="required" class="form-control w-50" value="{{ $s->merksnack }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" style="font-weight: 500">Harga</label>
                    <input type="text" name="hargasnack" required="required" class="form-control w-50" value="{{ $s->hargasnack }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" style="font-weight: 500">Ketersediaan</label>
                    <input type="number" name="tersedia" required="required" class="form-control w-50" min="0" value="{{ $s->tersedia }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" style="font-weight: 500">Berat</label>
                    <input type="number" name="berat" required="required" class="form-control w-50" min="0" step="0.01" value="{{ $s->berat }}">
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach
    @endsection
    </body>

</html>
