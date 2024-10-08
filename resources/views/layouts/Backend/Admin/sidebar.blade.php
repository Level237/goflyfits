<nav class="navbar sidebar navbar-expand-xl navbar-light">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html-1.htm">
            <img class="light-mode-item navbar-brand-item" src="{{ asset('assets/images/logo2.png') }}" alt="logo">
            <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo2.png') }}" alt="logo">
        </a>
    </div>
    <!-- Navbar brand for xl END -->

    <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">

            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">
                <!-- Menu item -->
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link active">Dashboard</a></li>

                <!-- Title -->
                <li class="nav-item ms-2 my-2">Pages</li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
                   Vetements
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.selectGenderView') }}">Créer un look</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.clothings.index') }}">Listes des look</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
                    Categories
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories.create') }}">Créer une categorie</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories.index') }}">Listes des categories</a></li>
                    </ul>
                </li>

                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsebrand" role="button" aria-expanded="false" aria-controls="collapseguest">
                   Marques
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsebrand" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands.create') }}">Créer une marque</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands.index') }}">Listes des marques</a></li>
                    </ul>
                </li>
                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsetown" role="button" aria-expanded="false" aria-controls="collapsetown">
                    Villes
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsetown" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.towns.create') }}">Créer une ville</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.towns.index') }}">Listes des villes</a></li>
                    </ul>
                </li>
                <!-- Menu item -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
                    Utilisateurs
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="admin-agent-list.html">Listes des utilisateurs</a></li>
                        <li class="nav-item"> <a class="nav-link" href="admin-agent-detail.html">Créer un utilisateur</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
                <a class="h6 fw-light mb-0 text-body" href="sign-in.html.htm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                </a>
                <a class="h6 mb-0 text-body" href="admin-settings.html.htm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
                    <i class="bi bi-gear-fill"></i>
                </a>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
