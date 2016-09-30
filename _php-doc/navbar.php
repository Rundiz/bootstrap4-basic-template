<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Navbar</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <nav class="navbar navbar-light bg-faded">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <ul class="nav navbar-nav">
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
                                            <input class="form-control" type="text" placeholder="Form on left">
                                            <button class="btn btn-outline-secondary" type="button">Button</button>
                                        </form>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav pull-xs-right">
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
                            <nav class="navbar %NAVBAR_CLASS% m-b-1">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar%EXAMPLE_NUMBER%" aria-controls="exResponsiveNavbar%EXAMPLE_NUMBER%" aria-expanded="false" aria-label="Toggle navigation">
                                    &#9776;
                                </button>
                                <div class="clearfix hidden-lg-up"></div>
                                <div class="collapse navbar-toggleable-md" id="exResponsiveNavbar%EXAMPLE_NUMBER%">
                                    <ul class="nav navbar-nav">
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
                                                <input class="form-control" type="text" placeholder="Form on left">
                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav pull-lg-right">
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
                                0 => ['navbar_class' => 'navbar-light bg-faded'],
                                1 => ['navbar_class' => 'navbar-dark bg-inverse'],
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
                            <nav class="navbar %NAVBAR_CLASS% m-b-1">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%" aria-controls="exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%" aria-expanded="false" aria-label="Toggle navigation">
                                    &#9776;
                                </button>
                                <div class="clearfix hidden-lg-up"></div>
                                <div class="collapse navbar-toggleable-md" id="exResponsiveActiveInDropdownNavbar%EXAMPLE_NUMBER%">
                                    <ul class="nav navbar-nav">
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
                                                <input class="form-control" type="text" placeholder="Form on left">
                                                <button class="btn btn-outline-secondary" type="button">Button</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav pull-lg-right">
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


                        <h2>Collapsible content</h2>
                        <div class="example-block">
<?php
                            $navbar_collapsible_example = <<<EOF
                            <nav class="navbar %NAVBAR_CLASS% m-b-1">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar%EXAMPLE_NUMBER%" aria-controls="exCollapsingNavbar%EXAMPLE_NUMBER%" aria-expanded="false" aria-label="Toggle navigation">
                                    &#9776;
                                </button>
                                <div id="exCollapsingNavbar%EXAMPLE_NUMBER%" class="collapse">
                                    <div class="%EXPANDED_AREA_CLASS% p-a-1">
                                        <h4>Collapsed content</h4>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <ul class="nav">
                                                    <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                                    <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6">
                                                <ul class="nav">
                                                    <li class="nav-item"><a class="nav-link active" href="#">แอ็คทีฟ</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">ลิ้งค์</a></li>
                                                    <li class="nav-item"><a class="nav-link disabled" href="#">ปิดใช้งาน</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>

EOF;
                            $color_schemes = [
                                0 => ['navbar_class' => 'navbar-light bg-faded', 'expanded_area_class' => 'bg-inverse'],
                                1 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-inverse'],
                                2 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-danger'],
                                3 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-info'],
                                4 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-primary'],
                                5 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-success'],
                                6 => ['navbar_class' => 'navbar-dark bg-inverse', 'expanded_area_class' => 'bg-warning'],
                                7 => ['navbar_class' => 'navbar-dark bg-danger', 'expanded_area_class' => 'bg-inverse'],
                                8 => ['navbar_class' => 'navbar-dark bg-info', 'expanded_area_class' => 'bg-inverse'],
                                9 => ['navbar_class' => 'navbar-dark bg-primary', 'expanded_area_class' => 'bg-inverse'],
                                10 => ['navbar_class' => 'navbar-dark bg-success', 'expanded_area_class' => 'bg-inverse'],
                                11 => ['navbar_class' => 'navbar-dark bg-warning', 'expanded_area_class' => 'bg-inverse'],
                            ];
                            $i = 1;
                            foreach ($color_schemes as $item) {
                                echo str_replace(['%NAVBAR_CLASS%', '%EXAMPLE_NUMBER%', '%EXPANDED_AREA_CLASS%'], [$item['navbar_class'], $i, $item['expanded_area_class']], $navbar_collapsible_example);
                                $i++;
                            }
                            unset($color_schemes, $i, $item, $navbar_collapsible_example);
?> 
                        </div>


                        <h2>Placement</h2>
                        <div class="example-block example-navbar-block">
                            <nav class="navbar navbar-full navbar-light bg-faded">
                                <a class="navbar-brand" href="#">Full width</a>
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><a class="nav-link active">Active link</a></li>
                                    <li class="nav-item"><a class="nav-link">Link</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="example-block example-navbar-block">
                            <nav class="navbar navbar-fixed-top navbar-light bg-faded">
                                <a class="navbar-brand" href="#">Fixed top</a>
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><a class="nav-link active">Active link</a></li>
                                    <li class="nav-item"><a class="nav-link">Link</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="example-block example-navbar-block">
                            <nav class="navbar navbar-fixed-bottom navbar-light bg-faded">
                                <a class="navbar-brand" href="#">Fixed bottom</a>
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"><a class="nav-link active">Active link</a></li>
                                    <li class="nav-item"><a class="nav-link">Link</a></li>
                                </ul>
                            </nav>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 