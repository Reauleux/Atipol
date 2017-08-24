    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADD USER</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                            </h2>
                        </div>
                        <div class="body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/add_user">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">NIK</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="NIK.." name="nik"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">NAMA</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="NAMA.." name="nama"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Fungsi</h2>
                                    <select id="Select" class="form-control show-tick" name="fungsi">
                                                    <option value=""></option>
                                                    <option value="ADMIN">ADMIN</option>
                                                    <option value="USER">USER</option>
                                                    <option value="VERIFIKATOR">VERIFIKATOR</option>
                                                    <option value="GUEST">GUEST</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Witel</h2>
                                    <select id="Select" class="form-control show-tick" name="witel">
                                                    <option></option>
                                                    <?php
                                                    foreach ($witel as $data)
                                                        {
                                                            echo '<option value="'.$data->id_witel.'">'.$data->nama_witel.'</option>';
                                                        }
                                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Password</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="PASSWORD.." name="password"/>
                                        </div>
                                    </div>
                                </div>
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
                </div>
            </div>
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