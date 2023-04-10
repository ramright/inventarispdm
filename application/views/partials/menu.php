<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item 
                    <?php if ($this->uri->segment('1') == '') {
                        echo 'active';
                    } ?>">
                        <a class="nav-link" href="<?= base_url('') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 4h6v8h-6z" />
                                    <path d="M4 16h6v4h-6z" />
                                    <path d="M14 12h6v8h-6z" />
                                    <path d="M14 4h6v4h-6z" />
                                </svg>
                                <!-- <img src="<? // base_url('assets/svg/') 
                                                ?>layout-dashboard.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                            </span>
                            <span class="nav-link-title">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment('1') == 'inventarisasi') {
                        echo 'active';
                    } ?>">
                        <a class="nav-link" href="<?= base_url('inventarisasi') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    <path d="M9 12l.01 0" />
                                    <path d="M13 12l2 0" />
                                    <path d="M9 16l.01 0" />
                                    <path d="M13 16l2 0" />
                                </svg>
                                <!-- <img src="<? // base_url('assets/svg/') 
                                                ?>clipboard-list.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                            </span>
                            <span class="nav-link-title">
                                Inventarisasi
                            </span>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment('1') == 'lainnya') {
                        echo 'active';
                    } ?>">
                        <a class="nav-link" href="<?= base_url('lainnya') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                    <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                </svg>
                                <!-- <img src="<? // base_url('assets/svg/') 
                                                ?>focus-centered.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                            </span>
                            <span class="nav-link-title">
                                Lainnya
                            </span>
                        </a>
                    </li>
                    <li class="nav-item 
                    <?php if ($this->uri->segment('1') == 'proses') {
                        echo 'active';
                    } ?>">
                        <a class="nav-link" href="<?= base_url('proses') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M11 16h10" />
                                    <path d="M11 16l4 4" />
                                    <path d="M11 16l4 -4" />
                                    <path d="M13 8h-10" />
                                    <path d="M13 8l-4 4" />
                                    <path d="M13 8l-4 -4" />
                                </svg>
                                <!-- <img src="<? // base_url('assets/svg/') 
                                                ?>arrows-diff.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                            </span>
                            <span class="nav-link-title">
                                Proses
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>