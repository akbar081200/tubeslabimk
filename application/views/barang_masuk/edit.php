   <div class="modal fade" id="myModalEdit<?php echo $barang_masuk->id_barang_masuk; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('barang_masuk/update/'.$barang_masuk->id_barang_masuk); ?>
        <div class="box-body" style="padding: 0px 20px;">
          <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <select name="kode_barang" class="form-control">
                <option value="<?php echo $barang_masuk->kode_barang ?>"><?php echo $barang_masuk->kode_barang ?></option>
                <?php 
                $sql = $this->db->get('barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Kode Supplier <?php echo form_error('kode_supplier') ?></label>
            <select name="kode_supplier" class="form-control">
                <option value="<?php echo $barang_masuk->kode_supplier ?>"><?php echo $barang_masuk->kode_supplier ?></option>
                <?php 
                $sql = $this->db->get('supplier');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_supplier ?>"><?php echo $row->nama_supplier ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $barang_masuk->jumlah; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $barang_masuk->harga; ?>" />
        </div>
        <input type="hidden" name="id_barang_masuk" value="<?php echo $barang_masuk->id_barang_masuk; ?>" /> 
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