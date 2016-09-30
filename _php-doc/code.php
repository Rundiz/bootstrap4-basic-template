<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-xs-12">
                        <header class="m-b-1 m-t-2">
                            <h1 class="m-y-0">Code</h1>
                            <hr class="m-b-0 m-t-1">
                        </header>

                        <h2>Inline code</h2>
                        <div class="example-block">
                            <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                            <p>ตัวอย่าง, <code>&lt;section&gt;</code> ควรถูกครอบแบบในบรรทัด.</p>
                        </div>

                        <h2>Code blocks</h2>
                        <div class="example-block">
                            <pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;</code></pre>
                            <pre><code>&lt;p&gt;ตัวอย่าง ที่นี่...&lt;/p&gt;</code></pre>
                        </div>

                        <h2>Variables</h2>
                        <div class="example-block">
                            <var>y</var> = <var>m</var><var>x</var> + <var>b</var>
                        </div>

                        <h2>User input</h2>
                        <div class="example-block">
                            <p>To switch directories, type <kbd>cd</kbd> followed by the name of the directory.</p>
                            <p>การเปลี่ยนไดเร็คทอรี่, ให้พิมพ์ <kbd>cd</kbd> ตามด้วยชื่อของไดเร็คทอรี่.</p>
                        </div>

                        <h2>Sample output</h2>
                        <div class="example-block">
                            <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        </div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 