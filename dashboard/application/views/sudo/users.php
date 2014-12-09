<aside class="right-side">
	<section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
		<section class="content">
		<div class="box">
			<div class="box-body table-responsive no-padding">
				 	<!-- <div class="box-header">
						<button class="btn btn-default pull-left btnNewUser" data-create-user="auth/create_user">
							<?//=lang('index_create_user_link')?>
						</button>
						<button class="btn btn-default pull-left btnNewGroup" data-create-group="auth/create_group">
							<?//=lang('index_create_group_link');?>
						</button>
					</div> -->

					<div class="box-body table-responsive no-padding">
						<table class="table table-hover" >

							<!-- <tr>
								<th><?//php echo lang('index_fname_th');?></th>
								<th><?//php echo lang('index_lname_th');?></th>
								<th><?//php echo lang('index_email_th');?></th>
								<th><?//php echo lang('index_groups_th');?></th>
								<th><?//php echo lang('index_status_th');?></th>
								<th><?//php echo lang('index_action_th');?></th>
							</tr> -->
							<tr >
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Correo</th>
								<th>Acciones</th>
							</tr>
							<?php foreach ($usuarios['users'] as $user):?>
								<tr>
									<td><h5><?=$user->first_name?></h5></td>
									<td><h5><?=$user->last_name?></h5></td>
									<td><h5><?=$user->email?></h5></td>
									<!-- <td>
										<?//php foreach ($user->groups as $group):?>
											<button class="btn btn-danger btn-flat btnAdmin" data-group-id="<?=$group->id?>" >
												<?//=$group->name;?>
											</button> 
						                <?//php endforeach?>
									</td> -->
									<!-- <td>

										<?//php if($user->active):?>
											<button class="btn btn-primary btn-flat btnActive" data-estado-id='auth/deactivate/<?=$user->id?>'>
												<a class="sta"><?//=lang('index_active_link')?></a>
											</button>
										<?//php else:?>
											<button class="btn btn-primary btn-flat btnActive" data-estado-id='auth/activate/<?=$user->id?>'>
												<a class="sta"><?//=lang('index_inactive_link')?></a>
											</button>
										<?//php endif?>
									</td> -->
									<td>
                                        <button type="button" class="btn btn-flat btn-success btnEditar" data-user-id="<?=$user->id?>">
											<a href="<?=$user->id?>" class="editar">Editar</a>
                                        </button>
										<!-- <button class="btn btn-primary btn-flat btnEditar" data-user-id="<?=$user->id?>">
											<a href="<?=$user->id?>" class="editar">Editar</a>
										</button> -->
									</td>
								</tr>
							<?php endforeach;?>
						</table>
					</div>
			</div>
		</div>
		<section class="content">
			<span class="box-close"><i class="fa fa-times fa-2x"></i></span>
			<div class="box-admin"></div>
		</section>
	</section>
</aside>