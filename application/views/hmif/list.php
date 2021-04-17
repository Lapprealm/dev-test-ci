<main class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo base_url('hmif/create') ?>"> Create New Item</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">


    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th width="220px">Action</th>
        </tr>
    </thead>


    <tbody>
    <?php foreach ($data as $item) { ?>      
        <tr>
            <td><?php echo $item->nama; ?></td>
            <td><?php echo $item->nim; ?></td>   
            <td><?php echo $item->kelas; ?></td>     
        <td>
            <form method="DELETE" action="<?php echo base_url('hmif/delete/'.$item->id);?>">
            <a class="btn btn-info" href="<?php echo base_url('hmif/'.$item->id) ?>"> show</a>
            <a class="btn btn-primary" href="<?php echo base_url('hmif/edit/'.$item->id) ?>"> Edit</a>
            <button type="submit" class="btn btn-danger"> Delete</button>
            </form>
        </td>     
        </tr>
        <?php } ?>
    </tbody>


    </table>
</main>