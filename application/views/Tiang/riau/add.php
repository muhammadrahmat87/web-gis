<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('home/tambah', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

             
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Tiang</label>
                      <div class="col-sm-2">
                        <input type="text" name="title" class="form-control"  required>
                      </div>
                </div>
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Usaha</label>
                      <div class="col-sm-3">
                        <input type="text" name="description" class="form-control"  required>
                      </div>
                </div>	
				  <div class="form-group">
                  <label class="col-sm-2 control-label">Produk</label>
                      <div class="col-sm-3">
                        <input type="text" name="description" class="form-control"  required>
                      </div>
                </div>	
				  <div class="form-group">
                  <label class="col-sm-2 control-label">Lokasi</label>
                      <div class="col-sm-3">
                        <input type="text" name="description" class="form-control"   required>
                      </div>
                </div>				  
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Foto</label>
                      <div class="col-sm-2">
                          <input type="file" name="userfile">
                      </div>
                </div>
				            

                <div class="form-group">
                  <label class="col-sm-2 control-label">Pajak Awal</label>
                      <div class="col-sm-2">
                        <input type="date" name="mpajaka" class="form-control" required>
                      </div>
                </div>
				  
				        <div class="form-group">
                  <label class="col-sm-2 control-label">Pajak Selesai</label>
                      <div class="col-sm-2">
                        <input type="date" name="mpajakb" class="form-control"  required>
                      </div>
                </div>
				  
				         
				  
                <input type="hidden" name="last_update" value="<?php echo date("Y-m-d"); ?>" />

                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                      <div class="col-sm-4">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
				                  <?php
                          echo anchor('home/riau', 'Back', array('class'=>'btn btn-default'));
                          ?>
                      </div>
                </div>

                </div>

               
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>