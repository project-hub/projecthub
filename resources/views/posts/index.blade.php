@extends('layouts.master')

@section('content')

<div class="container">
	
{{--  ******************** SKILLS SELECT TABLE *************************** --}}
{{-- <div>	
	@include('layouts.partials.skills')
</div> --}}
<div class="">
    <b>  Sort By :</b>
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




	<h1>Posts</h1>
	<div class='container'>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Most Recent</p>
			</div>
		</tr>
	</div>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Created_at</p>
			</div>
		</tr>
	</div>
	<div class="row table well">
		<tr>
			<div class="col-sm-12 text-center">
			<img class="pull-left" src="http://fillmurray.com/150/100" />
				<p>Employer Name</p>
				<p>Project Description</p>
				<p>Location</p>
				<p class="pull-right">Created_at</p>
			</div>
		</tr>
	</div>

	</div>
</div>
	
@stop