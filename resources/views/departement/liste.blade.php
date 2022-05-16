@extends('Base')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">departement</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NUSYCE</a></li>
                                    <li class="breadcrumb-item active">Departement</li>
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

        <div class="col-md-4" style="margin-left: 728px">
            <form action={{url('/search')}} method="get">
                <div  class="input-group">
                    <input type="search" name="query" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">
                            search
                        </button>
                    </span>
                </div>
            </form>
        </div>


        <!-- Modal -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form method="post" action="{{route('create.departement')}}">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Nouveau departement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="nom">Nom du departement</label>
                          <input autocomplete="off"  type="text" name="nom" id="nom" class="form-control">
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
                                        <th>NOM</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        @foreach($departements as $key => $departement)
                                            <tr>
                                                {{--<th scope="row">{{$loop->index +1}}</th>--}}
                                                <td>{{$key+1}}</td>
                                                <td>{{$departement->nom}}</td>
                                                <td class="text-center">
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                                                        <a class="edit-modal" data-id="{{$departement->id}}" class="btn btn-xs btn-white btn-icon-only width-auto">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a class="delete-modal " data-id="{{$departement->id}}" style="color: red" class="btn btn-xs btn-red btn-icon-only width-auto">
                                                            <i class='fa fa-trash'></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            {{$departements->links()}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

<!-- /.modal-dialog -->



@endsection
@section('scripts')
    <script>
        $( document ).ready(function() {
            $(document).on('click', '.edit-modal', function () {
                $.ajax('{{url('/departement/show')}}/' + $(this).attr('data-id'), {
                    type: 'get',  // http method
                    success: function (data, status, xhr) {
                        $('#bloc_modal').html(data);
                        $('#updateModalDepartement').modal("show");
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });
            });

            $(document).on('click', '.delete-modal', function () {
                $.ajax('{{url('/departement/destroy')}}/' + $(this).attr('data-id'), {
                    type: 'get',  // http method
                    success: function (data, status, xhr) {
                        $('#bloc_modal').html(data);
                        $('#DeleteModalDepartement').modal("show");
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error' + errorMessage);
                    }
                });

            });
        });
    </script>
@endsection
