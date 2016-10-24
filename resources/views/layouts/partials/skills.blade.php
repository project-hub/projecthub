@extends('layouts.master')



@section('content')
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



{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/javascript" charset="utf-8" async defer></script> --}}
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
@stop