<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>		
            <li><a href="#">Sistem</a></li>
            <li><a href="<?= base_url('sistem/group') ?>">Group</a></li>
            <li class="active"><?=$sub == 'add' ? 'Tambah' : 'Edit'?></li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-users"></i> Form <?=$sub == 'add' ? 'Tambah' : 'Edit'?> Group
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" action="<?=base_url("sistem/group_do/$sub")?>" method="post">
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama Group</label>
                        <div class="col-sm-6">
                            <input name="GroupName" type="text" class="form-control" value="<?=$group['GroupName']?>">
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-6">
                            <input name="GroupDescription" type="text" class="form-control" value="<?=$group['GroupDescription']?>">
                        </div>
                    </div>
								 
                    <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="GroupId" value="<?=$group['GroupId']?>"/>
                              <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
                              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                              <button type="button" class="btn btn-warning" onclick="self.history.back()"><i class="fa fa-undo"></i> Kembali</button>
                          </div>
                      </div>
                </form>
            </div>
        </section>
    </div>
</div>
<!-- Modal -->
<div id="modal-loading" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">                    
            <div class="modal-header">                        
                <h4 class="modal-title"><i class="ace-icon fa fa-hourglass-o icon-only"></i> Silahkan Tunggu!</h4>
            </div>
            <div class="modal-body">
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-yellow" style="width: 60%"></div>
                </div>
            </div>                                        
        </div>
    </div>
</div>
<!-- /.modal end here -->
<script type="text/javascript">
    $(function(){
        $('form').ajaxForm({
            dataType: 'json',
            beforeSubmit: function(arr, $form, options) { 
                $('#modal-loading').modal('show');
            },        
            success: function(data){
                $('#modal-loading').modal('hide');
                if(data.success) {
                    location.href = '<?=base_url('sistem/group')?>';
                } else{
                    $.gritter.add({
                        title: 'Error!',
                        text: data.msg,
                        class_name: 'gritter-error gritter-center'
                    });
                }
            }
        });        
    });
</script>