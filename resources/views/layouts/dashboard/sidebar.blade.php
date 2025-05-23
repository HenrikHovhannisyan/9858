<div id="sidebar">
    <div class="list-group">
        <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action{{ request()->routeIs('orders.index') ? ' active' : '' }}">
            <span>My Orders</span>
        </a>
        <a href="{{ route('addresses.index') }}" class="list-group-item list-group-item-action{{ request()->routeIs('addresses.index') ? ' active' : '' }}">
            <span>My Addresses</span>
        </a>
        <a href="{{ route('orders.create') }}" class="list-group-item list-group-item-action{{ request()->routeIs('orders.create') ? ' active' : '' }}">
            <span>Add Parcel</span>
        </a>
        <a href="{{ route('my_card') }}" class="list-group-item list-group-item-action{{ request()->routeIs('my_card') ? ' active' : '' }}">
            <span>My Virtual Card</span>
        </a>
        <a href="{{ route('settings') }}" class="list-group-item list-group-item-action{{ request()->routeIs('settings') ? ' active' : '' }}">
            <span>Settings</span>
        </a>
        <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>