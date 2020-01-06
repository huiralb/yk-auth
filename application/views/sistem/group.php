<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Sistem</a></li>
            <li class="active">Group</li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-users"></i> Daftar Group
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a href="<?= base_url('sistem/group/add') ?>" class="btn btn-success">
                                <i class="fa fa-plus"></i> Tambah Baru
                            </a>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <table id="data-table" class="display table table-bordered table-striped"></table>
                </div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript" language="javascript" src="<?= base_url('template/backend/assets/data-tables/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('template/backend/assets/data-tables/DT_bootstrap.js') ?>"></script>
<link href="<?= base_url('template/backend/assets/advanced-datatable/media/css/demo_page.css') ?>" rel="stylesheet" />
<link href="<?= base_url('template/backend/assets/advanced-datatable/media/css/demo_table.css') ?>" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url('template/backend/assets/data-tables/DT_bootstrap.css') ?>" />
<script type="text/javascript">
    $(function() {
        $("#data-table").tabel({
            source: '<?=base_url("sistem/group/search")?>',
            filterParams: $("div#data-table_wrapper").find("select").serializeArray(),
            order: [[ 2, 'asc' ]],
            columns: [		            	
                {bVisible: false,data :'GroupId'},                
                {title: 'Aksi' , data : 'aksi'},
                {title: 'Nama' , data : 'GroupName'},
                {title: 'Keterangan', data : 'GroupDescription'}
            ]
        });
    });
    
    function hapus(id) {
        bootbox.confirm({
            title: "Konfirmasi?",
            message: "Apakah anda yakin akan menghapus file lampiran ini?",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Batal',
                    className: "btn-warning btn-sm"
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Yakin',
                    className: "btn-primary btn-sm"        
                }
            },
            callback: function (result) {
                if(result) {
                    $.post(
                        '<?=base_url("sistem/group_do/delete")?>',
                        {id: id},
                        function(data) {
                            if(data.success) {
                                $.gritter.add({
                                    title: 'Informasi',
                                    text: 'Group berhasil dihapus.',
                                    class_name: 'gritter-info gritter-center'
                                });
                                $("#data-table").tabel({
                                    reload :true                                
                                });
                            } else {
                                bootbox.alert(data.msg);
                            }
                        }, "json"
                    );
                }
            }
        });                
    }
</script>    
