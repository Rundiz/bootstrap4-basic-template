<?php require 'php-inc/inc_html_head.php'; ?> 
<main class="content-wrap">
    <?php require 'php-inc/inc_page_header.php'; ?> 

    <div class="container">
        <div class="row">
            <article class="col-12">
                <header class="mb-3 mt-4">
                    <h1 class="my-0">Progress</h1>
                    <hr class="mb-0 mt-3">
                </header>

                <h2>Example</h2>
                <div class="example-block">
                    <div id="example-caption-1" class="text-center">Reticulating splines&hellip; 0%</div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="example-caption-2" class="text-center">กำลังดำเนินการ&hellip; 25%</div>
                    <div class="progress">
                        <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="example-caption-3" class="text-center">กำลังดำเนินการ&hellip; 50%</div>
                    <div class="progress">
                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="example-caption-4" class="text-center">Reticulating splines&hellip; 75%</div>
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="example-caption-5" class="text-center">Reticulating splines&hellip; 100%</div>
                    <div class="progress">
                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>

                <h2>Backgrounds</h2>
                <div class="example-block">
                    <div class="progress mb-3">
                        <div class="progress-bar w-25 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar w-50 bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar w-75 bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar w-100 bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>

                <h2>Multiple bars</h2>
                <div class="example-block">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <h2>Striped</h2>
                <div class="example-block">
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped w-25 bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped w-50 bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped w-75 bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped w-100 bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>

                <h2>Animated stripes</h2>
                <div class="example-block">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 