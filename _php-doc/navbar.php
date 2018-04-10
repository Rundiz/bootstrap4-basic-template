<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <header class="mb-3 mt-4">
                            <h1 class="my-0">Navbar</h1>
                            <hr class="mb-0 mt-3">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <nav class="navbar navbar-expand-md navbar-light bg-light">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <ul class="navbar-nav">
                                    <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <form class="form-inline">
                                            <input class="form-control mr-1" type="text" placeholder="Form on left">
                                            <button class="btn btn-outline-secondary" type="button">Button</button>
                                        </form>
                                    </li>
                                </ul>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <form class="form-inline">
                                            <input class="form-control" type="text" placeholder="Form on right">
                                        </form>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>


                        <h2>Responsive navbar</h2>
                        <div class="example-block">
<?php
                            $navbar_responsive_example = <<<EOF
                            <nav class="navbar navbar-expand-md %NAVBAR_CLASS% mb-3">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar%EXAMPLE_NUMBER%" aria-controls="exResponsiveNavbar%EXAMPLE_NUMBER%" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="exResponsiveNavbar%EXAMPLE_NUMBER%">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <form class="form-inline">
                                                <input class="form-control mr-1" type="text" placeholder="Form on left">
                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

EOF;
                            $color_schemes = [
                                0 => ['navbar_class' => 'navbar-light bg-light'],
                                1 => ['navbar_class' => 'navbar-dark bg-dark'],
                                2 => ['navbar_class' => 'navbar-dark bg-danger'],
                                3 => ['navbar_class' => 'navbar-dark bg-info'],
                                4 => ['navbar_class' => 'navbar-dark bg-primary'],
                                5 => ['navbar_class' => 'navbar-dark bg-success'],
                                6 => ['navbar_class' => 'navbar-dark bg-warning'],
                            ];
                            $i = 1;
                            foreach ($color_schemes as $item) {
                                echo str_replace(['%NAVBAR_CLASS%', '%EXAMPLE_NUMBER%'], [$item['navbar_class'], $i], $navbar_responsive_example);
                                $i++;
                            }
                            unset($i, $item, $navbar_responsive_example);
?> 
                            <h3>Actived menu in dropdown menu</h3>
<?php
                            $navbar_responsive_example = <<<EOF
                            <nav class="navbar navbar-expand-md %NAVBAR_CLASS% mb-3">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%" aria-controls="exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%" aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item active" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <form class="form-inline">
                                                <input class="form-control mr-1" type="text" placeholder="Form on left">
                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

EOF;
                            $i = 1;
                            foreach ($color_schemes as $item) {
                                echo str_replace(['%NAVBAR_CLASS%', '%EXAMPLE_NUMBER%'], [$item['navbar_class'], $i], $navbar_responsive_example);
                                $i++;
                            }
                            unset($color_schemes, $i, $item, $navbar_responsive_example);
?> 
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 