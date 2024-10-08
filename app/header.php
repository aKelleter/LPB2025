<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?= $_SESSION['R'].'index.php' ?>" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <img src="<?= $_SESSION['R'].'assets'.DS.'img'.DS.'logo.png'?>"  width="77px" alt=""> <span class="app_name"><?= APP_NAME ?></span>
                    <span class="app_year"><?= APP_YEAR ?></span>           
                </a> 
                

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="<?= $_SESSION['R'].'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'home')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?= $_SESSION['R'].MOD.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'modules')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#book"></use></svg>
                            Modules
                        </a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link <?= ($_SESSION['PAGE'] == 'php')? 'menu-selected': 'menu-normal'; ?> dropdown-toggle" href="<?= $_SESSION['R'].MOD.DS.LPB.DS.PHP.DS.'index.php' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                            Php
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $_SESSION['R'].MOD.DS.LPB.DS.PHP.DS.'index.php' ?>">Présentation</a></li>
                            <li><a class="dropdown-item" href="<?= $_SESSION['R'].MOD.DS.LPB.DS.PHP.DS.LESS.DS.'index.php' ?>">Les leçons</a></li>                                                                                    
                        </ul>
                    </li>         
                    <li>
                        <a href="<?= $_SESSION['R'].MOD.DS.LPB.DS.JS.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'javascript')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                            Javascript
                        </a>
                    </li>
                    <li>
                        <a href="<?= $_SESSION['R'].MOD.DS.LDB.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'ldb')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                            Ldb
                        </a>
                    </li>                   
                </ul>
            </div>
        </div>
    </div>        
</header>
