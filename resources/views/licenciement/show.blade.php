<div id="updateModalLicenciement" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="{{route('licenciement.update')}}">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modifier un Licenciement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" id="id" name="id" value="{{$licenciement->id}}">
                <div class="modal-body">
                    <label for="nom">Nom </label>
                    <input autocomplete="off"  type="text" name="nom" id="nom"  value="{{$licenciement->nom}}" class="form-control">
                    <label for="nom">poste</label>
                    <input autocomplete="off"  type="text" name="poste"  value="{{$licenciement->poste}}" id="poste" class="form-control">
                    <label style="width: 150px"> motif</label>
                    <select name="motif"  value="{{$licenciement->motif}}">
                        <option>vole</option>
                        <option>retard abusif</option>
                        <option>inaptitude</option>
                        <option>manque de professionnalisme</option>
                        <option>autres</option>
                    </select><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light"> modifier </button>
                </div>
            </div>
        </div>
    </form>
</div>
