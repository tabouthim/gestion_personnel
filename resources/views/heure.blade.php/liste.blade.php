@extends('Base')






@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">heure de travail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                    <li class="breadcrumb-item active">heure de travail</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>


        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6" style="padding:0px">
            <a data-bs-toggle="modal" data-bs-target="#myModal"  class="btn btn-xs btn-white btn-icon-only width-auto">
                <i class="fa fa-plus"></i> ajouter
            </a>
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form method="post" action="{{route('create.heure')}}">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">heure de travail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label  style="width: 150px; ">Employe</label>
                            <input type="text" name="employe"><br>
                            <label style="width: 150px">date </label>
                            <input type="date" name="date"><br>
                            <label style="width: 150px">heure d'arriver</label>
                            <input type="time" name="heure_debut"><br>
                            <label style="width: 150px; ">heure d'arret</label>
                            <input type="time" name="heure_fin"><br>
                            <label style="width: 150px; ">total d'heure</label>
                            <input type="time" name="total"><br>
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
                                <th>employe</th>
                                <th>date</th>
                                <th>date de debut</th>
                                <th>date de fin</th>
                                <th>nombre de jour</th>
                                <th>statut</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($conges as $key => $conge)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$conge->employe}}</td>
                                    <td>{{$conge->type_conge}}</td>
                                    <td>{{$conge->date_debut}}</td>
                                    <td>{{$conge->date_fin}}</td>
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
                        {{$conges->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
