@extends('Base')





@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Annuire des employes</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                        <li class="breadcrumb-item active">Annuire des employes</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                <!-- end row -->
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
            <a data-bs-toggle="modal" data-bs-target="#myModal"  class="btn btn-xs btn-white btn-icon-only width-auto">
                <i class="fa fa-plus"></i> ajouter
            </a>
        </div>


        <!-- Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form method="post" action="{{route('create.employe')}}">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Nouvelle employé</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <label  style="width: 150px; ">nom </label>
                                <input style="" type="text" name="nom" value=""><br>
                                <label  style="width: 150px; ">prenom</label>
                                <input type="text" name="prenom" value=""><br>

                                <label  style="width: 150px; ">poste</label>
                                    <input type="text" name="poste" value=""><br>

                            <label  style="width: 150px; "> numero de la cni</label>
                            <input type="number" name="numero_cni" value=""><br>

                            <label style="width: 150px"> type de contrat</label>
                            <select name="contrat">
                                <option> </option>
                                <option>CDI</option>
                                <option>CDD</option>
                            </select><br>
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
    <div id="bloc_modal" style="height:auto">

    </div>

    </div>

                <div class="row" style="margin-left:250px;margin-right: 10px;height:auto">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body py-0">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 dataTable">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>Email</th>
                                                <th>tel</th>
                                                <th>sexe</th>
                                                <th>poste</th>
                                                <th>departement</th>
                                                <th>contrat</th>
                                                <th>numero_cni</th>
                                                <th>date_naissance</th>
                                                <th>lieu_naissance</th>
                                                <th>situation_marital</th>
                                                <th>debut</th>
                                                <th width="3%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employes as $key => $employe)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$employe->nom}}</td>
                                                    <td>{{$employe->prenom}}</td>
                                                    <td>{{$employe->email}}</td>
                                                    <td>{{$employe->tel}}</td>
                                                    <td>{{$employe->sexe}}</td>
                                                    <td>{{$employe->poste}}</td>
                                                    <td>{{$employe->departement}}</td>
                                                    <td>{{$employe->contrat}}</td>
                                                    <td>{{$employe->numero_cni}}</td>
                                                    <td>{{$employe->date_naissance}}</td>
                                                    <td>{{$employe->lieu_naissance}}</td>
                                                    <td>{{$employe->situation_marital}}</td>
                                                    <td>{{$employe->debut}}</td>
                                                    <td class="text-center">
                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                                                            <a class="view-employe" data-id="{{$employe->id}}" class="btn btn-info btn-sn" arria-hiddem="true" >
                                                                <i style="color: springgreen" class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="edit-employe" data-id="{{$employe->id}}" class="btn btn-xs btn-white btn-icon-only width-auto">
                                                                <i class="fa fa-edit"></i>
                                                            </a>

                                                            <a class="delete-employe " data-id="{{$employe->id}}" style="color: red" class="btn btn-xs btn-red btn-icon-only width-auto">
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
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        $( document ).ready(function() {
            $(document).on('click', '.edit-employe', function () {
                $.ajax('{{url('/employe/show')}}/' + $(this).attr('data-id'), {
                    type: 'get',  // http method
                    success: function (data, status, xhr) {
                        $('#bloc_modal').html(data);
                        $('#updateModalEmploye').modal("show");
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });

            });
            $(document).on('click', '.view-employe', function () {
                $.ajax('{{url('/employe/view')}}/' + $(this).attr('data-id'), {
                    type: 'get',  // http method
                    success: function (data, status, xhr) {
                        $('#bloc_modal').html(data);
                        $('#viewModalEmploye').modal("show");
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });

            });

            $(document).on('click', '.delete-employe', function () {
                $.ajax('{{url('/employe/destroy')}}/' + $(this).attr('data-id'), {
                    type: 'get',  // http method
                    success: function (data, status, xhr) {
                        $('#modal').html(data);
                        $('#DeleteModalEmploye').modal("show");
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });

            });
        });
    </script>
@endsection

