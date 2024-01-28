<div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @yield('dashboard')" href="#">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('student')" href="{{ url('/student')}}">
          <span data-feather="user"></span>
          Student
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('subject')" href="/subject">
          {{-- <span data-feather="shopping-cart"></span> --}}
          {{-- <span class="bi bi-person"></span> --}}
          <span data-feather="book"></span>

          Subject
        </a>
      </li>
     
    </ul>

  </div>