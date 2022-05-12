@extends('Base')


@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Conges</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                    <li class="breadcrumb-item active">Conges</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>

        @extends('Base')

                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <a data-bs-toggle="modal" data-bs-target="#myModal"  class="btn btn-xs btn-white btn-icon-only width-auto">
                        <i class="fa fa-plus"></i> ajouter
                    </a>
                </div>


                <!-- Modal -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <form method="post" action="{{route('create.conge')}}">
                        {{ csrf_field() }}
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">Nouvelle demande de congé</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label  style="width: 150px; ">date de naissance</label>
                                    <input type="date" name="date_naissance"><br>

                                    <label  style="width: 150px; ">lieu de naissance</label>
                                    <input type="text" name="lieu_naissance"><br>

                                    <label style="width: 150px"> situation maritale</label>
                                    <select name="situation_marital">
                                        <option> </option>
                                        <option>marié</option>
                                        <option>celibataire</option>
                                    </select><br>
                                    <label style="width: 150px"> sexe</label>
                                    <select name="sexe">
                                        <option style="color: #7c8a96">choisir le sexe de l'employer </option>
                                        <option>masculin</option>
                                        <option>feminin</option>
                                    </select><br>
                                    <label style="width: 150px"> departement</label>
                                    <select name="departement">
                                        <option>RH</option>
                                        <option>Developpeur web</option>
                                        <option>developpeur android</option>
                                        <option>graphiste</option>
                                        <option>marketing</option>
                                    </select><br>
                                    <label style="width: 150px; " for="start">date de debut:</label>

                                    <input type="date" id="start" name="debut"
                                           value="2018-07-22"
                                           min="2018-01-01" max="2050-12-31"><br>
                                    <label  style="width: 150px; ">Email</label>
                                    <input type="text" name="email" value=""><br>
                                    <label  style="width: 150px; ">tel</label>
                                    <input type="tel" name="tel" value="">
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
                                <th>employe</th>
                                <th>type_conge</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>raison</th>
                                <th>total_jour</th>
                                <th>statut</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($conges as $key => $conge)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$conge->employe}}</td>
                                    <td>{{$conge->date_debut}}</td>
                                    <td>{{$conge->date_fin}}</td>
                                    <td>{{$conge->raison}}</td>
                                    <td>{{$conge->total_jour}}</td>
                                    <td>{{$conge->statut}}</td>
                                    <td class="text-center">
                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                                            <a class="edit-modal" data-id="{{$conge->id}}" class="btn btn-xs btn-white btn-icon-only width-auto">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="delete-modal " data-id="{{$conge->id}}" style="color: red" class="btn btn-xs btn-red btn-icon-only width-auto">
                                                <i class='fa fa-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- /.modal-dialog -->



@endsection
@section('scripts')

@endsection
