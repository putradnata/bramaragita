<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'NIM :') !!}
    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama :') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat :') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Nohp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noHp', 'No. HP :') !!}
    {!! Form::text('noHp', null, ['class' => 'form-control']) !!}
</div>

<!-- Isactive Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isActive', 'Status:') !!}
    {!! Form::select('isActive',['1'=>'Aktif','0'=>'Tidak Aktif'],null,['class'=>'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('anggotas.index') !!}" class="btn btn-default">Cancel</a>
</div>
