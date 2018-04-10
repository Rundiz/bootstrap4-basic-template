<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <header class="mb-3 mt-4">
                            <h1 class="my-0">Tooltips</h1>
                            <hr class="mb-0 mt-3">
                        </header>

                        <h2>Example</h2>
                        <div class="example-block example-static-tooltip">
                            <div class="tooltip bs-tooltip-top" role="tooltip">
                                <div class="arrow"></div>
                                <div class="tooltip-inner">
                                    Tooltip on the top
                                </div>
                            </div>
                            <div class="tooltip bs-tooltip-right" role="tooltip">
                                <div class="arrow"></div>
                                <div class="tooltip-inner">
                                    Tooltip on the right
                                </div>
                            </div>
                            <div class="tooltip bs-tooltip-bottom" role="tooltip">
                                <div class="arrow"></div>
                                <div class="tooltip-inner">
                                    Tooltip on the bottom
                                </div>
                            </div>
                            <div class="tooltip bs-tooltip-left" role="tooltip">
                                <div class="arrow"></div>
                                <div class="tooltip-inner">
                                    Tooltip on the left
                                </div>
                            </div>
                        </div>

                        <h2>Interactive demo</h2>
                        <div class="example-block">
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                            <hr>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="top" title="ทูลทิปด้านบน">ทูลทิปด้านบน</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="right" title="ทูลทิปด้านขวา">ทูลทิปด้านขวา</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="bottom" title="ทูลทิปด้านล่าง">ทูลทิปด้านล่าง</button>
                            <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="left" title="ทูลทิปด้านซ้าย">ทูลทิปด้านซ้าย</button>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 