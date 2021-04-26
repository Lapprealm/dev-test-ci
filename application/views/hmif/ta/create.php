<main>
    <section class="container-fluid">
        <div class="row">
            <div class="col-xs-1 col-sm-2 col-md-3">
            
            </div>
            <div class="col-xs-10 col-sm-8 col-md-6">
                <p class="h3 text-center mb-3">
                    Hearing Informatics
                </p>
                <div class="card rounded-lg">
                    <div class="card-body">
                        <p class="h5 card-title text-center text-muted">
                            Identitas Diri
                        </p>
                        <hr/>
                        <form method="post" action="<?php echo base_url(
                        	"ta/store_ta"
                        ); ?>">
                        <?php if ($this->session->flashdata("errors")) {
                            echo '<div class="card alert alert-danger">';
                            echo '<div class="col-xs-12 col-sm-12 col-md-12 text-center">';
                            echo "Please fill in the required forms.";
                            echo "</div>";
                            echo "</div>";
                        } ?>
                        <div class="row gy-2">
                            <div class="col-xs-4">
                                <div class="input-group">
                                    <div class="input-group-text">Nama</div>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-text">NIM</div>
                                    <input type="text" name="nim" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-text">Kelas</div>
                                    <input type="text" name="kelas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <p class="h5 card-title mt-3 text-center text-muted">
                            Survey Kepuasan
                        </p>
                        <hr/>
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="text-center mb-2">
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row gy-1">
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_1" value="1" id="1">
                                            <label class="form-check-label" for="1">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_1" value="2" id="2">
                                            <label class="form-check-label" for="2">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_1" value="3" id="3">
                                            <label class="form-check-label" for="3">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_1" value="4" id="4">
                                            <label class="form-check-label" for="4">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_1" value="5" id="5">
                                            <label class="form-check-label" for="5">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="text-center mb-2">
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row">
                                    <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_2" value="1" id="1">
                                            <label class="form-check-label" for="1">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_2" value="2" id="2">
                                            <label class="form-check-label" for="2">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_2" value="3" id="3">
                                            <label class="form-check-label" for="3">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_2" value="4" id="4">
                                            <label class="form-check-label" for="4">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_2" value="5" id="5">
                                            <label class="form-check-label" for="5">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="text-center mb-2">
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row">
                                    <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_3" value="1" id="1">
                                            <label class="form-check-label" for="1">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_3" value="2" id="2">
                                            <label class="form-check-label" for="2">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_3" value="3" id="3">
                                            <label class="form-check-label" for="3">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_3" value="4" id="4">
                                            <label class="form-check-label" for="4">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="srv_3" value="5" id="5">
                                            <label class="form-check-label" for="5">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <p class="h5 card-title mt-3 text-center text-muted">
                            Form Aspirasi          
                        </p>
                        <hr/>
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p class="h6">Keluhan</p>
                                    <textarea name="keluhan" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <p class="h6">Kritik</p>
                                            <textarea name="kritik" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <p class="h6">Saran</p>
                                            <textarea name="saran" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <a class="btn btn-primary" href="
                                <?php 
                                    echo base_url('ta'); 
                                    $this->session->sess_destroy(); 
                                ?>"> 
                                    Back
                                </a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-sm-2 col-md-3">
            
            </div>
        </div>
    </section>
</main>