<?php require 'php-inc/inc_html_head.php'; ?> 
        <main class="content-wrap">
<?php require 'php-inc/inc_page_header.php'; ?> 

            <div class="container">
                <div class="row">
                    <article class="col-12">
                        <header class="mb-3 mt-4">
                            <h1 class="my-0">Dropdowns</h1>
                            <hr class="mb-0 mt-3">
                        </header>

                        <h2>Basic example</h2>
                        <div class="example-block">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown ดรอปดาวน์
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <h6 class="dropdown-header">Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item active" href="#">Active item</a>
                                            <div class="dropdown-divider"></div>
                                            <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                            <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                            <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Dropdown menu using <code>div</code> and <code>a</code></h3>
                                    <div class="dropdown open clearfix">
                                        <button class="btn btn-secondary dropdown-toggle sr-only" type="button" id="dropdownMenu2">
                                            Dropdown ดรอปดาวน์
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-always-show" aria-labelledby="dropdownMenu2">
                                            <h6 class="dropdown-header">Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item active" href="#">Active item</a>
                                            <div class="dropdown-divider"></div>
                                            <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                            <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                            <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Dropdown menu using <code>ul</code> and <code>li</code></h3>
                                    <div class="dropdown open clearfix">
                                        <button class="btn btn-secondary dropdown-toggle sr-only" type="button" id="dropdownMenu3">
                                            Dropdown ดรอปดาวน์
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-always-show" aria-labelledby="dropdownMenu3">
                                            <li class="dropdown-header">Dropdown header</li>
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li><a class="dropdown-item active" href="#">Active item</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-header">หัวข้อภาษาไทย</li>
                                            <li><a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a></li>
                                            <li><a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Button variants</h2>
                        <div class="example-block">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Primary
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Secondary
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Success
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Info
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu7">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Warning
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu8">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Danger
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu9">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dark
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu10">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Light
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu11">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                        </div>
                        <h3>Split button dropdowns</h3>
                        <div class="example-block">
                            <div class="btn-group">
                                <button class="btn btn-primary">Primary</button>
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu10">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary">Secondary</button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu11">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-success">Success</button>
                                <button class="btn btn-success dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-info">Info</button>
                                <button class="btn btn-info dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu13">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-warning">Warning</button>
                                <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu14">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-danger">Danger</button>
                                <button class="btn btn-danger dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu15">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                        </div>

                        <h2>Sizing</h2>
                        <div class="example-block">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenu16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Large button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu16">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-lg">Large split</button>
                                <button class="btn btn-secondary btn-lg dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu17">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Small button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu18">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm">Small split</button>
                                <button class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu19">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                        </div>

                        <h2>Dropup variation</h2>
                        <div class="example-block">
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropup
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu20">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary">Split dropup</button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu21">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <hr class="clearfix">
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Large dropup
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu22">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary btn-lg">Large split dropup</button>
                                <button class="btn btn-secondary btn-lg dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu23" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu23">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu24" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Small dropup
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu24">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary btn-sm">Small split dropup</button>
                                <button class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu25">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                        </div>

                        <h2>Menu alignment</h2>
                        <div class="example-block">
                            <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu26" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown right align ดรอปดาวน์ทางขวา
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu26">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-secondary">Dropdown right align ดรอปดาวน์ทางขวา</button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu27" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu27">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <hr class="clearfix">
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropup right align ดรอปอัพทางขวา
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu28">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                            <div class="btn-group dropup">
                                <button class="btn btn-secondary">Dropup right align ดรอปอัพทางขวา</button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenu29" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu29">
                                    <h6 class="dropdown-header">Dropdown header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item active" href="#">Active item</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">หัวข้อภาษาไทย</h6>
                                    <a class="dropdown-item" href="#">ลิ้งค์ภาษาไทย</a>
                                    <a class="dropdown-item disabled" href="#">ลิ้งค์ปิดใช้งาน</a>
                                </div>
                            </div>
                        </div>

                        <!--bottom space for drop down-->
                        <div style="height: 900px;"></div>
                    </article>
                </div>
            </div>
        </main>

<?php require 'php-inc/inc_page_footer.php'; ?> 
<?php require 'php-inc/inc_html_foot.php'; ?> 