   <div class="modal fade" id="myModalEdit<?php echo $merk_barang->id_merk; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('merk_barang/update/'.$merk_barang->id_merk); ?>
        <div class="box-body" style="padding: 0px 20px;">
        <div class="form-group">
            <label for="varchar">Merk Barang <?php echo form_error('merk_barang') ?></label>
            <input type="text" class="form-control" name="merk_barang" id="merk_barang" placeholder="Merk Barang" value="<?php echo $merk_barang->merk_barang; ?>" />
        </div>
        <input type="hidden" name="id_merk" value="<?php echo $merk_barang->id_merk; ?>" />       
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