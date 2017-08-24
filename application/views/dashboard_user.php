    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <h2>VERIFIKATOR</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_proses_verif">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Proses Verfikasi</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_proses_verif ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block-header">
                <h2>NON PO</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_nopo_ogp">
                        <div class="icon">
                            <i class="material-icons">work</i>
                        </div>
                        <div class="content">
                            <div class="text">Persiapan & OGP</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_nopo_status ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_nopo_belum">
                        <div class="icon">
                            <i class="material-icons">not_interested</i>
                        </div>
                        <div class="content">
                            <div class="text">Belum Rekon</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_nopo_blm ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_nopo_sudah">
                        <div class="icon">
                            <i class="material-icons">check</i>
                        </div>
                        <div class="content">
                            <div class="text">Sudah Rekon</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_nopo_sudah ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block-header">
                <h2>PO</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_po_ogp">
                        <div class="icon">
                            <i class="material-icons">work</i>
                        </div>
                        <div class="content">
                            <div class="text">Persiapan & OGP</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_po_status ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_po_belum">
                        <div class="icon">
                            <i class="material-icons">not_interested</i>
                        </div>
                        <div class="content">
                            <div class="text">Belum Rekon</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_po_blm ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_po_bast">
                        <div class="icon">
                            <i class="material-icons">event_note</i>
                        </div>
                        <div class="content">
                            <div class="text">Rekon Belum BAST</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_po_bast ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_po_inv">
                        <div class="icon">
                            <i class="material-icons">border_color</i>
                        </div>
                        <div class="content">
                            <div class="text">BAST belum INV</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_po_inv ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-header">
                <h2>CLOSE</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/user/list_po_sudah">
                        <div class="icon">
                            <i class="material-icons">check</i>
                        </div>
                        <div class="content">
                            <div class="text">Close</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_po_done ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <!-- #END# CPU Usage -->
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <!-- #END# Answered Tickets -->
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>