    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA INITIATION</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>LOPITA</small>
                            </h2>
                        </div>
                        <div class="body">
                        <?php
                        if(!empty($notif))
                        {
                            echo '<div class="alert alert-danger">';
                            echo $notif;
                            echo '</div>';
                        }
                        ?>
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/user/input">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Teritori</h2>
                                    <select id="Select" class="form-control show-tick" name="teritori">
                                                    <option value="<?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != '0'){
                                                    echo $this->db->query("SELECT * FROM tb_witel A LEFT JOIN tb_teritori B ON A.teritori = B.id_teritori WHERE A.id_witel='$nama_witel'")->row()->id_teritori;}
                                                    ?>  ">
                                                    <?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != '0'){
                                                    echo $this->db->query("SELECT * FROM tb_witel A LEFT JOIN tb_teritori B ON A.teritori = B.id_teritori WHERE A.id_witel='$nama_witel'")->row()->nama_teritori;}
                                                    ?>                                                       
                                                    </option>
                                                    
                                                    <?php
                                                    /*foreach ($teritori as $data)
                                                        {
                                                            echo '<option value="'.$data->id_teritori.'">'.$data->nama_teritori.'</option>';
                                                        }*/
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Witel</h2>
                                    <select id="Select" class="form-control show-tick" name="witel">
                                                    <option value="<?php if($this->session->userdata('witel') != '0'){echo $this->session->userdata('witel');}?>">
                                                    <?php 
                                                    $nama_witel = $this->session->userdata('witel');
                                                    if($this->session->userdata('witel') != '0'){
                                                    echo $this->db->query("SELECT * FROM tb_witel WHERE id_witel='$nama_witel'")->row()->nama_witel;}
                                                    ?>                                                       
                                                    </option>
                                                    
                                                    <?php
                                                    /*foreach ($witel as $data)
                                                        {
                                                            echo '<option value="'.$data->id_witel.'">'.$data->nama_witel.'</option>';
                                                        }*/
                                                    ?>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">ID Project</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="ID PROJECT.." name="id_project"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2 class="card-inside-title">Program</h2>
                                    <select id="Select" class="form-control show-tick" name="program">
                                                    <option></option>
                                                    <?php
                                                    foreach ($program as $data)
                                                        {
                                                            echo '<option value="'.$data->id_program.'">'.$data->nama_program.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Jenis Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="jenis_pekerjaan">
                                                    <option></option>
                                                    <?php
                                                    foreach ($pekerjaan as $data)
                                                        {
                                                            echo '<option value="'.$data->id_pekerjaan.'">'.$data->nama_pekerjaan.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <h2 class="card-inside-title">Pekerjaan</h2>
                                            <input type="text" class="form-control" placeholder="PEKERJAAN.." name="pekerjaan"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">ID Deployer</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="ID DEPLOYER.." name="id_deployer" id="id_deployer" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <h2 class="card-inside-title">Nilai Rekon</h2>
                                            <input type="text" class="form-control" placeholder="..NILAI REKON" name="nilai_rekon" id="nilai_rekon" data-inputmask-removemaskonsubmit="true"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Bulan Tahun Pekerjaan</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Bulan Tahun.." name="bulan_tahun"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Status Pekerjaan</h2>
                                    <select id="Select" class="form-control show-tick" name="status_pekerjaan">
                                                    <option></option>
                                                    <option>Persiapan</option>
                                                    <option>OGP</option>
                                                    <option>Selesai</option>
                                                </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">Input Vestyna</h2>
                                    <input name="input_vestyna" type="radio" class="with-gap" id="vestyna" value="OK">
                                    <label for="vestyna">OK</label>
                                    <input name="input_vestyna" type="radio" id="vestyna2" class="with-gap" value="NOK"/>
                                    <label for="vestyna2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No Durk Vestyna</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_vestyna" class="form-control" placeholder="NO DURK VESTYNA.." name="no_vestyna" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <br><br>
                                <h2 class="card-inside-title">BA Rekon</h2>
                                    <input name="ba_rekon" type="radio" class="with-gap" id="ba_rekon" value="OK"/>
                                    <label for="ba_rekon">OK</label>
                                    <input name="ba_rekon" type="radio" id="ba_rekon2" class="with-gap" value="NOK" enable/>
                                    <label for="ba_rekon2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropzone">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph">
                                            <i class="material-icons">touch_app</i>
                                        </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">PR</h2>
                                    <input name="pr" type="radio" class="with-gap" id="pr" value="OK"/>
                                    <label for="pr">OK</label>
                                    <input name="pr" type="radio" id="pr2" class="with-gap" value="NOK"/>
                                    <label for="pr2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title" style="color:white;">| </h2>                                    
                                        <div class="form">
                                            <input type="text" class="form-control" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">PO</h2>
                                    <input name="po" type="radio" class="with-gap" id="po" value="OK"/>
                                    <label for="po">OK</label>
                                    <input name="po" type="radio" id="po2" class="with-gap" value="NOK"/>
                                    <label for="po2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No PO</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_po" class="form-control" placeholder="NO PO.." name="no_po" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">BAST</h2>
                                    <input name="bast" type="radio" class="with-gap" id="bast" value="OK"/>
                                    <label for="bast">OK</label>
                                    <input name="bast" type="radio" id="bast2" class="with-gap" value="NOK"/>
                                    <label for="bast2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">Bulan BAST</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="bulan_bast" class="form-control" placeholder="BULAN BAST.." name="bulan_bast" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <h2 class="card-inside-title">INV</h2>
                                    <input name="inv" type="radio" class="with-gap" id="inv" value="OK"/>
                                    <label for="inv">OK</label>
                                    <input name="inv" type="radio" id="inv2" class="with-gap" value="NOK"/>
                                    <label for="inv2">NOK</label>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <h2 class="card-inside-title">No INV</h2>                                    
                                        <div class="form-line">
                                            <input type="text" id="no_inv" class="form-control" placeholder="NO INV.." name="no_inv" disabled/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Status</h2>
                                    <select id="Select" class="form-control show-tick" name="status">
                                                    <option></option>
                                                    <?php
                                                    foreach ($status as $data)
                                                        {
                                                            echo '<option value="'.$data->id_status.'">'.$data->nama_status.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">Anggaran</h2>
                                    <select id="Select" class="form-control show-tick" name="anggaran">
                                                    <option></option>
                                                    <option>CAPEX</option>
                                                    <option>OPEX</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <h2 class="card-inside-title">GM / PM</h2>
                                    <select id="Select" class="form-control show-tick" name="gmpm">
                                                    <option></option>
                                                    <?php
                                                    foreach ($gmpm as $data)
                                                        {
                                                            echo '<option value="'.$data->id_gmpm.'">'.$data->nama_gmpm.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">BAUT</h2>
                                    <input name="baut" type="radio" class="with-gap" id="baut" value="OK"/>
                                    <label for="baut">OK</label>
                                    <input name="baut" type="radio" id="baut2" class="with-gap" value="NOK"/>
                                    <label for="baut2">NOK</label>
                                </div>
                                <div class="col-sm-4">
                                <h2 class="card-inside-title">TestComm</h2>
                                    <input name="testcomm" type="radio" class="with-gap" id="testcomm" value="OK"/>
                                    <label for="testcomm">OK</label>
                                    <input name="testcomm" type="radio" id="testcomm2" class="with-gap" value="NOK"/>
                                    <label for="testcomm2">NOK</label>
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                    <h2 class="card-inside-title">Comment</h2>                                    
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Comment.." name="comment"/>
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
<script type="text/javascript">
Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('index.php/user/input') ?>",
//maxFilesize: 2,
method:"post",
//acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
    a.token=Math.random();
    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});

//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
    var token=a.token;
    $.ajax({
        type:"post",
        data:{token:token},
        url:"<?php echo base_url('index.php/user/remove_file') ?>",
        cache:false,
        dataType: 'json',
        success: function(){
            console.log("File terhapus");
        },
        error: function(){
            console.log("Error");
        }
    });
});
</script>