<!-- Nim Field -->
<div class="form-group">
    {!! Form::label('nim', 'Nim :') !!}
    <p>{!! $anggota->nim !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama :') !!}
    <p>{!! $anggota->nama !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat :') !!}
    <p>{!! $anggota->alamat !!}</p>
</div>

<!-- Nohp Field -->
<div class="form-group">
    {!! Form::label('noHp', 'No. HP :') !!}
    <p>{!! $anggota->noHp !!}</p>
</div>

<!-- Isactive Field -->
<div class="form-group">
    {!! Form::label('isActive', 'Status :') !!}
    @if($anggota->isActive == "1")
        <p>{!! "Aktif" !!}</p>
    @else
        <p>{!! "Tidak Aktif" !!}</p>
    @endif
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At :') !!}
    <p>{!! $anggota->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At :') !!}
    <p>{!! $anggota->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
{{--- <div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At :') !!}
    <p>{!! $anggota->deleted_at !!}</p>
</div> ---}}

