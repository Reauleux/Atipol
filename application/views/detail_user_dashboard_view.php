   <style>
table {
    table-layout:fixed;
}
th{
    overflow:hidden;
    width: 170px;
    height:50px;
    text-overflow: ellipsis;
}
</style>   
    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <!-- #END# Input -->
            <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>List Data</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="table-responsive">
                                        <table id="tb_induk" class="display" cellspacing="0" style="width: 7px;">
                                        <thead>
                                            <tr>
                                            <th>ID LOP</th>
                                            <th>TERITORI</th>
                                            <th>WITEL</th>
                                            <th>ID PROJECT</th>
                                            <th>PEKERJAAN</th>
                                            <th>JENIS PEKERJAAN</th>
                                            <th>PROGRAM</th>
                                            <th>ID DEPLOYER</th>
                                            <th>NILAI REKON</th>
                                            <th>BULAN TAHUN PEKERJAAN</th>
                                            <th>STATUS PEKERJAAN</th>
                                            <th>INPUT VESTYNA</th>
                                            <th>NO DURK VESTYNA</th>
                                            <th>PR</th>
                                            <th>PO</th>
                                            <th>NO PO</th>
                                            <th>BA REKON</th>
                                            <th>DOK BA REKON</th>
                                            <th>BAST</th>
                                            <th>BULAN BAST</th>
                                            <th>INV</th>
                                            <th>NO INV</th>
                                            <th>STATUS</th>
                                            <th>ANGGARAN</th>
                                            <th>GM / PM</th>
                                            <th>BAUT</th>
                                            <th>COMMENT</th>
                                            <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $alert = "'Apakah anda yakin menghapus data ini ?'";
                                        foreach ($user as $data)
                                        {
                                            echo 
                                                '
                                                <tr>
                                                    <td>'.$data->id_lop.'</td>
                                                    <td>'.$data->nama_teritori.'</td>
                                                    <td>'.$data->nama_witel.'</td>
                                                    <td>'.$data->id_project.'</td>
                                                    <td>'.$data->pekerjaan.'</td>
                                                    <td>'.$data->nama_pekerjaan.'</td>
                                                    <td>'.$data->nama_program.'</td>
                                                    <td>'.$data->id_deployer.'</td>
                                                    <td>'.$data->nilai_rekon.'</td>
                                                    <td>'.$data->bulan_tahun.'</td>
                                                    <td>'.$data->status_pekerjaan.'</td>
                                                    <td>'.$data->vess.'</td>
                                                    <td>'.$data->no_vestyna.'</td>
                                                    <td>'.$data->pr.'</td>
                                                    <td>'.$data->po.'</td>
                                                    <td>'.$data->no_po.'</td>
                                                    <td>'.$data->ba_rekon.'</td>
                                                    <td>'.$data->file.'</td>
                                                    <td>'.$data->bast.'</td>
                                                    <td>'.$data->bulan_bast.'</td>
                                                    <td>'.$data->inv.'</td>
                                                    <td>'.$data->no_inv.'</td>
                                                    <td>'.$data->nama_status.'</td>
                                                    <td>'.$data->anggaran.'</td>
                                                    <td>'.$data->nama_gmpm.'</td>
                                                    <td>'.$data->baut.'</td>
                                                    <td>'.$data->comment.'</td>
                                                    <td>
                                                    <a href="'.base_url().'index.php/user/edit/'.$data->id_lop.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a>
                                                    <a href="'.base_url().'index.php/user/hapus/'.$data->id_lop.'" class="btn btn-danger btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                                ';
                                        }
                                    ?>
                                        </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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