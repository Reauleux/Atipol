    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CHANGE PASSWORD</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT
                            </h2>
                        </div>
                        <div class="body">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/user/profile/<?php echo $user->nik; ?>">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">NIK</h2>                                    
                                        <div class="form-line">
                                            <input type="text" value="<?php echo $user->nik; ?>" class="form-control" placeholder="NIK.." disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">NAMA</h2>                                    
                                        <div class="form-line">
                                            <input type="text" value="<?php echo $user->nama; ?>" class="form-control" placeholder="NAMA.." disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Fungsi</h2>
                                    <select id="Select" class="form-control show-tick" disabled="">
                                                    <option value="<?php echo $user->fungsi;?>"><?php echo $user->fungsi;?></option>
                                                    <option></option>
                                                    <?php
                                                    foreach ($fungsi as $data)
                                                        {
                                                            echo '<option value="'.$data->fungsi.'">'.$data->fungsi.'</option>';
                                                        }
                                                    ?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Witel</h2>
                                    <select id="Select" class="form-control show-tick" disabled="">
                                                    <option value="<?php echo $user->id_witel;?>"><?php echo $user->nama_witel;?></option>
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
                                            <input type="text" value="<?php echo $user->password; ?>" class="form-control" placeholder="PASSWORD.." name="password"/>
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