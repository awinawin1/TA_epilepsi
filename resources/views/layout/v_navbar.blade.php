<ul class="navbar-nav">
            <li class ="{{request()-> is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/home">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class ="{{request()-> is('history') ? 'active' : ''}}">
              <a class="nav-link active" href="/history">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">History</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/crud">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">CRUD</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>