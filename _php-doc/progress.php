<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Progress</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Example</h2>
                        <div class="example-block">
                            <div id="example-caption-1" class="text-xs-center">Reticulating splines&hellip; 0%</div>
                            <progress class="progress" value="0" max="100" aria-describedby="example-caption-1"></progress>
                            <div id="example-caption-2" class="text-xs-center">กำลังดำเนินการ&hellip; 25%</div>
                            <progress class="progress" value="25" max="100" aria-describedby="example-caption-2"></progress>
                            <div id="example-caption-3" class="text-xs-center">กำลังดำเนินการ&hellip; 50%</div>
                            <progress class="progress" value="50" max="100" aria-describedby="example-caption-3"></progress>
                            <div id="example-caption-4" class="text-xs-center">Reticulating splines&hellip; 75%</div>
                            <progress class="progress" value="75" max="100" aria-describedby="example-caption-4"></progress>
                            <div id="example-caption-5" class="text-xs-center">Reticulating splines&hellip; 100%</div>
                            <progress class="progress" value="100" max="100" aria-describedby="example-caption-5"></progress>
                        </div>

                        <h2>Contextual alternatives</h2>
                        <div class="example-block">
                            <progress class="progress" value="5" max="100"></progress>
                            <progress class="progress progress-success" value="25" max="100"></progress>
                            <progress class="progress progress-info" value="50" max="100"></progress>
                            <progress class="progress progress-warning" value="75" max="100"></progress>
                            <progress class="progress progress-danger" value="100" max="100"></progress>
                        </div>

                        <h2>Striped</h2>
                        <div class="example-block">
                            <progress class="progress progress-striped" value="5" max="100"></progress>
                            <progress class="progress progress-striped progress-success" value="25" max="100"></progress>
                            <progress class="progress progress-striped progress-info" value="50" max="100"></progress>
                            <progress class="progress progress-striped progress-warning" value="75" max="100"></progress>
                            <progress class="progress progress-striped progress-danger" value="100" max="100"></progress>
                        </div>

                        <h2>Animated stripes</h2>
                        <div class="example-block">
                            <progress class="progress progress-striped progress-animated" value="25" max="100"></progress>
                            <p class="m-b-0"><small><a href="https://github.com/twbs/bootstrap/issues/17148" target="_blank" rel="nofollow">Doesn't work in all browsers.</a></small></p>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 