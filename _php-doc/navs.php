<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Navs</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Base nav</h2>
                        <h3>Using <code>ul</code></h3>
                        <div class="example-block">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                            </ul>
                        </div>
                        <h3>Using <code>nav</code></h3>
                        <div class="example-block">
                            <nav class="nav">
                                <a class="nav-link active" href="#">Active</a>
                                <a class="nav-link" href="#">Link</a>
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </nav>
                            <hr>
                            <nav class="nav">
                                <a class="nav-link active" href="#">แอ็คทีฟ</a>
                                <a class="nav-link" href="#">ลิ้งค์</a>
                                <a class="nav-link disabled" href="#">ปิดใช้งาน</a>
                            </nav>
                        </div>

                        <h2>Inline</h2>
                        <div class="example-block">
                            <ul class="nav nav-inline">
                                <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                            </ul>
                            <hr>
                            <nav class="nav nav-inline">
                                <a class="nav-link active" href="#">แอ็คทีฟ</a>
                                <a class="nav-link" href="#">ลิ้งค์</a>
                                <a class="nav-link disabled" href="#">ปิดใช้งาน</a>
                            </nav>
                        </div>

                        <h2>Tabs</h2>
                        <div class="example-block">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#">แอ็คทีฟ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">ลิ้งค์</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">ปิดใช้งาน</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ดรอปดาวน์</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">การกระทำ</a>
                                        <a class="dropdown-item" href="#">การกระทำอื่นๆ</a>
                                        <a class="dropdown-item" href="#">บางอย่างที่นี่</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">ลิ้งค์แยก</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h2>Pills</h2>
                        <div class="example-block">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#">แอ็คทีฟ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">ลิ้งค์</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">ปิดใช้งาน</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ดรอปดาวน์</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">การกระทำ</a>
                                        <a class="dropdown-item" href="#">การกระทำอื่นๆ</a>
                                        <a class="dropdown-item" href="#">บางอย่างที่นี่</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">ลิ้งค์แยก</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3>Stacked pills</h3>
                        <div class="example-block">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-item"><a class="nav-link active" href="#">แอ็คทีฟ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">ลิ้งค์</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#">ปิดใช้งาน</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ดรอปดาวน์</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">การกระทำ</a>
                                        <a class="dropdown-item" href="#">การกระทำอื่นๆ</a>
                                        <a class="dropdown-item" href="#">บางอย่างที่นี่</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">ลิ้งค์แยก</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h2>JavaScript behavior</h2>
                        <h3>Use the tab</h3>
                        <div class="example-block">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Tab 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Tab 2</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#" onclick="return false;">Tab 3 Disabled</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tab 4</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#tab41" data-toggle="tab">Tab 4.1</a>
                                        <a class="dropdown-item" href="#tab42" data-toggle="tab">Tab 4.2</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1" role="tabpanel">
                                    <p>Tab 1 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <p>Tab 2 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <p>Tab 3 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                    <p>Tab 4 content</p>
                                </div>
                                <div class="tab-pane fade" id="tab41" role="tabpanel">
                                    <p>Tab 4.1 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="tab42" role="tabpanel">
                                    <p>Tab 4.2 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                            </div>
                        </div>
                        <h3>Use the pill</h3>
                        <div class="example-block">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#pill1" data-toggle="pill">Pill 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pill2" data-toggle="pill">Pill 2</a></li>
                                <li class="nav-item"><a class="nav-link disabled" href="#" onclick="return false;">Pill 3 Disabled</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pill 4</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#pill41" data-toggle="pill">Pill 4.1</a>
                                        <a class="dropdown-item" href="#pill42" data-toggle="pill">Pill 4.2</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="pill1" role="tabpanel">
                                    <p>Pill 1 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="pill2" role="tabpanel">
                                    <p>Pill 2 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="pill3" role="tabpanel">
                                    <p>Pill 3 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="pill4" role="tabpanel">
                                    <p>Pill 4 content</p>
                                </div>
                                <div class="tab-pane fade" id="pill41" role="tabpanel">
                                    <p>Pill 4.1 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                                <div class="tab-pane fade" id="pill42" role="tabpanel">
                                    <p>Pill 4.2 content</p>
                                    <p>Nam sed semper dui. Vivamus eros lacus, iaculis ut dolor nec, convallis ullamcorper tellus. Nam congue euismod orci, sed mollis turpis venenatis quis.</p>
                                    <p>ทวิตเตอร์ ไดโอดคอมมูนิเคชั่นศรีษะ ไดเอ็ตตาก ชเวดากอง เทรนด์ กระจอกชวากวัดไกวเพชรบูรณ์และเล็มทิฏฐิ รอยัลเบงกาลีหลักแหล่งโฮสต์ดีไซน์ บล็อค พังงาลำปางเกตส์ สารขัณฑ์อำนาจเจริญมัจฉานุ.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 