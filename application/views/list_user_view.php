    <style>
table {
    table-layout:fixed;
}
td{
    overflow:hidden;
    width: 200px;
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
                            <h2>List User</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="table-responsive">
                                        <table id="tb_induk" class="display" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>NIK</th>
                                            <th>NAMA</th>
                                            <th>FUNGSI</th>
                                            <th>WITEL</th>
                                            <th>PASSWORD</th>
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
                                                    <td>'.$data->nik.'</td>
                                                    <td>'.$data->nama.'</td>
                                                    <td>'.$data->fungsi.'</td>
                                                    <td>'.$data->nama_witel.'</td>
                                                    <td>'.$data->password.'</td>
                                                    <td>
                                                    <a href="'.base_url().'index.php/admin/edit/'.$data->nik.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a>
                                                    <a href="'.base_url().'index.php/admin/hapus/'.$data->nik.'" class="btn btn-danger btn-sm" onclick="return confirm('.$alert.')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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