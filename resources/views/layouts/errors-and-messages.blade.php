@if(count($errors)>0)
<div class="box no-border">
    <div class="box-tools">
        @foreach($errors->all() as $message)
        <p class="alert alert-warning alert-dismissible"> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
        @endforeach
    </div>
</div>
@elseif(session()->has('message'))
<div class="box-tools">
    <p class="alert alert-success alert-dismissible">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </p>
</div>
@elseif(session()->has('error'))
<div class="box no-border">
    <div class="box-tools">
        <p class="alert alert-danger alert-dismissible">
            {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
    </div>
</div>
@elseif(session()->has('warning'))
<div class="box no-border">
    <div class="box-tools">
        <p class="alert alert-warning alert-dismissible">
            {{ session()->get('warning') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
    </div>
</div>
@elseif(session()->has('success'))
<div class="box no-border">
    <div class="box-tools">
        <p class="alert alert-success alert-dismissible">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </p>
    </div>
</div>
@endif