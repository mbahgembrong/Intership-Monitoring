<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
</li>

<li class="side-menus {{ Request::is('bidangs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bidangs.index') }}"><i class="fas fa-building"></i><span>Bidangs</span></a>
</li>

<li class="side-menus {{ Request::is('stafs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('stafs.index') }}"><i class="fas fa-building"></i><span>Stafs</span></a>
</li>

<li class="side-menus {{ Request::is('instansis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('instansis.index') }}"><i class="fas fa-building"></i><span>Instansis</span></a>
</li>

<li class="side-menus {{ Request::is('siswas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('siswas.index') }}"><i class="fas fa-building"></i><span>Siswas</span></a>
</li>

<li class="side-menus {{ Request::is('pembimbings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pembimbings.index') }}"><i class="fas fa-building"></i><span>Pembimbings</span></a>
</li>

<li class="side-menus {{ Request::is('pkls*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pkls.index') }}"><i class="fas fa-building"></i><span>Pkls</span></a>
</li>

<li class="side-menus {{ Request::is('absensis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('absensis.index') }}"><i class="fas fa-building"></i><span>Absensis</span></a>
</li>

<li class="side-menus {{ Request::is('laporans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('laporans.index') }}"><i class="fas fa-building"></i><span>Laporans</span></a>
</li>

<li class="side-menus {{ Request::is('penilaians*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('penilaians.index') }}"><i class="fas fa-building"></i><span>Penilaians</span></a>
</li>

<li class="side-menus {{ Request::is('notifikasis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('notifikasis.index') }}"><i class="fas fa-building"></i><span>Notifikasis</span></a>
</li>

