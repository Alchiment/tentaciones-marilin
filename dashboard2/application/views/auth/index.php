<aside class="right-side">
	<!-- <div class="col-xs-12"> -->
			<section class="content-header">
					<h1 class="box-title"><?php echo lang('index_heading');?></h1>
					<a href="auth/logout">Cerrar</a>
					<!-- <button class="btn btn-default pull-left"><?//=anchor('auth/create_user', lang('index_create_user_link'))?></button> -->
					<!-- <button class="btn btn-default pull-left"><?//=anchor('auth/create_group', lang('index_create_group_link'));?></button> -->
					<p class="pull-right"><?php echo lang('index_subheading');?></p><br>
				
			</section>
			<section class="content">
		<div class="box">
				
			 <div class="box-body table-responsive no-padding">
			 	 <div class="box-header">
					<button class="btn btn-default pull-left btnNewUser" data-create-user="auth/create_user">
						<?=lang('index_create_user_link')?>
					</button>
					<button class="btn btn-default pull-left btnNewGroup" data-create-group="auth/create_group">
						<?=lang('index_create_group_link');?>
					</button>
				</div>
					<div class="box-body table-responsive no-padding">
						<table cellpadding=0 cellspacing=10 class="table table-hover">
							<tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							</tr>
							<?php foreach ($users as $user):?>
								<tr>
									<td><h4 class="box-title"><?=$user->first_name;?></h4></td>
									<td><h4 class="box-title"><?=$user->last_name;?></h4></td>
									<td><h4 class="box-title"><?=$user->email;?></h4></td>
									<td>
										<?php foreach ($user->groups as $group):?>
											<button class="btn btn-danger btn-flat btnAdmin" data-group-id="<?=$group->id?>" >
												<?=$group->name;?>
											</button> 
						                <?php endforeach?>
									</td>
									<td>
										<?php if($user->active):?>
											<button class="btn btn-primary btn-flat btnActive" data-estado-id='auth/deactivate/<?=$user->id?>'>
												<a class="sta"><?=lang('index_active_link');?></a>
											</button>
										<?php else:?>
											<button class="btn btn-primary btn-flat btnActive" data-estado-id='auth/activate/<?=$user->id?>'>
												<a class="sta"><?=lang('index_inactive_link');?></a>
											</button>
										<?php endif?>
									</td>
									<td>
										<button class="btn btn-primary btn-flat btnEditar" data-user-id="<?=$user->id?>">
											<a href="<?=$user->id?>" class="editar">Editar</a>
										</button>
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
	<!-- </div> -->
</aside>