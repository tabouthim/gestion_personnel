<div id="updateModalDepartement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="{{route('departement.update')}}">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modifier departement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" id="id" name="id" value="{{$employe->id}}">

                <div class="modal-body">
                    <label for="nom">Nom du departement</label>
                    <input autocomplete="off"  type="text" value="{{$departement->nom}}" name="nom" id="nom" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light"> modifier </button>
                </div>
            </div>
        </div>
    </form>
</div>
