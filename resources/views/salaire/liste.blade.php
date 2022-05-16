@extends('Base')


@section('content')
    <div class="main-content">

        <div class="page-content" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">salaire</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                    <li class="breadcrumb-item active">salaire</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6" style="padding:0px">
                <a data-bs-toggle="modal" data-bs-target="#myModal"  class="btn btn-xs btn-white btn-icon-only width-auto">
                    <i class="fa fa-plus"></i> ajouter
                </a>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <form method="post" action="{{route('create.salaire')}}">
                    {{ csrf_field() }}
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Nouvelle demande de congé</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <label  style="width: 150px; ">nom</label>
                                <input type="text" name="nom"><br>
                                <label style="width: 150px">type de salaire</label>
                                <input type="text" name="type_salaire"><br>
                                <label style="width: 150px">montant</label>
                                <input type="number" name="montant"><br>
                                <label style="width: 150px; ">montant net</label>
                                <input type="number" name="montant_net"><br>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Enregistrer</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="bloc_modal">

        </div>

    </div>
    <div class="row" style="margin-left: 250px;margin-right: 10px">
        <div class="col-12">
            <div class="card">
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0 dataTable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>nom</th>
                                <th>type_salaire</th>
                                <th>montant</th>
                                <th>montant_net</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($salaires as $key => $salaire)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$salaire->nom}}</td>
                                    <td>{{$salaire->type_salaire}}</td>
                                    <td>{{$salaire->montant}}</td>
                                    <td>{{$salaire->montant_net}}</td>
                                    <td class="text-center">
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                                            <a class="edit-modal" data-id="{{$salaire->id}}" class="btn btn-xs btn-white btn-icon-only width-auto">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="delete-modal " data-id="{{$salaire->id}}" style="color: red" class="btn btn-xs btn-red btn-icon-only width-auto">
                                                <i class='fa fa-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$salaires->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
@section('scripts')
    <script>
            var $montant ="";
            var $montant_net ="";
            function update_val1()
            {
            $nombre1 = document.getElementById('nombre1').value;
            $montant_net = $nombre1*0.1925;
            alert($montant_net);
        }
        var $statut ="";
            function color()
            {
                if $statut="refuser"{
                    $statut<-<input type="text" style="color:red">;
                }

            }

    </script>
@endsection
