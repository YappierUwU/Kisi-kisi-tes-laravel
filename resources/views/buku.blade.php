{{-- @if (Session::has('data'))
    @dd(session('data'))
@endif --}}

{{-- @php
    $id = '';
    $judul = '';
    $pengarang = '';
    $penerbit = '';
    if (Session::has('data')) {
        $id = session('data')['id'];
        $judul = session('data')['judul'];
        $pengarang = session('data')['pengarang'];
        $penerbit = session('data')['penerbit'];
    }
@endphp --}}

@php
    if(isset($edit->id)){
        $id = $edit->id;
        $judul = $edit->judul;
        $pengarang = $edit->pengarang;
        $penerbit = $edit->penerbit;
    }else{
        $id = '';
        $judul = '';
        $pengarang = '';
        $penerbit = '';
    }
@endphp



<form action="/buku" method="POST">

    @csrf
    {{-- insert --}}
    {{-- <input type="hidden" name="id" id="" > --}}
    {{-- <input type="text" name="judul" id="" > --}}
    {{-- <input type="text" name="pengarang" id="" > --}}
    {{-- <input type="text" name="penerbit" id="" > --}}

    {{-- <button type="submit"  >Simpan</button> --}}

    {{-- update --}}
    <input type="hidden" name="id" id="" value="{{$id}}">
    <input type="text" name="judul" id="" value="{{$judul}}">
    <input type="text" name="pengarang" id="" value="{{$pengarang}}">
    <input type="text" name="penerbit" id="" value="{{$penerbit}}">

    <button type="submit"  >Simpan</button>

</form>

<br>
<table>
    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $buku )
        <tr>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->pengarang}}</td>
            <td>{{$buku->penerbit}}</td>
            <td><a href="buku/{{$buku->id}}">Hapus</a></td>
            <td><a href="buku/{{$buku->id}}/edit">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
