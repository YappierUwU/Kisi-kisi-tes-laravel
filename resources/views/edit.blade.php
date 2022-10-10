<form action="" method="post">
    @method('put')
    @csrf
    <input type="text" name="judul" id="" value="{{old('judul',$buku->judul)}}">
    <input type="text" name="pengarang" id="" value="{{old('pengarang',$buku->pengarang)}}">
    <input type="text" name="penerbit" id="" value="{{old('penerbit',$buku->penerbit)}}">
    <button type="submit">Edit</button>
</form>
