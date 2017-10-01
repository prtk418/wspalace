    <div id="container">
    <br><br>
        <div class="row">
            <div class="col-md-2">
                <!-- dummy space -->
            </div>
            <!-- Accordions -->
            <div class="col-md-8">
            <?php if(sizeof($workshops)>0) { ?>

            <?php foreach ($workshops as $key => $value) { ?>
                <div class="card">
                    <div class="card-header bgm-cyan"> 
                        <h2><?php echo $value->title; ?><small><?php echo date("F j, Y, g:i a",strtotime($value->date)); ?></small></h2>
                        <?php if(isset($value->applied)) { ?>
                        <button id="login-btn" type="submit" class="btn btn-default btn-lg pull-right apply-btn" disabled="true">Applied</button>
                        <?php } else { ?>
                        <button id="login-btn" type="submit" class="btn btn-default btn-lg pull-right apply-btn" onclick="apply_to_workshop('<?php echo $value->id ?>','<?php echo $this->session->userdata('id'); ?>')">Apply</button>
                        <?php } ?>                        
                    </div>

                    <div class="card-body card-padding">
                        <?php echo $value->description; ?>
                    </div>
                </div>
            <?php } }else {?>
            Currently No Workshops are available!!!
            <?php } ?>
            </div>

            <div class="col-md-2">
            <!-- dummy space -->
            </div>
        </div>
    </div>