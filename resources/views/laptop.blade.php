<table>
    <thead>
        <tr>
            <th>nama</th>
            <th>jenis</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $laptop as $lap )
            <tr>
                <td>{{$lap->nama}}</td>
                <td>{{$lap->jenis}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
