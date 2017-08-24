    <style>
table {
    table-layout:fixed;
}
td{
    overflow:hidden;
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
                            <h2>ALL DATA</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="table-responsive">
                                        <table id="tb_induk" class="display" cellspacing="0">
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
                                            <th>HAPUS</th>
                                            <th>EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
 
            var save_method; //for save method string
            var table;
 
            $(document).ready(function() {
                //datatables
                table = $('#tb_induk').DataTable({ 
                    "ordering": false,
                    "searching": true,
                    "processing": true,
                    "responsive": true, //Feature control the processing indicator.
                     //Feature control DataTables' server-side processing mode.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": '<?php echo base_url();?>index.php/all_data/json_user',
                        "type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                        {"data": "id_lop",width:150},
                        {"data": "nama_teritori",width:150},
                        {"data": "nama_witel",width:150},
                        {"data": "id_project",width:150},
                        {"data": "pekerjaan",width:150},
                        {"data": "nama_pekerjaan",width:150},
                        {"data": "nama_program",width:150},
                        {"data": "id_deployer",width:150},
                        {"data": "nilai_rekon",width:150},
                        {"data": "bulan_tahun",width:150},
                        {"data": "status_pekerjaan",width:150},
                        {"data": "vess",width:150},
                        {"data": "no_vestyna",width:150},
                        {"data": "pr",width:150},
                        {"data": "po",width:150},
                        {"data": "no_po",width:150},
                        {"data": "ba_rekon",width:150},
                        {"data": "file",width:150},
                        {"data": "bast",width:150},
                        {"data": "inv",width:150},
                        {"data": "no_inv",width:150},
                        {"data": "bulan_bast",width:150},
                        {"data": "nama_status",width:150},
                        {"data": "anggaran",width:150},
                        {"data": "nama_gmpm",width:150},
                        {"data": "baut",width:150},
                        {"data": "comment",width:150},
                        {"data": "hapus",width:65},
                        {"data": "edit",width:50},
                    ],

 
                });
 
            });
        </script>