<header>
    <div class="container">
        <h1 class="site-title">Users & Companies</h1>
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">User List</a>
            <a href="{{ route('companies.new') }}" class="{{ request()->is('companies') ? 'active' : '' }}">Add Company</a>
            <a href="{{ route('users.new') }}" class="{{ request()->is('users') ? 'active' : '' }}">Add User</a>
        </nav>
    </div>
</header>
