    <section class="content">
        <div class="container-fluid">
            
            <!-- Widgets -->
            <div class="block-header">
                <h2>History Inputer</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/verifikator/list_input">
                        <div class="icon">
                            <i class="material-icons">done</i>
                        </div>
                        <div class="content">
                            <div class="text">Input Data</div>
                            <div href="<?php echo base_url()?>index.php/verifikator/list_input" class="number count-to" data-from="0" data-to="<?php echo $count_history_input?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/verifikator/list_edit">
                        <div class="icon">
                            <i class="material-icons">border_color</i>
                        </div>
                        <div class="content">
                            <div class="text">Edit Data</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_history_edit ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </a>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                    <a href="<?php echo base_url()?>index.php/verifikator/list_delete">
                        <div class="icon">
                            <i class="material-icons">delete</i>
                        </div>
                        <div class="content">
                            <div class="text">Delete Data</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $count_history_delete ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </a>
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