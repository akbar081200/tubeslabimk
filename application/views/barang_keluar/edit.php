  <div class="modal fade" id="myModalEdit<?php echo $barang_keluar->id_barang_keluar; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('barang_keluar/update/'.$barang_keluar->id_barang_keluar); ?>
        <div class="box-body" style="padding: 0px 20px;">
          <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <!-- <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" /> -->
             <select name="kode_barang" class="form-control">
                <option value="<?php echo $barang_keluar->kode_barang ?>"><?php echo $barang_keluar->kode_barang ?></option>
                <?php 
                $sql = $this->db->get('barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
            <?php } ?>
            </select>
         </div>
        <div class="form-group">
            <label for="date">Tgl Keluar <?php echo form_error('tgl_keluar') ?></label>
        <input type="date" class="form-control tgl" name="tgl_keluar" id="tgl_keluar" placeholder="Tgl Keluar" value="<?php echo $barang_keluar->tgl_keluar; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $barang_keluar->jumlah; ?>" />
        </div>
        <input type="hidden" name="id_barang_keluar" value="<?php echo $barang_keluar->id_barang_keluar; ?>" /> 

        </div>
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