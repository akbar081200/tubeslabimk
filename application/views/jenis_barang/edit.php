  <div class="modal fade" id="myModalEdit<?php echo $jenis_barang->id_jenis; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('jenis_barang/update/'.$jenis_barang->id_jenis); ?>
        <div class="box-body" style="padding: 0px 20px;">
        <div class="form-group">
            <label for="varchar">Jenis Barang <?php echo form_error('jenis_barang') ?></label>
            <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="Jenis Barang" value="<?php echo $jenis_barang->jenis_barang; ?>" />
        </div>
        <input type="hidden" name="id_jenis" value="<?php echo $jenis_barang->id_jenis; ?>" />            
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-left">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>