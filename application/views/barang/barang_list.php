 <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <div class="box-body">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Add</button>
            </div>         
       </div>
          <?php include 'add.php';  ?>
 
</div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Action</th>
            </tr><?php
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $barang->kode_barang ?></td>
            <td><?php echo $barang->nama_barang ?></td>
            <td><?php echo "Rp.".number_format($barang->harga) ?></td>
            <td><?php echo $barang->stok ?></td>
            <td style="text-align:center" width="200px"> 
                <a data-toggle="tooltip" data-placement="top" title="Edit">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalEdit<?php echo $barang->id_barang; ?>"><i class="fa fa-edit"></i></button>
                      </a>
                       <a href="<?php echo base_url('Barang/delete/'.$barang->id_barang); ?>" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus Data Barang <?php echo $barang->nama_barang; ?> ?')">
                      <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                      </a>
               
            </td>
            <?php 
                    $no++;
                    include 'edit.php'; 
                    }
                   ?>
        </tr>
               
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>