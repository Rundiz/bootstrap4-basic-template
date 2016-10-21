<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="mb-1 mt-2">
                            <h1 class="my-0">List group</h1>
                            <hr class="mb-0 mt-1">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <ul class="list-group mb-1">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item">แทคติคซิ้มสป็อต เจลรีโมต</li>
                                <li class="list-group-item">เอนทรานซ์ โชห่วย</li>
                                <li class="list-group-item">สตรอว์เบอร์รีโมเดลวีเจแบค</li>
                                <li class="list-group-item">โฮเอนทรานซ์</li>
                                <li class="list-group-item">พาวเวอร์จ๊อกกี้กรุ๊ปผลักดันเลกเชอร์</li>
                            </ul>
                        </div>

                        <h2>Tags</h2>
                        <div class="example-block">
                            <ul class="list-group mb-1">
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">14</span>
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">2</span>
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">1</span>
                                    Morbi leo risus
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">14</span>
                                    แทคติคซิ้มสป็อต เจลรีโมต
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">2</span>
                                    เอนทรานซ์ โชห่วย
                                </li>
                                <li class="list-group-item">
                                    <span class="tag tag-default tag-pill float-xs-right">1</span>
                                    สตรอว์เบอร์รีโมเดลวีเจแบค
                                </li>
                            </ul>
                        </div>

                        <h2>Anchors and buttons and disabled items</h2>
                        <div class="example-block">
                            <div class="list-group">
                                <h5 class="list-group-item">Anchors</h5>
                                <a class="list-group-item list-group-item-action disabled" href="#">
                                    <span class="tag tag-default tag-pill float-xs-right">14</span>
                                    Cras justo odio
                                </a>
                                <a class="list-group-item" href="#">
                                    <span class="tag tag-default tag-pill float-xs-right">2</span>
                                    Dapibus ac facilisis in (without .list-group-item-action class)
                                </a>
                                <a class="list-group-item list-group-item-action" href="#">
                                    <span class="tag tag-default tag-pill float-xs-right">1</span>
                                    Morbi leo risus
                                </a>
                                <a class="list-group-item list-group-item-action active" href="#">
                                    <span class="tag tag-default tag-pill float-xs-right">4</span>
                                    Porta ac consectetur ac
                                </a>
                                <h5 class="list-group-item">Buttons</h5>
                                <button class="list-group-item list-group-item-action disabled" type="button">
                                    <span class="tag tag-default tag-pill float-xs-right">14</span>
                                    Cras justo odio
                                </button>
                                <button class="list-group-item list-group-item-action" type="button">
                                    <span class="tag tag-default tag-pill float-xs-right">2</span>
                                    Dapibus ac facilisis in
                                </button>
                                <button class="list-group-item list-group-item-action" type="button">
                                    <span class="tag tag-default tag-pill float-xs-right">1</span>
                                    Morbi leo risus
                                </button>
                                <button class="list-group-item list-group-item-action active" type="button">
                                    <span class="tag tag-default tag-pill float-xs-right">4</span>
                                    Vestibulum at eros
                                </button>
                            </div>
                        </div>

                        <h2>Contextual classes</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action list-group-item-success" href="#">Dapibus ac facilisis in</a>
                                        <a class="list-group-item list-group-item-action list-group-item-info" href="#">Cras sit amet nibh libero</a>
                                        <a class="list-group-item list-group-item-action list-group-item-warning" href="#">Porta ac consectetur ac</a>
                                        <a class="list-group-item list-group-item-action list-group-item-danger" href="#">Vestibulum at eros</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action list-group-item-success" href="#">แทคติคซิ้มสป็อต เจลรีโมต</a>
                                        <a class="list-group-item list-group-item-action list-group-item-info" href="#">เอนทรานซ์ โชห่วย</a>
                                        <a class="list-group-item list-group-item-action list-group-item-warning" href="#">สตรอว์เบอร์รีโมเดลวีเจแบค</a>
                                        <a class="list-group-item list-group-item-action list-group-item-danger" href="#">โฮเอนทรานซ์</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Custom content</h2>
                        <div class="example-block">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action active" href="#">
                                    <h5 class="list-group-item-heading">List group item heading</h5>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                                <a class="list-group-item list-group-item-action" href="#">
                                    <h5 class="list-group-item-heading">List group item heading</h5>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                                <a class="list-group-item list-group-item-action list-group-item-warning" href="#">
                                    <h5 class="list-group-item-heading">List group item heading</h5>
                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                </a>
                                <a class="list-group-item list-group-item-action list-group-item-success" href="#">
                                    <h5 class="list-group-item-heading">มาร์กาเร็ตอัสซุสออยล์แม่</h5>
                                    <p class="list-group-item-text">อิเลคโทรนิคส์กบฎแม่สื่อกฏ ยูนิเซฟม้านั่งปอเต็กตึ๊งสปา สปาย เลยขนส่งทวาราวดี โกลด์อูรดู โมเนียซูลู พลูโตเนียม.</p>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 