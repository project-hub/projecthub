<div class="">
    <select id="ddlSkills" multiple="multiple">
        @foreach($skills as $skill)
            <option value="{{ $skill->name }}">{{ $skill->name }}</option>
        @endforeach
    </select>
</div>

{{-- <div class="">
  <select id="ddlSkills" multiple="multiple">
    <option value="PHP">PHP</option>
    <option value="HTML">HTML</option>
    <option value="CSS">CSS</option>
    <option value="Laravel">Laravel</option>
    <option value="Angular">Angular</option>
    <option value="JAVA">JAVA</option>
  </select>
</div> --}}
<script>
	     $(document).ready(function() {
          $('#ddlCars').multiselect();
          $('#ddlSkills').multiselect({ 
            nonSelectedText :'Select Skills',
            includeSelectAllOption: true,        
          });
        });

</script>
