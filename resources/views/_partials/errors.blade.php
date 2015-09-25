@if($errors->any())
    <div style='text-align:center' class="alert alert-danger">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <strong>{!!implode("",$errors->all("<div>:message</div>"))!!}</strong>
    </div>
@endif
@if(Session::has('error'))
    <div style='text-align:center' class="alert alert-danger">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        <strong>{!!Session::get('error')!!}</strong>
    </div>
@endif
