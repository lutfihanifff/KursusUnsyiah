<li class="nav-item">
            <a href="{{route('dash.index')}}" class="nav-link {{ (request()->is('q/dash')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">Kursus</li>
          <li class="nav-item   ">
            <a href="{{route('nilat.index')}}" class="nav-link {{ (request()->is('q/nilai/teori')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Nilai Teori</p>
            </a>
          </li>

          <li class="nav-item   ">
            <a href="{{route('nilai.index')}}" class="nav-link {{ (request()->is('q/nilai/praktik')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Nilai Praktik</p>
            </a>
          </li>