@extends('layout.adminLayout')

@section('main')

<div style="width:100%; height:700px;" id="orgchart"></div>  

<script>
        var chart = new OrgChart(document.getElementById("orgchart"), {
            nodeBinding: {
                field_0: "name"
            },
            nodes: [
                { id: 1, name: "Amber McKenzie" },
                { id: 2, pid: 1, name: "Ava Field" },
                { id: 3, pid: 1, name: "Peter Stevens" }
            ]
        });
    </script>
    
<!-- <div id="diagram_container"></div>         
                <div class="row mt-5 mb-4">
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Wakil Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Wakil Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Wakil Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Wakil Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pengurus-item col-lg-3 col-md-4 col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ URL::asset('/dist/img/pengurus/Ketua.jpeg') }}" class="card-img-top"
                                        alt="...">

                                    <div class="card-body">
                                        <div class="dashboard-heading">
                                            <h5 class="card-title">
                                                Brillianita
                                            </h5>
                                            <h6 class="card-title">
                                                Wakil Ketua Organisasi <a href=""><i class="fa fa-pencil"></i></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> -->
@endsection