@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    <?php
                        echo "<pre>";
                    print_r(\Illuminate\Support\Facades\Auth::guard('admin')->user());
                    echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection