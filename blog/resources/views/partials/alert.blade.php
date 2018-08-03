@if(Session::has('error'))
    <div class="custom-alerts alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('error')}}
    </div>
@endif