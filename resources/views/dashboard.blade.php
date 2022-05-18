@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <br>
            <div id="particles-js" style="background-color: #1a202c; margin-top:-2rem; border-radius:15px;">
                <div class="banner" style="width: 500px;background: rgba(255,255,255,0.3); position: absolute; top:40%;left:30%;text-align: center;padding: 20px; border-radius:5px">
                    <h1 style="color: #1a202c; font-style:oblique;">Selamat Datang {{ Auth::user()->name }}!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../assets/particles/particles.js"></script>
<script type="text/javascript" src="../../assets/particles/app.js"></script>
@endsection