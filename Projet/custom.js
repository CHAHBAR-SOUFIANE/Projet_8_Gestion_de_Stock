$(document).ready(function(){
	showTable();

	//add
	$('#add').click(function(){
		$('#addnew').modal('show');
		$('#addForm')[0].reset();
	});

	$('#addbutton').click(function(){
		var first = $('#prix').val();
		var last = $('#model').val();
		if(first!='' && last!==''){
			var addForm = $('#addForm').serialize();
			$.ajax({
				type: 'POST',
				url: 'api/add.php',
				data: addForm,
				success:function(){
					$('#addnew').modal('hide');
					$('#addForm')[0].reset();
					showTable();
					$('#alert').slideDown();
					$('#alerttext').text('car Added Successfully');
				}
			});
		}
		else{
			alert('Please input both Fields')
		}
		
	});
	//
	//edit
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		var first = $('#first'+id).text();
		var last = $('#last'+id).text();
		$('#editmem').modal('show');
		$('#eprix').val(first);
		$('#emodel').val(last);
		$('#editbutton').val(id);
	});

	$('#editbutton').click(function(){
		var id = $(this).val();
		var editForm = $('#editForm').serialize();
		$.ajax({
			type: 'POST',
			url: 'api/edit.php',
			data: editForm + "&id="+id,
			success:function(){
				$('#editmem').modal('hide');
				$('#editForm')[0].reset();
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('car Updated Successfully');
			}
		});
	});
	//
	//delete
	$(document).on('click', '.delete', function(){
		var id = $(this).data('id');
		var last = $('#last'+id).text();
		$('#delmem').modal('show');
		$('#dprix').text(last);
		$('#delbutton').val(id);
	});

	$('#delbutton').click(function(){
		var id = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'api/delete.php',
			data: {
				id: id,
			},
			success:function(){
				$('#delmem').modal('hide');
				showTable();
				$('#alert').slideDown();
				$('#alerttext').text('car Deleted Successfully');
			}
		});
	});

});

function showTable(){
	$.ajax({
		type: 'POST',
		url: 'api/fetch.php',
		data: {
			fetch: 1
		},
		success:function(data){
			$('#table').html(data);
		}
	});
}