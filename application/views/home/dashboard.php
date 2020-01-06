<div class="alert alert-success alert-block fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="fa fa-times"></i>
    </button>
    <h4>
        <i class="fa fa-ok-sign"></i>
        Welcome!
    </h4>
    <p>Selamat datang di aplikasi e-Budgeting RSUD Soewondo Tahun Anggaran <b><?=$_SESSION['blud']['ta']?></b>  </p>
</div>
<div class="row state-overview">
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol red">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="value">
                <h1 class=" count2">
                    0
                </h1>
                <p>Total RBA <?=$_SESSION['blud']['ta'] - 1 ?></p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol yellow">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="value">
                <h1 class=" count3">
                    0
                </h1>
                <p>Total RBA <?=$_SESSION['blud']['ta']?></p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="value">
                <h1 class=" count4">
                    0
                </h1>
                <p>Total RBA <?=$_SESSION['blud']['ta'] + 1 ?></p>
            </div>
        </section>
    </div>
</div>

<div class="row state-overview">
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="fa fa-money"></i>
            </div>
            <div class="value">
                <h1 class=" count2">
                    0
                </h1>
                <p>Biaya Jasa Pelayanan</p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol red">
                <i class="fa fa-money"></i>
            </div>
            <div class="value">
                <h1 class=" count3">
                    0
                </h1>
                <p>Biaya Obat</p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol yellow">
                <i class="fa fa-money"></i>
            </div>
            <div class="value">
                <h1 class=" count4">
                    0
                </h1>
                <p>Biaya Operasional Lainnya</p>
            </div>
        </section>
    </div>
</div>
<!-- 
<div class="row state-overview">
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="fa fa-tags"></i>
            </div>
            <div class="value">
                <h1 class=" count2">
                    0
                </h1>
                <p>Sales</p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol blue">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="value">
                <h1 class=" count3">
                    0
                </h1>
                <p>New Order</p>
            </div>
        </section>
    </div>
    <div class="col-lg-4 col-sm-6">
        <section class="panel">
            <div class="symbol terques">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="value">
                <h1 class=" count4">
                    0
                </h1>
                <p>Total Profit</p>
            </div>
        </section>
    </div>
</div> -->