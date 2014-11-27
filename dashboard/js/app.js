$(function(){
	/*************************************/
	/*			GROUPS					 */
	/*************************************/
	// 1 == Admin
	// 2 == members
	$('.box-close').hide();

	$('.box-close').click(function(){
		$('.box-admin').html('');
		$(this).hide();
	});
	
	//Create
		$('.btnNewGroup').on('click', function(e){
			e.preventDefault();
			$('.box-admin').load('auth/create_group');
			$('.box-close').show();
		});
		$('.btnNewUser').on('click', function(e){
			e.preventDefault();
			$('.box-admin').load('auth/create_user');
			$('.box-close').show();
		});
	// Groups
		$('.btnAdmin').on('click', function(e){
			e.preventDefault();
			var get = $(this).data('group-id');
			$('.box-admin').load('auth/edit_group/'+get);
			$('.box-close').show();
		});
	//State
	$('.btnActive').on('click',function(e){
		e.preventDefault();
		var get = $(this).data('estado-id');
		$('.box-admin').load(get);
		$('.box-close').show();
	});
	//Editr
	$('.btnEditar').on('click',function(e){
		e.preventDefault();
		var get = $(this).data('user-id');
		$('.box-admin').load('auth/edit_user/'+get);
		$('.box-close').show();
	});

	// $('.logout').click(function(){
	// 	window.location('auth/logout');
	// });
});