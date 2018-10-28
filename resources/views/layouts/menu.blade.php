<li class="{{ Request::is('anggotas*') ? 'active' : '' }}">
    <a href="{!! route('anggotas.index') !!}"><i class="fa fa-users"></i><span> Anggota</span></a>
</li>

<li class="{{ Request::is('inventories*') ? 'active' : '' }}">
    <a href="{!! route('inventories.index') !!}"><i class="fa fa-cubes"></i><span> Inventories</span></a>
</li>

