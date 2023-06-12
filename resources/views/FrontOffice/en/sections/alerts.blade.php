 @if (count($errors) > 0)
<div class = "alert alert-danger" id="message">
  <a type="button" onclick="hide()" style="font-size: 18px;"> x </a>
    @foreach ($errors->all() as $error)
          {{ $error }}
    @endforeach
</div>
@endif

@if(session()->has('status'))
<div class="alert alert-info" id="message">
  <a type="button" onclick="hide()" style="font-size: 18px;"> x </a>
  {{ session()->get('status') }}
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success" id="message">
  <a type="button" onclick="hide()" style="font-size: 18px;"> x </a>
  {{ session()->get('success') }}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger" id="message">
  <a type="button" onclick="hide()" style="font-size: 18px;"> x </a>
  {{ session()->get('error') }}
</div>
@endif

<script>
function hide(){
  document.getElementById("message").style.display = "none";
}
</script>