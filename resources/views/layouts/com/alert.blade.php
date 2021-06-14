@if(session('success'))
 	<div class="alert alert-icon alert-success alert-dismissible" role="alert">
 		<button type="button" class="close text-white" data-dismiss="alert">x</button>
      	<h6><i class="fas fa-check"></i> {{session('success')}}</h6> 
    </div>
@endif
