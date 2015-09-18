@if($errors->any())
    <div style='text-align:center' class="alert alert-danger">
        <a href="#"class="close" data-dismiss="alert">&times;</a>
        {!!implode("",$errors->all("<div>:message</div>"))!!}
    </div>
@endif
