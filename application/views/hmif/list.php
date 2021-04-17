<main class="container">
    <div class="row mb-3 mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-3">
                <h2>List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo base_url('hmif/create') ?>"> Create New Item</a>
            </div>
        </div>
    </div>

    <?php foreach ($data as $item) { ?>
        <div class="card rounded-5 p-0 mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">
                <p class="p-0 m-0 text-wrap">
                    <?php echo $item->nim ?> - <?php echo $item->nama ?>
                </p>
                <form class="btn-group" method="DELETE" action="<?php echo base_url('hmif/delete/'.$item->id);?>">
                    <a class="btn btn-primary" href="<?php echo base_url('hmif/'.$item->id) ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo base_url('hmif/edit/'.$item->id) ?>">Edit</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>

    <?php } ?>
</main>