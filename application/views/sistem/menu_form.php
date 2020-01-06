<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>		
            <li><a href="#">sistem</a></li>
            <li><a href="<?= base_url('sistem/menu') ?>">Menu</a></li>
            <li class="active"><?=$sub == 'add' ? 'Tambah' : 'Edit'?></li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-users"></i> Form <?=$sub == 'add' ? 'Tambah' : 'Edit'?> Menu
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" action="<?=base_url("sistem/menu_do/$sub")?>" method="post">
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama Menu</label>
                        <div class="col-sm-6">
                            <input name="MenuName" type="text" class="form-control" value="<?=$menu['MenuName']?>">
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Menu Modul</label>
                        <div class="col-sm-6">
                            <input name="MenuModule" type="text" class="form-control" value="<?=$menu['MenuModule']?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2" for="groups">Status</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="is_child" name="is_child">
                                <option value="0">Menu Utama</option>
                                <option value="1" <?=$menu['MenuParentId'] ? 'selected' : ''?>>Sub Menu</option>
                            </select>
                        </div>
                    </div>
				
                    <div class="form-group parent_related" style="display: <?=$menu['MenuParentId'] == 0 ? 'none' : 'block'?>">
                        <label class="col-sm-2 control-label col-sm-2" for="MenuParentId"> Menu Induk </label>
                        <div class="col-sm-2">
                            <select class="form-control" id="MenuParentId" name="MenuParentId">
                                <option value="0">-- pilih --</option>
                            <?php 
                                foreach($parents as $parent) {
                                    $selected = $menu['MenuParentId'] == $parent['MenuId'] ? "selected " : "";
                                    echo "<option value='$parent[MenuId]' $selected>$parent[MenuName]</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group parent_related" style="display: <?=$menu['MenuParentId'] == 0 ? 'none' : 'block'?>">
                        <label class='col-sm-2 control-label col-lg-2' for='index'> Aksi </label>
                        <div class="col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input name="index" type="checkbox" value="1" <?=$aksi['index'] ? 'checked="checked"' : ''?>/>
                                    View
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="search" type="checkbox" value="1" <?=$aksi['search'] ? 'checked="checked"' : ''?>/>
                                    Cari                                                   
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="add" type="checkbox" value="1" <?=$aksi['add'] ? 'checked="checked"' : ''?>/>
                                    Add
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="update" type="checkbox" value="1" <?=$aksi['update'] ? 'checked="checked"' : ''?>/>
                                    Update
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="delete" type="checkbox" value="1" <?=$aksi['delete'] ? 'checked="checked"' : ''?>/>
                                    Delete
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="detail" type="checkbox" value="1" <?=$aksi['detail'] ? 'checked="checked"' : ''?>/>
                                    Detail
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="print" type="checkbox" value="1" <?=$aksi['print'] ? 'checked="checked"' : ''?>/>
                                    Cetak
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="export" type="checkbox" value="1" <?=$aksi['export'] ? 'checked="checked"' : ''?>/>
                                    Export
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Icon</label>
                        <div class="col-sm-6">
                            <input name="MenuIcon" type="text" class="form-control" value="<?=$menu['MenuIcon']?>">
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Urutan</label>
                        <div class="col-sm-6">
                            <input name="MenuOrder" type="text" class="form-control" value="<?=$menu['MenuOrder']?>">
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tampilkan</label>
                        <div class="col-sm-6">                            
                            <div class="radio">
                                <label>
                                    <input name="MenuIsShow" type="radio" value="1" checked="checked"/>
                                    Ya
                                </label>
                            </div>

                            <div class="radio">
                                <label>
                                    <input name="MenuIsShow" type="radio" value="0" <?=($menu['MenuIsShow']=='0'?'checked="checked"':'')?>/>
                                    Tidak
                                </label>
                            </div>
                        </div>
                    </div>
								 
                    <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="MenuId" value="<?=$menu['MenuId']?>"/>
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
                    location.href = '<?=base_url('sistem/menu')?>';
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
    
    $('select[name="is_child"]').change(function(){
        if($('select[name="is_child"] option:selected').val() == '0') {
            $('.parent_related').hide();
        } else {
            $('.parent_related').show();
        }
    });
</script>