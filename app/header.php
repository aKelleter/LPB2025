<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?= INST.'index.php' ?>" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <img src="<?= INST.'assets'.DS.'img'.DS.'logo.png'?>"  width="77px" alt=""> <span class="title_app_name"><?= APP_NAME ?></span>
                </a>            

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="<?= INST.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'home')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?= INST.MOD.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'modules')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#book"></use></svg>
                            Modules
                        </a>
                    </li>   
                    <li>
                        <a href="<?= INST.MOD.DS.LPB.DS.PHP.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'php')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                            Php
                        </a>
                    </li>                    
                    <li>
                        <a href="<?= INST.MOD.DS.LPB.DS.JS.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'javascript')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                            Javascript
                        </a>
                    </li>
                    <li>
                        <a href="<?= INST.MOD.DS.LDB.DS.'index.php' ?>" class="nav-link <?= ($_SESSION['PAGE'] == 'ldb')? 'menu-selected': 'menu-normal'; ?>">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                            Ldb
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="#" class="nav-link text-white">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                            Login
                        </a>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>        
</header>
