$(document).ready(function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
		
		$('#btn-save').click(function(){
			var cmt  = $('#comments').val();
			var url = $('#form').attr('action');
			var post = "POST";
			var id = $('#user_id').val();
			
			 $.ajax({
			 	type : post,
			 	url  : url,
			 	data : {'comments':cmt,'id':id},
			 	dataType : 'JSON',
			 	success: function(data){
			 		console.log(data);
			 		$('#showComments').append("<span>"+data.id+"</span> "+data.comments+"</br>"); 
			 		$('#comments').val("");  
			 	}
			 });
		});
		
	});