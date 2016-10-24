@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Show Post</h1>
	<img src="http://fillmurray.com/150/100">
	<h1>Employer Name</h1>

{{--  ******************** SKILLS SELECT TABLE *************************** --}}
<div class="">
    <b>  Skills :</b>
<select id="ddlCars" multiple="multiple">
<option value="PHP">PHP</option>
<option value="HTML">HTML</option>
<option value="CSS">CSS</option>
<option value="Laravel">Laravel</option>
<option value="Angular">Angular</option>
<option value="JAVA">JAVA</option>
</select>
</div>


<script>
	  $(document).ready(function() {
     $('#ddlCars').multiselect();
      $('#ddlCars1').multiselect({ 
         numberDisplayed: 6,
          
     });
       $('#ddlCars2').multiselect({ 
         includeSelectAllOption: true,
           enableFiltering:true         
           
     });
        $('#ddlCars3').multiselect({  
           nonSelectedText :'Select Cars'
           
     });
});

</script>
{{--  ******************** END SKILLS SELECT TABLE *************************** --}}



	<div class='container'>
		<div class="row table well">

{{-- @include('layouts.partials.skills') --}}
			<form class="form" method="POST" action="">
				{!! csrf_field() !!}
				{!! method_field('PUT') !!}
				Content: <textarea class="form-control" name="description" rows="5" cols="40" ></textarea>
				Location: <input class="form-control" type="text" name="location" value="">
				<input class="btn-success btn" type="submit">
			</form>
	
		</div>
	</div>
</div>
	
@stop