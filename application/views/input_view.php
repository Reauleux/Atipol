            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Init</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Forms
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
                                    if(!empty($notif))
                                    {
                                        echo '<div class="alert alert-danger">';
                                        echo $notif;
                                        echo '</div>';
                                    }
                                    ?>
                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/user/input">
                                        <div class="form-group">
                                                <label for="Select">TERITORI</label>
                                                <select id="Select" class="form-control" name="teritori">
                                                    <option></option>                                                   
                                                    <?php
                                                    foreach ($teritori as $data)
                                                        {
                                                            echo '<option value="'.$data->id_teritori.'">'.$data->nama_teritori.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>    
                                        <div class="form-group">
                                                <label for="Select">WITEL</label>
                                                <select id="Select" class="form-control" name="witel">
                                                    <option></option>
                                                    <?php
                                                    foreach ($witel as $data)
                                                        {
                                                            echo '<option value="'.$data->id_witel.'">'.$data->nama_witel.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ID PROJECT</label>
                                            <input class="form-control" placeholder="ID PROJECT.." name="id_project">
                                        </div>
                                        <div class="form-group">
                                            <label>PEKERJAAN</label>
                                            <input class="form-control" placeholder="PEKERJAAN.." name="pekerjaan">
                                        </div>
                                        <div class="form-group">
                                                <label for="Select">JENIS PEKERJAAN</label>
                                                <select id="Select" class="form-control" name="jenis_pekerjaan">
                                                    <option></option>
                                                    <?php
                                                    foreach ($pekerjaan as $data)
                                                        {
                                                            echo '<option value="'.$data->id_pekerjaan.'">'.$data->nama_pekerjaan.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>    
                                        <div class="form-group">
                                                <label for="Select">PROGRAM</label>
                                                <select id="Select" class="form-control" name="program">
                                                    <option></option>
                                                    <?php
                                                    foreach ($program as $data)
                                                        {
                                                            echo '<option value="'.$data->id_program.'">'.$data->nama_program.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ID DEPLOYER</label>
                                            <input class="form-control" placeholder="ID DEPLOYER.." name="id_deployer">
                                        </div>
                                        <div class="form-group">
                                            <label>NILAI REKON</label>
                                            <input class="form-control" placeholder="NILAI REKON.." name="nilai_rekon">
                                        </div>
                                        <div class="form-group">
                                            <label>BULAN - TAHUN PEKERJAAN</label>
                                            <input class="form-control" placeholder="BULAN - TAHUN PEKERJAAN.." name="bulan_tahun">
                                        </div>
                                        <div class="form-group">
                                                <label for="Select">STATUS PEKERJAAN</label>
                                                <select id="Select" class="form-control" name="status_pekerjaan">
                                                    <option></option>
                                                    <option>Persiapan</option>
                                                    <option>OGP</option>
                                                    <option>Selesai</option>
                                                </select>
                                        </div>    
                                        <div class="form-group">
                                                <label for="Select">INPUT VESTYNA</label><br>
                                                <input type="radio" name="input_vestyna" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="input_vestyna" id="optionsRadios2" value="NOK">NOK
                                        </div>
                                        <div class="form-group">
                                            <label>NO DURK VESTYNA</label>
                                            <input class="form-control" placeholder="NO DURK VESTYNA.." id="no_vestyna" name="no_vestyna">
                                        </div>
                                        <div class="form-group">
                                                <label for="Select">PR</label><br>
                                                <input type="radio" name="pr" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="pr" id="optionsRadios2" value="NOK">NOK
                                        </div>
                                        <div class="form-group">
                                                <label for="Select">PO</label><br>
                                                <input type="radio" name="po" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="po" id="optionsRadios2" value="NOK">NOK
                                        </div>
                                        <div style="height:19px;"></div>
                                        <input name="submit" type="submit" value="Submit Button" class="btn btn-primary" style="width:100%;">
                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>NO PO</label>
                                                <input class="form-control" placeholder="NO PO.." id="no_po" name="no_po">
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">BA REKON</label><br>
                                                <input type="radio" name="ba_rekon" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="ba_rekon" id="optionsRadios2" value="NOK">NOK
                                            </div>
                                            <div class="form-group">
                                                <label>DOK BA REKON</label>
                                                <div class="dropzone" disabled>
                                                    <div class="dz-message">
                                                        <h3> Drag and Drop your files here Or Click here to upload</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">BAST</label><br>
                                                <input type="radio" name="bast" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="bast" id="optionsRadios2" value="NOK">NOK
                                            </div>
                                            <div class="form-group">
                                                <label>BULAN BAST</label>
                                                <input class="form-control" placeholder="BULAN BAST.." id="bulan_bast" name="bulan_bast">
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">INV</label><br>
                                                <input type="radio" name="inv" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="inv" id="optionsRadios2" value="NOK">NOK
                                            </div>
                                            <div class="form-group">
                                                <label>NO INV</label>
                                                <input class="form-control" placeholder="NO INV.." id="no_inv" name="no_inv">
                                            </div>          
                                            <div class="form-group">
                                                <label for="Select">STATUS</label>
                                                <select id="Select" class="form-control" name="status">
                                                    <option></option>
                                                    <?php
                                                    foreach ($status as $data)
                                                        {
                                                            echo '<option value="'.$data->id_status.'">'.$data->nama_status.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">ANGGARAN</label>
                                                <select id="Select" class="form-control" name="anggaran">
                                                    <option></option>
                                                    <option>CAPEX</option>
                                                    <option>OPEX</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">GM / PM</label>
                                                <select id="Select" class="form-control" name="gmpm">
                                                    <option></option>
                                                    <?php
                                                    foreach ($gmpm as $data)
                                                        {
                                                            echo '<option value="'.$data->id_gmpm.'">'.$data->nama_gmpm.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">BAUT</label><br>
                                                <input type="radio" name="baut" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="baut" id="optionsRadios2" value="NOK">NOK
                                            </div>
                                            <div class="form-group">
                                                <label for="Select">TESTCOMM</label><br>
                                                <input type="radio" name="testcomm" id="optionsRadios1" value="OK">OK
                                                <input type="radio" name="testcomm" id="optionsRadios2" value="NOK">NOK
                                                <input type="radio" name="testcomm" id="optionsRadios2" value="TANPA">TANPA
                                            </div>
                                            <div class="form-group">
                                                <label>COMMENT</label>
                                                <input class="form-control" placeholder="COMMENT" name="comment">
                                            </div>
                                            <button type="reset" class="btn btn-default" style="width:100%;">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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