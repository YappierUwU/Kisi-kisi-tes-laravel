<table>
        <thead>
            <tr>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            @foreach ( $dhimas as $dhim )
                <tr>
                    <td>{{$dhim->umur}}</td>
                    <td>{{$dhim->alamat}}</td>
                </tr>
            @endforeach
        </tbody>
</table>
