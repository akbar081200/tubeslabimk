 <div class="modal fade" id="myModalEdit<?php echo $barang->id_barang; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('Barang/update/'.$barang->id_barang); ?>
        <div class="box-body" style="padding: 0px 20px;">
          <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $barang->kode_barang; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $barang->nama_barang; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $barang->harga; ?>" />
        </div>

        <div class="form-group">
            <label for="int">Jenis Barang </label>
            <select name="id_jenis" class="form-control">
                <option value="<?php echo $id_jenis ?>"><?php echo $barang->id_jenis ?></option>
                <?php 
                $sql = $this->db->get('jenis_barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_jenis ?>"><?php echo $row->jenis_barang ?></option>
            <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="int">Merk Barang </label>
            <select name="id_merk" class="form-control">
                <option value="<?php echo $id_merk ?>"><?php echo $barang->id_merk ?></option>
                <?php 
                $sql = $this->db->get('merk_barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->id_merk ?>"><?php echo $row->merk_barang ?></option>
            <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="int">Supplier </label>
            <select name="kode_supplier" class="form-control">
                <option value="<?php echo $kode_supplier ?>"><?php echo $barang->kode_supplier ?></option>
                <?php 
                $sql = $this->db->get('supplier');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_supplier ?>"><?php echo $row->nama_supplier ?></option>
            <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="int">Stok <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $barang->stok; ?>" />
        </div>
        <input type="hidden" name="id_barang" value="<?php echo $barang->id_barang; ?>" /> 



          
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