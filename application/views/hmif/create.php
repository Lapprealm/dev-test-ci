<main>
    <section class="p-5 rounded-lg m-0" style="background-color: #E8E9EA;">
        <div class="container text-center">
            <p class="display-3"><b>Tampung Aspirasi</b></p>
            <p class="lead">Tampung aspirasi kalian disini!</p>
        </div>
    </section>
    <section class="container">
        <form method="post" action="<?php echo base_url('hmifCreate');?>">
            <?php
                if ($this->session->flashdata('errors')){
                    echo '<div class="alert alert-danger">';
                    echo 'Please fill in the required forms.';
                    echo "</div>";
                }
            ?>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">Nama</p>
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">NIM</p>
                        <input type="text" name="nim" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">Kelas</p>
                        <input type="text" name="kelas" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">Keluhan</p>
                        <textarea name="keluhan" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">Kritik</p>
                        <textarea name="kritik" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p class="mb-2 mt-2 h6">Saran</p>
                        <textarea name="saran" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a 
                    class="btn btn-primary mb-2 mt-2" 
                    href="
                    <?php 
                        echo base_url('hmif'); 
                        $this->session->sess_destroy(); 
                    ?>"> 
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </section>
</main>