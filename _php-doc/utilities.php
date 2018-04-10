<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <header class="mb-3 mt-4">
                            <h1 class="my-0">Utilities</h1>
                            <hr class="mb-0 mt-3">
                        </header>

                        <h2>Text alignment</h2>
                        <div class="example-block">
                            <p class="text-justify">
                                <strong>Justified text.</strong> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt lorem ultricies congue sollicitudin. Suspendisse non eleifend lectus.
                                วาฟเฟิลแช่แข็งอุปทานแมชชีน แซมบ้า ไทม์ โฮสเตสช็อคแบตแคร์ ยะเยือกแบล็กแก๊สโซฮอล์ ชัตเตอร์.
                            </p>
                            <p class="text-nowrap">
                                <strong>No wrap text.</strong> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt lorem ultricies congue sollicitudin. Suspendisse non eleifend lectus.
                                วาฟเฟิลแช่แข็งอุปทานแมชชีน แซมบ้า ไทม์ โฮสเตสช็อคแบตแคร์ ยะเยือกแบล็กแก๊สโซฮอล์ ชัตเตอร์.
                            </p>
                            <p class="text-left">
                                <strong>Left aligned text on all viewport sizes.</strong> 
                                จัดเรียงทางซ้าย.
                            </p>
                            <p class="text-center">
                                <strong>Center aligned text on all viewport sizes.</strong> 
                                จัดเรียงตรงกลาง.
                            </p>
                            <p class="text-right">
                                <strong>Right aligned text on all viewport sizes.</strong> 
                                จัดเรียงทางขวา.
                            </p>
                            <p class="text-sm-right">
                                <strong>Right aligned text on viewports sized SM (small) or wider.</strong> 
                                จัดเรียงทางขวา ที่วิวพอร์ทขนาด SM หรือกว้างกว่า.
                            </p>
                            <p class="text-md-right">
                                <strong>Right aligned text on viewports sized MD (medium) or wider.</strong> 
                                จัดเรียงทางขวา ที่วิวพอร์ทขนาด MD หรือกว้างกว่า.
                            </p>
                            <p class="text-lg-right">
                                <strong>Right aligned text on viewports sized LG (large) or wider.</strong> 
                                จัดเรียงทางขวา ที่วิวพอร์ทขนาด LG หรือกว้างกว่า.
                            </p>
                            <p class="text-xl-right">
                                <strong>Right aligned text on viewports sized XL (extra-large) or wider.</strong> 
                                จัดเรียงทางขวา ที่วิวพอร์ทขนาด XL หรือกว้างกว่า.
                            </p>
                        </div>

                        <h2>Text transform</h2>
                        <div class="example-block">
                            <p class="text-lowercase">Lowercased text.</p>
                            <p class="text-uppercase">Uppercased text.</p>
                            <p class="text-capitalize">CapiTaliZed text.</p>
                        </div>

                        <h2>Font weight and italics</h2>
                        <div class="example-block">
                            <p class="font-weight-bold">Bold text.</p>
                            <p class="font-weight-normal">Normal weight text.</p>
                            <p class="font-italic">Italic text.</p>
                        </div>

                        <h2>Contextual colors and backgrounds</h2>
                        <div class="example-block">
                            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh. ว้อยอาร์พีจี ไงออร์เดอร์คีตปฏิภาณดยุค.</p>
                            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit. เวิร์กดยุคนายแบบยูโรฮีโร่.</p>
                            <p class="text-secondary">Donec ullamcorper nulla non metus auctor fringilla. เอ๋คอนโดมาร์เก็ตติ้งดิกชันนารี สะกอมไวกิ้งคัตเอาต์.</p>
                            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula. เฟิร์มอีสต์โอวัลตินโลโก้ เอ็นเตอร์เทน.</p>
                            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna. แอสเตอร์พรีเมียร์เสือโคร่งเชฟ เซ็กซ์โค้กแตงโม.</p>
                            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod. เพรสมาเฟียโชว์รูมไทยแลนด์แฟ็กซ์ สลัมโฮม.</p>
                            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla. เอ๋คอนโดมาร์เก็ตติ้งดิกชันนารี สะกอมไวกิ้งคัตเอาต์.</p>
                            <p class="text-white bg-dark">Etiam porta sem malesuada ultricies vehicula. เพรสมาเฟียโชว์รูมไทยแลนด์แฟ็กซ์ สลัมโฮม.</p>
                            <p class="text-light bg-dark mb-0">Duis mollis, est non commodo luctus, nisi erat porttitor ligula. เฟิร์มอีสต์โอวัลตินโลโก้ เอ็นเตอร์เทน.</p>
                        </div>
                        <h3>On links</h3>
                        <div class="example-block">
                            <a class="text-muted" href="#">Muted link มูท</a>
                            <a class="text-primary" href="#">Primary link ขั้นต้น</a>
                            <a class="text-success" href="#">Success link สำเร็จ</a>
                            <a class="text-info" href="#">Info link ข้อมูล</a>
                            <a class="text-warning" href="#">Warning link เตือน</a>
                            <a class="text-danger" href="#">Danger link อันตราย</a>
                        </div>
                        <h3>Background colors</h3>
                        <div class="example-block">
                            <p class="bg-primary text-white">Nullam id dolor id nibh ultricies vehicula ut id elit. ว้อยอาร์พีจี ไงออร์เดอร์คีตปฏิภาณดยุค.</p>
                            <p class="bg-success text-white">Duis mollis, est non commodo luctus, nisi erat porttitor ligula. เวิร์กดยุคนายแบบยูโรฮีโร่.</p>
                            <p class="bg-info text-white">Maecenas sed diam eget risus varius blandit sit amet non magna. เฟิร์มอีสต์โอวัลตินโลโก้ เอ็นเตอร์เทน.</p>
                            <p class="bg-warning text-white">Etiam porta sem malesuada magna mollis euismod. แอสเตอร์พรีเมียร์เสือโคร่งเชฟ เซ็กซ์โค้กแตงโม.</p>
                            <p class="bg-danger text-white">Donec ullamcorper nulla non metus auctor fringilla. เพรสมาเฟียโชว์รูมไทยแลนด์แฟ็กซ์ สลัมโฮม.</p>
                            <p class="bg-dark text-white">Cras mattis consectetur purus sit amet fermentum. เอ๋คอนโดมาร์เก็ตติ้งดิกชันนารี สะกอมไวกิ้งคัตเอาต์.</p>
                            <p class="bg-faded mb-0">Cras mattis consectetur purus sit amet fermentum. แอสเตอร์พรีเมียร์เสือโคร่งเชฟ เซ็กซ์โค้กแตงโม.</p>
                        </div>

                        <h2>Responsive embeds</h2>
                        <div class="example-block">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 