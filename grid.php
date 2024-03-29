<?php require_once('header.php'); ?>
<?php require_once('menu.php'); ?>
<main>
<div class="page-breadcrumb">
    <div class="row mt-4">
        <div class="col-5">
            <h4 class="page-title">Bootstrap Grid</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bootstrap Grid</li>
                </ol>
            </nav>
        </div>
        <div class="col-7">
            <div class="text-right">
                <small>Users</small>
                <h5 class="text-info">3,458</h5>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <h1>Bootstrap grid examples</h1>
            <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Five grid tiers</h3>
            <p class="card-subtitle">There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

            <div class="row mt-4">
                <div class="grid-demo col-4">.col-4</div>
                <div class="grid-demo col-4">.col-4</div>
                <div class="grid-demo col-4">.col-4</div>
            </div>

            <div class="row mt-4">
                <div class="grid-demo col-sm-4">.col-sm-4</div>
                <div class="grid-demo col-sm-4">.col-sm-4</div>
                <div class="grid-demo col-sm-4">.col-sm-4</div>
            </div>

            <div class="row mt-4">
                <div class="grid-demo col-md-4">.col-md-4</div>
                <div class="grid-demo col-md-4">.col-md-4</div>
                <div class="grid-demo col-md-4">.col-md-4</div>
            </div>

            <div class="row mt-4">
                <div class="grid-demo col-lg-4">.col-lg-4</div>
                <div class="grid-demo col-lg-4">.col-lg-4</div>
                <div class="grid-demo col-lg-4">.col-lg-4</div>
            </div>

            <div class="row mt-4">
                <div class="grid-demo col-xl-4">.col-xl-4</div>
                <div class="grid-demo col-xl-4">.col-xl-4</div>
                <div class="grid-demo col-xl-4">.col-xl-4</div>
            </div>

            <h3 class="mt-4">Three equal columns</h3>
            <p class="card-subtitle">Get three equal-width columns <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and below, the columns will automatically stack.</p>
            <div class="row mt-4">
                <div class="grid-demo col-md-4">.col-md-4</div>
                <div class="grid-demo col-md-4">.col-md-4</div>
                <div class="grid-demo col-md-4">.col-md-4</div>
            </div>

            <h3 class="mt-4">Three unequal columns</h3>
            <p>Get three columns <strong>starting at desktops and scaling to large desktops</strong> of various widths. Remember, grid columns should add up to twelve for a single horizontal block. More than that, and columns start stacking no matter the viewport.</p>
            <div class="row mt-4">
                <div class="grid-demo col-md-3">.col-md-3</div>
                <div class="grid-demo col-md-6">.col-md-6</div>
                <div class="grid-demo col-md-3">.col-md-3</div>
            </div>

            <h3 class="mt-4">Two columns</h3>
            <p>Get two columns <strong>starting at desktops and scaling to large desktops</strong>.</p>
            <div class="row mt-4">
                <div class="grid-demo col-md-8">.col-md-8</div>
                <div class="grid-demo col-md-4">.col-md-4</div>
            </div>

            <h3 class="mt-4">Full width, single column</h3>
            <p class="text-warning">No grid classes are necessary for full-width elements.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Two columns with two nested columns</h3>
            <p class="card-subtitle">Per the documentation, nesting is easy—just put a row of columns within an existing column. This gives you two columns <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths) within the larger column.</p>
            <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
            <div class="row mt-4">
                <div class="grid-demo col-md-8">
                    .col-md-8
                    <div class="row mt-4">
                        <div class="grid-demo col-md-6">.col-md-6</div>
                        <div class="grid-demo col-md-6">.col-md-6</div>
                    </div>
                </div>
                <div class="grid-demo col-md-4">.col-md-4</div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Mixed: mobile and desktop</h3>
            <p class="card-subtitle">The Bootstrap v4 grid system has five tiers of classes: xs (extra small), sm (small), md (medium), lg (large), and xl (extra large). You can use nearly any combination of these classes to create more dynamic and flexible layouts.</p>
            <p>Each tier of classes scales up, meaning if you plan on setting the same widths for xs and sm, you only need to specify xs.</p>
            <div class="row mt-4">
                <div class="grid-demo col-12 col-md-8">.col-12 .col-md-8</div>
                <div class="grid-demo col-6 col-md-4">.col-6 .col-md-4</div>
            </div>
            <div class="row mt-4">
                <div class="grid-demo col-6 col-md-4">.col-6 .col-md-4</div>
                <div class="grid-demo col-6 col-md-4">.col-6 .col-md-4</div>
                <div class="grid-demo col-6 col-md-4">.col-6 .col-md-4</div>
            </div>
            <div class="row mt-4">
                <div class="grid-demo col-6">.col-6</div>
                <div class="grid-demo col-6">.col-6</div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Mixed: mobile, tablet, and desktop</h3>
            <p class="card-subtitle"></p>
            <div class="row mt-4">
                <div class="grid-demo col-12 col-sm-6 col-lg-8">.col-12 .col-sm-6 .col-lg-8</div>
                <div class="grid-demo col-6 col-lg-4">.col-6 .col-lg-4</div>
            </div>
            <div class="row mt-4">
                <div class="grid-demo col-6 col-sm-4">.col-6 .col-sm-4</div>
                <div class="grid-demo col-6 col-sm-4">.col-6 .col-sm-4</div>
                <div class="grid-demo col-6 col-sm-4">.col-6 .col-sm-4</div>
            </div>
        </div>
    </div>

</div>
<?php require_once('footer.php'); ?>