<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Card</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/sample-300x250.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/sample-300x250.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">ซิ้มสัตหีบภูบาล</h4>
                                    <p class="card-text">ไมเกรนเนชันแนลแอนติกาคาร์โพ้นทะเล ปัตตานี แกมเบียมาสเตอร์ สาราณียากร ดั๊มพ์ราเมน ย่างกุ้งซูริกแปรปรวน.</p>
                                    <a class="btn btn-primary" href="#">ลิ้งค์</a>
                                </div>
                            </div>
                        </div>

                        <h2>Content types</h2>
                        <div class="example-block">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/sample-300x250.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">โคตรบูรณ์ทรานแซกชั่น</li>
                                    <li class="list-group-item">ทนงแช็ตศรีษะทัชแพด</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <div class="card-block">
                                    <a class="card-link" href=".?<?php echo rand(0, 999); ?>">Card link</a>
                                    <a class="card-link" href=".">Visited link color</a>
                                </div>
                            </div>
                        </div>
                        <h3>List group only</h3>
                        <div class="example-block">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">โคตรบูรณ์ทรานแซกชั่น</li>
                                    <li class="list-group-item">ทนงแช็ตศรีษะทัชแพด</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <h3>Just title and text</h3>
                        <div class="example-block">
                            <div class="card card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a class="card-link" href=".?<?php echo rand(0, 999); ?>">Card link</a>
                                <a class="card-link" href="#">Another link</a>
                            </div>
                        </div>
                        <h3>Title, subtitle, image and text</h3>
                        <div class="example-block">
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <img class="img-fluid" src="img/sample-300x250.jpg" alt="Card image">
                                <div class="card-block">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a class="card-link" href=".?<?php echo rand(0, 999); ?>">Card link</a>
                                    <a class="card-link" href="#">Another link</a>
                                </div>
                            </div>
                        </div>

                        <h2>Sizing</h2>
                        <h3>Using the grid</h3>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card card-block">
                                        <h3 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h3>
                                        <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                        <a class="btn btn-primary" href="#">ลิ้งค์</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-block">
                                        <h3 class="card-title">Special title treatment</h3>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a class="btn btn-primary" href="#">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>Custom width</h3>
                        <div class="example-block">
                            <div class="card card-block" style="width: 15rem;">
                                <h3 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h3>
                                <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                <a class="btn btn-primary" href="#">ลิ้งค์</a>
                            </div>
                        </div>

                        <h2>Text alignment</h2>
                        <div class="example-block">
                            <div class="card card-block">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a class="btn btn-primary" href="#">Go somewhere</a>
                            </div>
                            <div class="card card-block text-xs-center">
                                <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                <a class="btn btn-primary" href="#">ลิ้งค์</a>
                            </div>
                            <div class="card card-block text-xs-right">
                                <h4 class="card-title">Special title treatment</h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a class="btn btn-primary" href="#">Go somewhere</a>
                            </div>
                        </div>

                        <h2>Header and footer</h2>
                        <div class="example-block">
                            <div class="card">
                                <div class="card-header">Featured</div>
                                <div class="card-block">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a class="btn btn-primary" href="#">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <h3 class="card-header">Featured using h3</h3>
                                <div class="card-block">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a class="btn btn-primary" href="#">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Quote</div>
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                        <footer>ฟินิกซ์แครอทเทรดด็อกเตอร์โนติส <cite title="Source Title">เกมส์ฮิบรู</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card text-xs-center">
                                <div class="card-header">Featured</div>
                                <div class="card-block">
                                    <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                    <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                    <a class="btn btn-primary" href="#">ลิ้งค์</a>
                                </div>
                                <div class="card-footer text-muted">2 days ago</div>
                            </div>
                        </div>

                        <h2>Header nav</h2>
                        <div class="example-block">
                            <div class="card text-xs-center">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs pull-xs-left">
                                        <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" onclick="return false;">Link</a></li>
                                        <li class="nav-item"><a class="nav-link disabled" href="#" onclick="return false;">Disabled</a></li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">Special title treatment</h4>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a class="btn btn-primary" href="#">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card text-xs-center">
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-pills pull-xs-left">
                                        <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#" onclick="return false;">Link</a></li>
                                        <li class="nav-item"><a class="nav-link disabled" href="#" onclick="return false;">Disabled</a></li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                    <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                    <a class="btn btn-primary" href="#">ลิ้งค์</a>
                                </div>
                            </div>
                        </div>

                        <h2>Image caps</h2>
                        <div class="example-block">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/sample-300x250.jpg" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                    <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                <img class="card-img-bottom img-fluid" src="img/sample-300x250.jpg" alt="Card image cap">
                            </div>
                        </div>

                        <h2>Image overlays</h2>
                        <div class="example-block">
                            <div class="card">
                                <img class="card-img img-fluid" src="img/sample-300x250.jpg" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img img-fluid" src="img/sample-300x250.jpg" alt="Card image">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                    <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>

                        <h2>Inverted text</h2>
                        <div class="example-block">
                            <div class="card card-inverse bg-inverse">
                                <div class="card-block">
                                    <h3 class="card-title">Special title treatment</h3>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a class="btn btn-primary" href="#">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card card-inverse bg-inverse">
                                <div class="card-block">
                                    <h3 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h3>
                                    <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์.</p>
                                    <a class="btn btn-primary" href="#">ลิ้งค์</a>
                                </div>
                            </div>
                        </div>

                        <h2>Background variants</h2>
                        <div class="example-block">
                            <div class="card card-inverse card-primary text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-inverse card-success text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-inverse card-info text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-inverse card-warning text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-inverse card-danger text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <h2>Outline variants</h2>
                        <div class="example-block">
                            <div class="card card-outline-primary text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-outline-secondary text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-outline-success text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-outline-info text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-outline-warning text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="card card-outline-danger text-xs-center">
                                <div class="card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <h2>Groups</h2>
                        <div class="example-block">
                            <div class="card-group">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                        <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Decks</h2>
                        <div class="example-block">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                            <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Columns</h2>
                        <div class="example-block">
                            <div class="card-columns">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Card title that wraps to a new line</h4>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="card card-block">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>
                                            <small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/sample-400x333.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">สุกี้ปารุสก์ คอมไพเลอร์</h4>
                                        <p class="card-text">สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card card-block card-inverse card-primary text-xs-center">
                                    <blockquote class="card-blockquote">
                                        <p>สเปซสมุทรสงครามมหาสารคามมงฟอร์ตบารัก อิออนไมถิลี ปัตตานีคันจิ เตลุคูคอมไพเลอร์. เดนมาร์กอูบุนตูโภชนากรมารวิชัยกรีนพีซ.</p>
                                        <footer>
                                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="card card-block text-xs-center">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                <div class="card">
                                    <img class="card-img img-fluid" src="img/sample-400x333.jpg" alt="Card image">
                                </div>
                                <div class="card card-block text-xs-right">
                                    <blockquote class="card-blockquote">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer>
                                            <small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="card card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 