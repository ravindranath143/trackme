@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!123
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@push('footer.script')
<script type="text/javascript">
console.log('coming here');
</script>
@endpush