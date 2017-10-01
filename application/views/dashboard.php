	<div id="container">
	<br><br>
		<div class="row">
			<div class="col-md-2">
				<!-- dummy space -->
			</div>
			<!-- Accordions -->
			<div class="col-md-8">
			<?php if(sizeof($workshops)>0) {?>
			<?php foreach ($workshops as $key => $value) { ?>
				<div class="card">
                    <div class="card-header bgm-cyan"> 
                        <h2><?php echo $value->title; ?><small><?php echo date("F j, Y, g:i a",strtotime($value->date)); ?></small></h2>
                        <button id="login-btn" type="submit" class="btn btn-default btn-lg pull-right apply-btn" disabled="true">Applied</button>
                    </div>

                    <div class="card-body card-padding">
                        <?php echo $value->description; ?>
                    </div>
                </div>
			<?php } } else {?>
			You didn't apply to any workshop...
			<?php } ?>
           	</div>

            <div class="col-md-2">
            <!-- dummy space -->
			</div>

        </div>
    </div>