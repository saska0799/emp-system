<nav class="nav flex-column navbar-dark bg-primary p-4">

    <a class="navbar-brand fs-4 fw-bolder" href="/">
        <x-clarity-user-line :style="'width:35px;'" :class="($class ?? '') . '  me-3'" />EMP MANAGE
    </a>
    <hr>

    <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <ul class="navbar-nav flex-column mb-5">
            <li class="nav-item"><a class="nav-link" href="/dashboard">
                    <x-clarity-clock-line :style="'width:15px;'" :class="($class ?? '') . '  me-3'" />
                    Dashboard
                </a></li>
            <hr>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <x-clarity-building-line :style="'width:15px;'" :class="($class ?? '') . '  me-3'" />
                    Department
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/departments">All Departments</a></li>
                    <li><a class="dropdown-item" href="/departments/create">Add Department</a></li>

                </ul>
            </li>
            <hr>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <x-clarity-employee-group-line :style="'width:15px;'" :class="($class ?? '') . '  me-3'" />
                    Employees
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/employees">All Employees</a></li>
                    <li><a class="dropdown-item" href="/employees/create">Add Employee</a></li>
                </ul>
            </li>
        </ul>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</nav>