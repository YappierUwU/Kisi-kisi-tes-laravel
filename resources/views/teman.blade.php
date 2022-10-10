<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        @foreach($temans as $teman)
            <tr>
                <td>{{$teman -> nama}}</td>
                <td>{{$teman -> alamat}}</td>
                <td>{{$teman -> telpon}}</td>
                <td><a href="teman/{{$teman->id}}">Hapus</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
