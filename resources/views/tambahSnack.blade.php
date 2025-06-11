@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<body>
    <h3>List Snack</h3>

    <a href="/snack"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke store untuk dilakukan routing --}}
    <form action="/snack/store" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <div>
                <label class="control-label" style="font-weight: 500">Merk Snack </label>
        </div>
        <div class="mb-3">
            <input type="text" name="merksnack" required="required" class="form-control w-70">
        </div>
        </div>
        <div class="mb-3">
            <div>
                <label class="control-label" style="font-weight: 500">Harga </label>
        </div>
        <div class="mb-3">
            <input type="text" name="hargasnack" required="required" class="form-control w-70">
        </div>
        </div>
        <div class="mb-3">
            <div>
                <label class="control-label" style="font-weight: 500">Ketersediaan </label>
        </div>
        <div class="mb-3">
            <input type="number" name="tersedia" required="required" class="form-control w-70" min="0">
        </div>
        </div>
        <div class="mb-3">
            <div>
                <label class="control-label" style="font-weight: 500">Berat </label>
        </div>
        <div class="mb-3">
            <input type="number" name="berat" required="required" class="form-control w-70" min="0">
        </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endsection
{{--
</body>

</html> --}}
