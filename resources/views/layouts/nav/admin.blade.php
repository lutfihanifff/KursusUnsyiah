<li class="nav-item">
            <a href="{{route('dash.index')}}" class="nav-link {{ (request()->is('q/dash')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-header">Master Data</li>
          <li class="nav-item   ">
            <a href="{{route('program.index')}}" class="nav-link {{ (request()->is('q/program')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>Program</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('materi.index')}}" class="nav-link {{ (request()->is('q/materi')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>Materi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link {{ (request()->is('q/user')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>User</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('peserta.index')}}" class="nav-link {{ (request()->is('q/peserta')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Peserta</p>
            </a>
          </li>

          <li class="nav-header">Administrasi</li>
          <li class="nav-item">
            <a href="{{route('kursus.index')}}" class="nav-link {{ (request()->is('q/kursus')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>Kursus</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('absensi.index')}}" class="nav-link {{ (request()->is('q/absensi')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Absensi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('sertifikat.index')}}" class="nav-link {{ (request()->is('q/sertifikat')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>Sertifikat</p>
            </a>
          </li>
