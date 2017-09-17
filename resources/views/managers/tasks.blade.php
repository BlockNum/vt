@extends('layouts.generalvinos')

@section('content')

<style>

.brand_network {
    color: #9D9D9D;
    float: left;
    position: absolute;
    left: 70px;
    top: 30px;
    font-size: smaller;
}

.post-content {
    margin-left:58px;
}

.badge-important {
    margin-top: 3px;
    margin-left: 25px;
    position: absolute;
}

.body {
    background-color: red;
    background: red;
}
.img-responsive{
    max-width:150px;
    border: 5px solid #fff;
    border-radius: 100%;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3l,)
}
</style>

        <div style="padding-top:25px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                            <a href="">Change Image</a>
                        </div>
                        <div class="media-body">
                            <h3><strong>Location</strong></h3>
                            <p> <h1>{{ $id->Location }}</h1>
                            <p>Unknown</p>
                            <hr>
                            <h3><strong>Gender</strong></h3>
                            <p>Unknown</p   >
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;"> <h1>{{ $id->first_name }} {{ $id->last_name }}</h1>
                                      
                                         <small><h5>{{ $id->email }}</h5></small> </h1>
                        <div class="dropdown pull-right">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Familly</a></li>
                                <li><a href="#">Work</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add a new aspect</a></li>
                            </ul>
                        </div>
                    </span>
                    <br><br>
                    <br><br><hr>
                </div>
            </div>
            <hr>
            
                    <hr>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="logout" method="POST" id="logout-form">

                  {{ csrf_field() }}

                  <a href="#" onclick="document.getElementById('logout-form').submit()">Cerrar sesion</a>
</form>


@endsection
