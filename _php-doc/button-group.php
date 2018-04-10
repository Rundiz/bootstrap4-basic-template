<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <header class="mb-3 mt-4">
                            <h1 class="my-0">Button group</h1>
                            <hr class="mb-0 mt-3">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-secondary" type="button">Left</button>
                                <button class="btn btn-secondary" type="button">Middle</button>
                                <button class="btn btn-secondary" type="button">Right</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-secondary" type="button">ซ้าย</button>
                                <button class="btn btn-secondary" type="button">กลาง</button>
                                <button class="btn btn-secondary" type="button">ขวา</button>
                            </div>
                            <hr />
                            <h3>With button options</h3>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-primary" type="button">Primary</button>
                                <button class="btn btn-success" type="button">Success</button>
                                <button class="btn btn-info" type="button">Info</button>
                                <button class="btn btn-warning" type="button">Warning</button>
                                <button class="btn btn-danger" type="button">Danger</button>
                                <button class="btn btn-light" type="button">Light</button>
                                <button class="btn btn-dark" type="button">Dark</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-primary" type="button">ปุ่มหลัก</button>
                                <button class="btn btn-success" type="button">สำเร็จ</button>
                                <button class="btn btn-info" type="button">ข้อมูล</button>
                                <button class="btn btn-warning" type="button">เตือน</button>
                                <button class="btn btn-danger" type="button">อันตราย</button>
                                <button class="btn btn-light" type="button">สว่าง</button>
                                <button class="btn btn-dark" type="button">มืด</button>
                            </div>
                        </div>

                        <h2>Button toolbar</h2>
                        <div class="example-block">
                            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
                                <button class="btn btn-secondary" type="button">1</button>
                                <button class="btn btn-secondary" type="button">2</button>
                                <button class="btn btn-secondary" type="button">3</button>
                                <button class="btn btn-secondary" type="button">4</button>
                            </div>
                            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
                                <button class="btn btn-secondary" type="button">5</button>
                                <button class="btn btn-secondary" type="button">6</button>
                                <button class="btn btn-secondary" type="button">7</button>
                            </div>
                        </div>

                        <h2>Sizing</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-lg">
                                            <button class="btn btn-secondary" type="button">Left</button>
                                            <button class="btn btn-secondary" type="button">Middle</button>
                                            <button class="btn btn-secondary" type="button">Right</button>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary" type="button">Left</button>
                                            <button class="btn btn-secondary" type="button">Middle</button>
                                            <button class="btn btn-secondary" type="button">Right</button>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-secondary" type="button">Left</button>
                                            <button class="btn btn-secondary" type="button">Middle</button>
                                            <button class="btn btn-secondary" type="button">Right</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-lg">
                                            <button class="btn btn-secondary" type="button">ซ้าย</button>
                                            <button class="btn btn-secondary" type="button">กลาง</button>
                                            <button class="btn btn-secondary" type="button">ขวา</button>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary" type="button">ซ้าย</button>
                                            <button class="btn btn-secondary" type="button">กลาง</button>
                                            <button class="btn btn-secondary" type="button">ขวา</button>
                                        </div>
                                    </div>
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-secondary" type="button">ซ้าย</button>
                                            <button class="btn btn-secondary" type="button">กลาง</button>
                                            <button class="btn btn-secondary" type="button">ขวา</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Nesting</h2>
                        <div class="example-block">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" type="button">1</button>
                                <button class="btn btn-secondary" type="button">2</button>
                                <div class="btn-group" role="group">
                                    <button id="btn-group-dropdown1" class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btn-group-dropdown1">
                                        <li class="dropdown-item"><a href="#">Dropdown link</a></li>
                                        <li class="dropdown-item"><a href="#">Dropdown link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="btn-group-dropdown2" class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ดรอปดาวน์
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btn-group-dropdown2">
                                        <li class="dropdown-item"><a href="#">ลิ้งค์</a></li>
                                        <li class="dropdown-item"><a href="#">ลิ้งค์</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h2>Vertical variation</h2>
                        <div class="example-block">
                            <div class="btn-group-vertical">
                                <button class="btn btn-secondary" type="button">Button</button>
                                <button class="btn btn-secondary" type="button">Button</button>
                                <div class="btn-group">
                                    <button id="btn-group-dropdown-vert1" class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                        Dropdown
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btn-group-dropdown-vert1" role="menu">
                                        <li class="dropdown-item"><a href="#">Dropdown link</a></li>
                                        <li class="dropdown-item"><a href="#">Dropdown link</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-secondary" type="button">ปุ่ม</button>
                                <button class="btn btn-secondary" type="button">ปุ่ม</button>
                                <div class="btn-group">
                                    <button id="btn-group-dropdown-vert2" class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                        ดรอปดาวน์
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btn-group-dropdown-vert2" role="menu">
                                        <li class="dropdown-item"><a href="#">ลิ้งค์</a></li>
                                        <li class="dropdown-item"><a href="#">ลิ้งค์</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 