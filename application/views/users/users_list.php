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
                <form action="<?php echo site_url('users/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('users'); ?>" class="btn btn-default">Reset</a>
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
        <th>Nama User</th>
        <th>Username</th>
        <th>Level</th>
        <th>Action</th>
            </tr><?php
            foreach ($users_data as $users)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $users->nama_user ?></td>
            <td><?php echo $users->username ?></td>
            <td><?php echo $users->level ?></td>
           
               <td style="text-align:center" width="200px">
                <a data-toggle="tooltip" data-placement="top" title="Edit">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalEdit<?php echo $users->id_user; ?>"><i class="fa fa-edit"></i></button>
                      </a>
                       <a href="<?php echo base_url('users/delete/'.$users->id_user); ?>" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus Data User <?php echo $users->nama_user; ?> ?')">
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
