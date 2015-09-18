@if(Session::has("message"))
    <div style='text-align:center' class="alert alert-success">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <strong>{!!Session::get('message')!!}</strong>
    </div>
@endif
