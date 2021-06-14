<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New car</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">prix:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="prix" id="prix">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">model:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="model" id="model">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="addbutton" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit car</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="editForm">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">prix:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="eprix" id="eprix">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" style="position:relative; top:7px;">model:</label>
						</div>
						<div class="col-md-10">
							<input type="text" class="form-control" name="emodel" id="emodel">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="editbutton" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>

<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete car</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h5><center>Model: <strong><span id="dprix"></span></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="delbutton" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </div>
				
            </div>
        </div>
    </div>
