<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>		
            <li><a href="#">sistem</a></li>
            <li><a href="<?= base_url('sistem/auth') ?>">Autentikasi</a></li>
            <li class="active"><?=$sub == 'add' ? 'Tambah' : 'Edit'?></li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-unlock"></i> Form <?=$sub == 'add' ? 'Tambah' : 'Edit'?> Hak Akses Group
            </header>
            <div class="panel-body">
            <form class="form-horizontal tasi-form" action="<?=base_url("sistem/auth_do/$sub")?>" method="post">
                <?php for ($i=0;$i<sizeof($data);$i++): ?>        
                    <div class="form-group">
                        <label class="col-sm-2 col-lg-2 control-label"><?=$data[$i]['MenuName']?></label>
                        <div class="col-lg-10">
                            <input type="hidden" name="MenuId<?=$i?>" value="<?=$data[$i]['MenuId']?>" />                            
                            
                            <label class="checkbox-inline">
                                <input name="index<?=$i?>" type="checkbox" value="1" <?=$data[$i]['view'] == 1 ? 'checked="checked" ' : ''?>/>                                        
                                 View
                            </label>

                            <label class="checkbox-inline">
                                <input name="search<?=$i?>" type="checkbox" value="1" <?=$data[$i]['search'] == 1 ? 'checked="checked" ' : ''?> <?=($data[$i]['MenuParentId'] == 0 && $data[$i]['search'] == 0) ? 'disabled="disabled"' : ''?>/>
                                Cari
                            </label>

                            <label class="checkbox-inline">
                                <input name="add<?=$i?>" type="checkbox" value="1" <?=$data[$i]['add'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Tambah
                            </label>

                            <label class="checkbox-inline">
                                <input name="update<?=$i?>" type="checkbox" value="1" <?=$data[$i]['update'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Ubah
                            </label>

                            <label class="checkbox-inline">
                                <input name="delete<?=$i?>" type="checkbox" value="1" <?=$data[$i]['delete'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Hapus</span>                                                    
                            </label>

                            <label class="checkbox-inline">
                                <input name="detail<?=$i?>" type="checkbox" value="1" <?=$data[$i]['detail'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Detail
                            </label>

                            <label class="checkbox-inline">
                                <input name="print<?=$i?>" type="checkbox" value="1" <?=$data[$i]['print'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Cetak
                            </label>

                            <label class="checkbox-inline">
                                <input name="export<?=$i?>" type="checkbox" value="1" <?=$data[$i]['export'] == 1 ? 'checked="checked" ' : ''?> <?=$data[$i]['MenuParentId'] == 0 ? 'disabled="disabled"' : ''?>/>
                                Eksport
                            </label>
                        </div>
                    </div>
		<?php endfor; ?>						 
                    <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="total" value="<?=sizeof($data)?>" />
                              <input type="hidden" id="GroupId" name="GroupId" value="<?=$group['GroupId']?>" />
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
                    location.href = '<?=base_url('sistem/auth')?>';
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