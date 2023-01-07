<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>

    <a href="{{ route('admin.result') }}" class="nav-link {{ Request::is('admin/result') ? 'active' : '' }}">
        <i class="nav-icon fas fa-box"></i>
        <p>النتيجة</p>
    </a>
</li>
