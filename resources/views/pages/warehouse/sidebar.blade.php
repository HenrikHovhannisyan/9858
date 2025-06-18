<div class="list-group mb-4">
    <a href="{{ route('warehouse.dashboard') }}" class="list-group-item list-group-item-action list-group-item-dark {{ request()->routeIs('warehouse.dashboard') ? ' active' : '' }}">
        <i class="fa fa-tachometer-alt me-2"></i> Dashboard
    </a>
    </a>
    <a href="{{ route('w-order.index') }}" class="list-group-item list-group-item-action list-group-item-dark {{ request()->routeIs('w-order.index') ? ' active' : '' }}">
        <i class="fa fa-box-open me-2"></i> Orders
    </a>
</div>