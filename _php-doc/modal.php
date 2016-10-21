<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="mb-1 mt-2">
                            <h1 class="my-0">Modal</h1>
                            <hr class="mb-0 mt-1">
                        </header>

                        <h2>Static example</h2>
                        <div class="example-block">
                            <div class="modal example-modal-static">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Modal title | ไตเติล</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body&hellip;</p>
                                            <p>สไตรค์อุตรายันเนคเทค โอเลี้ยงเซ็นทารา ไพลินลูป</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="button">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Optional sizes</h2>
                        <div class="example-block">
                            <!--normal modal-->
                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#myModal">Normal modal</button>
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 id="myModalLabel" class="modal-title">Modal title | ไตเติล</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
                                            <p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end normal modal-->
                            <!--large modal-->
                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 id="myLargeModalLabel" class="modal-title">Modal title | ไตเติล</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
                                            <p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end large modal-->
                            <!--small modal-->
                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 id="mySmallModalLabel" class="modal-title">Modal title | ไตเติล</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit tincidunt iaculis. Phasellus hendrerit sem non dui commodo, vel iaculis nulla tincidunt.</p>
                                            <p>ช็อป โก๊ะ สกรัม เบนโตะสหรัฐทัวร์นาเมนท์ มั้งซามูไรพาสปอร์ตภควัทคีตาดัมพ์ฟีเวอร์ สตาร์ โฟล์คเทคโนแครตซิ่งราเมน ซาฟารีท็อปบู๊ทมยุราภิรมย์คอนเซปต์ ดัมพ์โอเปร่า ยังไง.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end small modal-->
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 