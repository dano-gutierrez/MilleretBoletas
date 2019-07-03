	<div class="content-wrapper">
		<section class="content-header">
			<h1>Dashboard <small>Control panel</small></h1>
	  <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	  </ol>
	</section>

	<?php
		#$json="http://api.userinfo.io/userinfos";
		#$jsonfile = file_get_contents($json);
		#$ip=json_decode($jsonfile);
		#print_r($ip);
		#echo $ip->country->code;
	?>

	<section class="content">
		<div class="row">
			<?php if(intval($controller->check_permisos("allow_view"))>0){ ?>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>Boletas</h3>
						<p>Consulta de boletas</p>
					</div>
					<div class="icon"><i class="ion ion-pie-graph"></i></div>
					<a href="<?php echo base_url(); ?>consultar" class="small-box-footer">Consultar <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<?php } if(intval($controller->check_permisos("allow_edit"))>0){ ?>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>Editar</h3>
						<p>Editar boletas</p>
					</div>
					<div class="icon"><i class="ion ion-stats-bars"></i></div>
					<a href="<?php echo base_url(); ?>edicion" class="small-box-footer">Editar <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<?php } if(intval($controller->check_permisos("allow_add"))>0){ ?>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>Agregar</h3>
						<p>Agregar calificaciones</p>
					</div>
					<div class="icon"><i class="ion ion-clipboard"></i></div>
					<a href="<?php echo base_url(); ?>registro" class="small-box-footer">Agregar <i class="fa fa-arrow-circle-right"></i></a>
		  		</div>
			</div>
			<?php } ?>
	  	</div>
	  	<div class="row">
	  		<?php if(intval($controller->check_permisos("allow_materias"))>0){ ?>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-teal">
					<div class="inner">
						<h3>Materias</h3>
						<p>Ver/agregar materias</p>
					</div>
					<div class="icon"><i class="ion ion-university"></i></div>
					<a href="<?php echo base_url(); ?>editar_materias" class="small-box-footer">Consultar <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<?php } ?>
	  	</div>
	  	<?php if(intval($controller->check_permisos("allow_publish"))>0){ ?>
	  	<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-blue">
					<div class="inner">
						<h3>Publicar</h3>
						<p>Publicar boletas</p>
					</div>
					<div class="icon"><i class="ion ion-university"></i></div>
					<a href="javascript:;" id="publicar_boleta" class="small-box-footer">Publicar <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<img src="<?php echo base_url(); ?>img/loader.GIF" id="publicar_img" style="display:none;">
	  	</div>
	  	<?php } ?>
	  <!-- /.row -->
	  <?php /*
	  <!-- Main row -->
	  <div class="row">
		<!-- Left col -->
		<section class="col-lg-7 connectedSortable">
		  <!-- Custom tabs (Charts with tabs)-->
		  <!-- Chat box -->
		  <div class="box box-success">
			<div class="box-header">
			  <i class="fa fa-comments-o"></i>

			  <h3 class="box-title">Chat</h3>

			  <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
				<div class="btn-group" data-toggle="btn-toggle">
				  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
				  </button>
				  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
				</div>
			  </div>
			</div>
			<div class="box-body chat" id="chat-box">
			  <!-- chat item -->
			  <div class="item">
				<img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

				<p class="message">
				  <a href="#" class="name">
					<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
					Mike Doe
				  </a>
				  I would like to meet you to discuss the latest news about
				  the arrival of the new theme. They say it is going to be one the
				  best themes on the market
				</p>
				<div class="attachment">
				  <h4>Attachments:</h4>

				  <p class="filename">
					Theme-thumbnail-image.jpg
				  </p>

				  <div class="pull-right">
					<button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
				  </div>
				</div>
				<!-- /.attachment -->
			  </div>
			  <!-- /.item -->
			  <!-- chat item -->
			  <div class="item">
				<img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

				<p class="message">
				  <a href="#" class="name">
					<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
					Alexander Pierce
				  </a>
				  I would like to meet you to discuss the latest news about
				  the arrival of the new theme. They say it is going to be one the
				  best themes on the market
				</p>
			  </div>
			  <!-- /.item -->
			  <!-- chat item -->
			  <div class="item">
				<img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

				<p class="message">
				  <a href="#" class="name">
					<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
					Susan Doe
				  </a>
				  I would like to meet you to discuss the latest news about
				  the arrival of the new theme. They say it is going to be one the
				  best themes on the market
				</p>
			  </div>
			  <!-- /.item -->
			</div>
			<!-- /.chat -->
			<div class="box-footer">
			  <div class="input-group">
				<input class="form-control" placeholder="Type message...">

				<div class="input-group-btn">
				  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
				</div>
			  </div>
			</div>
		  </div>
		  <!-- /.box (chat box) -->

		  <!-- TO DO List -->
		  <div class="box box-primary">
			<div class="box-header">
			  <i class="ion ion-clipboard"></i>

			  <h3 class="box-title">To Do List</h3>

			  <div class="box-tools pull-right">
				<ul class="pagination pagination-sm inline">
				  <li><a href="#">&laquo;</a></li>
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
			  </div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <ul class="todo-list">
				<li>
				  <!-- drag handle -->
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <!-- checkbox -->
				  <input type="checkbox" value="">
				  <!-- todo text -->
				  <span class="text">Design a nice theme</span>
				  <!-- Emphasis label -->
				  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
				  <!-- General tools such as edit or delete-->
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
				<li>
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <input type="checkbox" value="">
				  <span class="text">Make the theme responsive</span>
				  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
				<li>
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <input type="checkbox" value="">
				  <span class="text">Let theme shine like a star</span>
				  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
				<li>
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <input type="checkbox" value="">
				  <span class="text">Let theme shine like a star</span>
				  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
				<li>
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <input type="checkbox" value="">
				  <span class="text">Check your messages and notifications</span>
				  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
				<li>
					  <span class="handle">
						<i class="fa fa-ellipsis-v"></i>
						<i class="fa fa-ellipsis-v"></i>
					  </span>
				  <input type="checkbox" value="">
				  <span class="text">Let theme shine like a star</span>
				  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
				  <div class="tools">
					<i class="fa fa-edit"></i>
					<i class="fa fa-trash-o"></i>
				  </div>
				</li>
			  </ul>
			</div>
			<!-- /.box-body -->
			<div class="box-footer clearfix no-border">
			  <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
			</div>
		  </div>
		  <!-- /.box -->
		</section>
		<!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-5 connectedSortable">
		  <!-- quick email widget -->
		  <div class="box box-info">
			<div class="box-header">
			  <i class="fa fa-envelope"></i>

			  <h3 class="box-title">Quick Email</h3>
			  <!-- tools box -->
			  <div class="pull-right box-tools">
				<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
				  <i class="fa fa-times"></i></button>
			  </div>
			  <!-- /. tools -->
			</div>
			<div class="box-body">
			  <form action="#" method="post">
				<div class="form-group">
				  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" name="subject" placeholder="Subject">
				</div>
				<div>
				  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				</div>
			  </form>
			</div>
			<div class="box-footer clearfix">
			  <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
				<i class="fa fa-arrow-circle-right"></i></button>
			</div>
		  </div>
		  <!-- Calendar -->
		  <div class="box box-solid bg-green-gradient">
			<div class="box-header">
			  <i class="fa fa-calendar"></i>

			  <h3 class="box-title">Calendar</h3>
			  <!-- tools box -->
			  <div class="pull-right box-tools">
				<!-- button with a dropdown -->
				<div class="btn-group">
				  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-bars"></i></button>
				  <ul class="dropdown-menu pull-right" role="menu">
					<li><a href="#">Add new event</a></li>
					<li><a href="#">Clear events</a></li>
					<li class="divider"></li>
					<li><a href="#">View calendar</a></li>
				  </ul>
				</div>
				<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
				</button>
			  </div>
			  <!-- /. tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body no-padding">
			  <!--The calendar -->
			  <div id="calendar" style="width: 100%"></div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-black">
			  <div class="row">
				<div class="col-sm-6">
				  <!-- Progress bars -->
				  <div class="clearfix">
					<span class="pull-left">Task #1</span>
					<small class="pull-right">90%</small>
				  </div>
				  <div class="progress xs">
					<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
				  </div>

				  <div class="clearfix">
					<span class="pull-left">Task #2</span>
					<small class="pull-right">70%</small>
				  </div>
				  <div class="progress xs">
					<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
				  </div>
				</div>
				<!-- /.col -->
				<div class="col-sm-6">
				  <div class="clearfix">
					<span class="pull-left">Task #3</span>
					<small class="pull-right">60%</small>
				  </div>
				  <div class="progress xs">
					<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
				  </div>

				  <div class="clearfix">
					<span class="pull-left">Task #4</span>
					<small class="pull-right">40%</small>
				  </div>
				  <div class="progress xs">
					<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
				  </div>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
		  </div>
		  <!-- /.box -->

		</section>
		<!-- right col -->
	  </div>
	  <!-- /.row (main row) -->
	  */ ?>

	</section>
	<!-- /.content -->
  </div>