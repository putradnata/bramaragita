<table class="table table-responsive" id="anggotas-table">
    <thead>
        <tr>
        <th>No.</th>
            <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($anggotas as $no => $anggota)
        <tr>
            <td>{!! ++$no !!}</td>
            <td>{!! $anggota->nim !!}</td>
            <td>{!! $anggota->nama !!}</td>
            <td>{!! $anggota->alamat !!}</td>
            <td>{!! $anggota->noHp !!}</td>

            @if($anggota->isActive == "1")
                <td>{!! "Aktif" !!}</td>
            @else
                <td>{!! "Tidak Aktif" !!}</td>
            @endif

            <td>
                {!! Form::open(['route' => ['anggotas.destroy', $anggota->nim], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('anggotas.show', [$anggota->nim]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('anggotas.edit', [$anggota->nim]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>