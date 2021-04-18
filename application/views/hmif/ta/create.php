<main class="flex-shrink-0 pb-4">
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
                    echo '<div class="card alert alert-danger row mt-4">';
                    echo '<div class="col-xs-12 col-sm-12 col-md-12">';
                    echo 'Please fill in the required forms.';
                    echo "</div>";
                    echo "</div>";
                }
            ?>
            <div class="row gy-4 mt-2">
                <div class="card rounded-5 p-2 hover-shadow">
                    <h5 class="card-header">Identitas</h5>
                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="input-group">
                                    <div class="input-group-text">Nama</div>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="input-group">
                                    <div class="input-group-text">NIM</div>
                                    <input type="text" name="nim" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="input-group">
                                    <div class="input-group-text">Kelas</div>
                                    <input type="text" name="kelas" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-5 p-2 hover-shadow">
                    <h5 class="card-header">Survey #1</h5>
                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p>
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row gy-1">
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionA" id="marah">
                                            <label class="form-check-label" for="marah">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionA" id="sedih">
                                            <label class="form-check-label" for="sedih">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionA" id="datar">
                                            <label class="form-check-label" for="datar">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionA" id="senang">
                                            <label class="form-check-label" for="senang">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionA" id="puas">
                                            <label class="form-check-label" for="puas">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-5 p-2 hover-shadow">
                    <h5 class="card-header">Survey #2</h5>
                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p>
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row">
                                    <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionB" id="marah">
                                            <label class="form-check-label" for="marah">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionB" id="sedih">
                                            <label class="form-check-label" for="sedih">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionB" id="datar">
                                            <label class="form-check-label" for="datar">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionB" id="senang">
                                            <label class="form-check-label" for="senang">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionB" id="puas">
                                            <label class="form-check-label" for="puas">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-5 p-2 hover-shadow">
                    <h5 class="card-header">Survey #3</h5>
                    <div class="card-body">
                        <div class="row gy-2">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p>
                                    Ini pertanyaan
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-check">
                                    <div class="row">
                                    <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionC" id="marah">
                                            <label class="form-check-label" for="marah">
                                                😤 (Mengmarah)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionC" id="sedih">
                                            <label class="form-check-label" for="sedih">
                                                🙁 (Mengsedih)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionC" id="datar">
                                            <label class="form-check-label" for="datar">
                                                😐 (Mengoke)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionC" id="senang">
                                            <label class="form-check-label" for="senang">
                                                🙂 (Mengsenang)
                                            </label>
                                        </div>
                                        <div class="col-xs col-sm col-md">
                                            <input class="form-check-input" type="radio" name="reactionC" id="puas">
                                            <label class="form-check-label" for="puas">
                                                😆 (Menghayyuk)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card rounded-5 p-2 hover-shadow">
                    <h5 class="card-header">Form Aspirasi</h5>
                    <div class="card-body">
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
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="d-flex justify-content-between align-items-center ps-2 pe-2">
                        <a class="btn btn-primary" href="
                        <?php 
                            echo base_url('hmif'); 
                            $this->session->sess_destroy(); 
                        ?>"> 
                            Back
                        </a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>