<!-- Hubungkan file CSS eksternal dari Boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Hubungkan file CSS lokal Anda -->
<link rel="stylesheet" href="/css/sidebar.css">

<div class="sidebar">
    <nav>
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">BUKIT</span>
                    <p><span class="profession">Buku Komunikasi ITD</span></p>  
                </div>
            </div>
            <i class='bx bx-chevron-right' toggle></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="{{ route('book.index') }}">
                            <i class='bx bx-home-alt-2' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
