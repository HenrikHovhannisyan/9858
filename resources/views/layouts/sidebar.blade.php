<div id="sidebar">
    <div class="list-group">
        <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action{{ request()->routeIs('orders.index') ? ' active' : '' }}">
            <span>My Orders</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action{{ request()->is('dashboard/addresses*') ? ' active' : '' }}">
            <span>My Addresses</span>
        </a>
        <a href="{{ route('orders.create') }}" class="list-group-item list-group-item-action{{ request()->routeIs('orders.create') ? ' active' : '' }}">
            <span>Add Parcel</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action{{ request()->is('dashboard/virtual-card*') ? ' active' : '' }}">
            <span>My Virtual Card</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action{{ request()->is('dashboard/settings*') ? ' active' : '' }}">
            <span>Settings</span>
        </a>
    </div>
</div>