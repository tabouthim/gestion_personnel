@extends('Base')


@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Tableau de presence</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                    <li class="breadcrumb-item active">Tableau de presence</li>
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
                <i class="fa fa-plus"></i>ajouter une presence
            </a>
        </div>


        <!-- Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form method="post" action="{{route('create.presence')}}">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="nom">employe </label>
                            <input autocomplete="off"  type="text" name="employe" id="employe" class="form-control">
                            <label for="nom"> heure d'arriver</label>
                            <input autocomplete="off"  type="time" name="heure_arriver" id="date_heure_arriver" class="form-control">
                            <label style="width: 150px">heure de retour</label>
                            <input autocomplete="off"  type="time" name="heure_retour" id="date_heure_retour" class="form-control">
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
                                <th>ID</th>
                                <th>employe</th>
                                <th>heure d'arriver</th>
                                <th>heure de retour</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($presences as $key => $presence)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$presence->employe}}</td>
                                    <td>{{$presence->heure_arriver}}</td>
                                    <td>{{$presence->heure_retour}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$presences->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
