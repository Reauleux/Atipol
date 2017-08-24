    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LOPITA</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Guest Menu
                            </h2>
                        </div>
                        <div class="body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/guest/data">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Witel</h2>
                                    <select id="Select" class="form-control show-tick" name="witel">
                                                    <option value="all">All Data</option>
                                                    <?php
                                                    foreach ($witel as $data)
                                                        {
                                                            echo '<option value="'.$data->id_witel.'">'.$data->nama_witel.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">INV</h2>
                                    <input name="inv" type="radio" class="with-gap" id="inv" value="OK"/>
                                    <label for="inv">OK</label>
                                    <input name="inv" type="radio" id="inv2" class="with-gap" value="NOK"/>
                                    <label for="inv2">NOK</label>
                                    <input name="inv" type="radio" id="inv3" class="with-gap" value="all" checked/>
                                    <label for="inv3">ALL</label>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Program</h2>
                                    <select id="Select" class="form-control show-tick" name="program">
                                                    <option value="all">All Data</option>
                                                    <?php
                                                    foreach ($program as $data)
                                                        {
                                                            echo '<option value="'.$data->id_program.'">'.$data->nama_program.'</option>';
                                                        }
                                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">BAST</h2>
                                    <input name="bast" type="radio" class="with-gap" id="bast" value="OK"/>
                                    <label for="bast">OK</label>
                                    <input name="bast" type="radio" id="bast2" class="with-gap" value="NOK"/>
                                    <label for="bast2">NOK</label>
                                    <input name="bast" type="radio" id="bast3" class="with-gap" value="all" checked/>
                                    <label for="bast3">ALL</label>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Jenis Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="jenis_pekerjaan">
                                                    <option value="all">All Data</option>
                                                    <?php
                                                    foreach ($pekerjaan as $data)
                                                        {
                                                            echo '<option value="'.$data->id_pekerjaan.'">'.$data->nama_pekerjaan.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">PO</h2>
                                    <input name="po" type="radio" class="with-gap" id="po" value="OK"/>
                                    <label for="po">OK</label>
                                    <input name="po" type="radio" id="po2" class="with-gap" value="NOK"/>
                                    <label for="po2">NOK</label>
                                    <input name="po" type="radio" id="po3" class="with-gap" value="all" checked/>
                                    <label for="po3">ALL</label>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Status Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="status_pekerjaan">
                                                    <option value="all">All Data</option>
                                                    <option>Persiapan</option>
                                                    <option>OGP</option>
                                                    <option>Selesai</option>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                
                            </div>
                            <div class="row clearfix">
                                
                            </div>
                            <div class="row clearfix">
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <input class="btn btn-block bg-blue waves-effect" type="submit" name="submit">
                                </div>
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-block bg-red waves-effect" ">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->
            <!-- #END# Textarea -->
            <!-- Select -->
            <!-- #END# Select -->
            <!-- Checkbox -->
            <!-- #END# Checkbox -->
            <!-- Radio -->
            <!-- #END# Radio -->
            <!-- Switch Button -->
            <!--#END# Switch Button -->
            <!--DateTime Picker -->
            <!--#END# DateTime Picker -->
        </div>
    </section>