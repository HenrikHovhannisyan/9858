<div class="list-group mb-4">
    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action list-group-item-dark {{ request()->routeIs('admin.dashboard') ? ' active' : '' }}">
        <i class="fa fa-tachometer-alt me-2"></i> Dashboard
    </a>
    <a href="{{ route('users.index') }}" class="list-group-item list-group-item-action list-group-item-dark {{ request()->routeIs('users.index') ? ' active' : '' }}">
        <i class="fa fa-users me-2"></i> Users
    </a>
</div>