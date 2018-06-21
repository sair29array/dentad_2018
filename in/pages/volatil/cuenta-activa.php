<?php ?>


<!-- Automatic element centering -->
<div class="content-wrapper mt-5">


	<div class="col-12 card">
		<div class="card-body">
			<div class="row">
			<div class="col-md-3">
				<div class="text-center">
			      <img class="img img-fluid " src="dist/img/user_check.png" alt="cuenta activa">
			    </div> 
			</div>
			<div class="col-md-7">
			  <div class="lockscreen-logo">
			    <a href="#"><b>Tu cuenta está activa</b></a>
			    <h5><?php echo $_SESSION["_user_log"] ?></h5>
			  </div>
			</div>

			<div class="col-md-2 mt-3 text-center">
				<a href="./" class="btn btn-info">Ok</a>
			</div>
		</div>
		</div>
	</div>
  
  <!-- User name -->
  

</div>
  <!-- /.lockscreen-item -->

 
</div>
<!-- /.center -->