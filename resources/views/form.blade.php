<form action="{{ route('hitung')}}" method="post">
    @csrf
    <input type="number" name="bil1" placeholder="Bilangan 1">
    <input type="number" name="bil2" placeholder="Bilangan 2">

    {{-- <input type="submit" value="Hitung" name="submit"> --}}
    <button type="submit" onclick="">Hitung </button>
</form>
