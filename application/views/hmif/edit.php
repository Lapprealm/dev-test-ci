<main class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo base_url('hmif');?>"> Back</a>
            </div>
        </div>
    </div>

    <form method="post" action="<?php echo base_url('hmif/update/'.$item->id);?>">
        <?php
            if ($this->session->flashdata('errors')){
                echo '<div class="alert alert-danger">';
                echo 'Please fill in the required forms.';
                echo "</div>";
            }
        ?>
        <div class="row gap-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">Nama</p>
                    <input type="text" name="nama" class="form-control" value="<?php echo $item->nama; ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">NIM</p>
                    <input type="text" name="nim" class="form-control" value="<?php echo $item->nim; ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">Kelas</p>
                    <input type="text" name="kelas" class="form-control" value="<?php echo $item->kelas; ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">Keluhan</p>
                    <textarea name="keluhan" class="form-control"><?php echo $item->keluhan; ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">Saran</p>
                    <textarea name="saran" class="form-control"><?php echo $item->saran; ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p class="mb-2 h6">Kritik</p>
                    <textarea name="kritik" class="form-control"><?php echo $item->kritik; ?></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</main>