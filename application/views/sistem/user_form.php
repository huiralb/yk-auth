<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a></li>		
            <li><a href="#">sistem</a></li>
            <li><a href="<?= base_url('sistem/user') ?>">Pengguna</a></li>
            <li class="active"><?=$sub == 'add' ? 'Tambah' : 'Edit'?></li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-users"></i> Form <?=$sub == 'add' ? 'Tambah' : 'Edit'?> Pengguna
            </header>
            <div class="panel-body">
                <form class="form-horizontal tasi-form" action="<?=base_url("sistem/user_do/$sub")?>" method="post">
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                        <div class="col-sm-6">
                            <input name="UserNip" type="text" class="form-control" value="<?=$user['UserNip']?>"/>
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                        <div class="col-sm-6">
                            <input name="UserRealName" type="text" class="form-control" value="<?=$user['UserRealName']?>"/>
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input name="UserName" type="text" class="form-control" value="<?=$user['UserName']?>"/>
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input name="UserPassword" type="password" class="form-control" />
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Ulangi Password</label>
                        <div class="col-sm-6">
                            <input name="UlangPassword" type="password" class="form-control"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2" for="groups">Group</label>
                        <div class="col-lg-10">
                            <select id="groups" multiple class="form-control" name="groups[]">
                        <?php
                            $data_array = array();
                            foreach($usergroup as $ug){
                                $data_array[] = $ug['UserGroupGroupId'];
                            }
                            foreach($groups as $group) {
                                $sel = in_array($group['GroupId'], $data_array) ? " selected='selected'" : "";
                                echo "<option value='$group[GroupId]'$sel>$group[GroupName]</option>";
                            }
                        ?>
                            </select>
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Unit Kerja</label>
                        <div class="col-lg-10">
                            <select name="UserUnitKerjaId" class="form-control">
                        <?php
                            foreach($unitkerja as $uk) {
                                $sel = $user['UserUnitKerjaId'] == $uk[UnitKerjaId] ? " selected='selected'" : "sel";
                                echo "<option value='$uk[UnitKerjaId]'$sel>$uk[UnitKerjaNama]</option>";
                            }
                        ?>        
                            </select> 
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nomor HP</label>
                        <div class="col-sm-6">
                            <input name="UserHp" type="text" class="form-control" value="<?=$user['UserHp']?>" />
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">e-mail</label>
                        <div class="col-sm-6">
                            <input name="UserEmail" type="text" class="form-control" value="<?=$user['UserEmail']?>" />
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Masa Berlaku</label>
                        <div class="col-md-4">                            
                            <input class="form-control form-control-inline input-medium default-date-picker"  name="UserExpired" type="text" value="<?=$user['UserExpired']?>" />
                            <span class="help-block">Pilih tanggal</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2" for="UserActive">Status</label>
                        <div class="col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input id="UserActive" name="UserActive" type="checkbox" value="1"<?=$user['UserActive'] ? ' checked="checked"' : ''?>>
                                    Aktif
                                </label>
                            </div>
                        </div>
                    </div>
								 
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input name="UserNote" type="text" class="form-control" value="<?=$user['UserNote']?>" />
                        </div>
                    </div>
								 
                    <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <input type="hidden" name="UserId" value="<?=$user['UserId']?>"/>
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
<script type="text/javascript" src="<?=base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap-datepicker/css/datepicker.css')?>" />
<script type="text/javascript">
    $(function(){
        window.prettyPrint && prettyPrint();
        
        $('.default-date-picker').datepicker({
            format: 'dd-mm-yyyy'
        });
        
        $('form').ajaxForm({
            dataType: 'json',
            beforeSubmit: function(arr, $form, options) { 
                $('#modal-loading').modal('show');
            },        
            success: function(data){
                $('#modal-loading').modal('hide');
                if(data.success) {
                    location.href = '<?=base_url('sistem/user')?>';
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