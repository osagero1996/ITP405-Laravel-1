@extends('layout')

@section('main')

<form method="post">
  @csrf
  <div class="form-group form-check">
  @if ($config == "off")
      <input type="checkbox" class="form-check-input" id="configCheck" name="configCheckBox" value="config">
      <label class="form-check-label" for="configCheckBox">Configuration</label>
  @else
      <input type="checkbox" class="form-check-input" id="configCheck" name="configCheckBox" value="config" checked>
      <label class="form-check-label" for="configCheckBox">Configuration</label>
  @endif
  
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
