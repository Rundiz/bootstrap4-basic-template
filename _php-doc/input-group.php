<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Input group</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <div class="input-group">
                                <span id="basic-addon1" class="input-group-addon">@</span>
                                <input class="form-control" type="text" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                <span id="basic-addon2" class="input-group-addon">@example.com</span>
                            </div>
                            <br>
                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group">
                                <span id="basic-addon3" class="input-group-addon">https://example.com/users/</span>
                                <input id="basic-url" class="form-control" type="text" aria-describedby="basic-addon3">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <span class="input-group-addon">0.00</span>
                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>

                        <h2>Sizing</h2>
                        <div class="example-block">
                            <div class="input-group input-group-lg">
                                <span id="sizing-addon1" class="input-group-addon">@</span>
                                <input class="form-control" type="text" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <br>
                            <div class="input-group">
                                <span id="sizing-addon1" class="input-group-addon">@</span>
                                <input class="form-control" type="text" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <br>
                            <div class="input-group input-group-sm">
                                <span id="sizing-addon3" class="input-group-addon">@</span>
                                <input class="form-control" type="text" placeholder="Username" aria-describedby="sizing-addon3">
                            </div>
                        </div>

                        <h2>Checkboxes and radio addons</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="checkbox" aria-label="Checkbox for following text input"></span>
                                        <input class="form-control" type="text" aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="radio" aria-label="Radio button for following text input"></span>
                                        <input class="form-control" type="text" aria-label="Text input with radio button">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Multiple addons</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><input type="checkbox" aria-label="Checkbox for following text input"></span>
                                        <span class="input-group-addon">$</span>
                                        <input class="form-control" type="text" aria-label="Text input with checkbox">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <span class="input-group-addon">0.00</span>
                                        <input class="form-control" type="text" aria-label="Text input with radio button">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Button addons</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-btn"><button class="btn btn-secondary" type="button">Go!</button></span>
                                        <input class="form-control" type="text" placeholder="Search for...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search for...">
                                        <span class="input-group-btn"><button class="btn btn-secondary" type="button">ไป!</button></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-btn"><button class="btn btn-secondary" type="button">Hate it</button></span>
                                        <input class="form-control" type="text" placeholder="Product name">
                                        <span class="input-group-btn"><button class="btn btn-secondary" type="button">Love it</button></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Buttons with dropdowns</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider" role="separator"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input class="form-control" type="text" aria-label="Text input with dropdown button">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" aria-label="Text input with dropdown button">
                                        <div class="input-group-btn">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                การกระทำ
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">การกระทำ</a>
                                                <a class="dropdown-item" href="#">การกระทำอื่นๆ</a>
                                                <a class="dropdown-item" href="#">บางอย่างที่นี่</a>
                                                <div class="dropdown-divider" role="separator"></div>
                                                <a class="dropdown-item" href="#">ลิ้งค์แยก</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Segmented buttons</h3>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Action</button>
                                            <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider" role="separator"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <input class="form-control" type="text" aria-label="Text input with segmented button dropdown">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" aria-label="Text input with segmented button dropdown">
                                        <div class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">การกระทำ</button>
                                            <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">การกระทำ</a>
                                                <a class="dropdown-item" href="#">การกระทำอื่นๆ</a>
                                                <a class="dropdown-item" href="#">บางอย่างที่นี่</a>
                                                <div class="dropdown-divider" role="separator"></div>
                                                <a class="dropdown-item" href="#">ลิ้งค์แยก</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 