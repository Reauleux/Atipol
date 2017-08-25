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
                                            <th>NAMA FILE</th>
                                            <th>JUMLAH LOP</th>
                                            <th>PREVIEW</th>
                                            <th>TIPE DATA</th>
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
                                                    <td>'.$data->nama_foto.'</td>
                                                    <td><center>'.$data->jumlah.'</center></td>
                                                    <td><a rel="noopener noreferrer" target="_blank" href="'.base_url().'upload-foto/'.$data->nama_foto.'">Lihat File</a></td>
                                                    <td>'.$data->tipe_data.'</td>
                                                    <td>
                                                    <a href="'.base_url().'index.php/user/edit/'.$data->id_lop.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Tambah LOP</a>
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