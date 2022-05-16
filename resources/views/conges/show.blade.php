<div id="updateModalConge" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="{{route('conge.update')}}">
        {{ csrf_field() }}
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modifier les conges</h5>
                    <button type="button" class="btn-close" style="color: red" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label  style="width: 150px; ">Employe</label>
                    <input type="text" name="employe"value="{{$conge->employe}}"><br>
                    <label style="width: 150px">date de debut</label>
                    <input type="date" name="date_debut" value="{{$conge->date_debut}}"><br>
                    <label style="width: 150px">date de fin</label>
                    <input type="date" name="date_fin"value="{{$conge->date_fin}}"><br>
                    <label style="width: 150px; ">nombre de jour</label>
                    <input type="number" name="total_jour" value="{{$conge->total_jour}}"><br>
                    <label style="width: 150px"> type de conge</label>
                    <select name="type_conge"value="{{$conge->type_conge}}">
                        <option name="type_conge">  </option>
                        <option name="type_conge"> </option>
                        <option name="type_conge"> </option>
                        <option name="type_conge"> </option>
                    </select><br>
                    <label style="width: 150px"> statut</label>
                    <select name="statut" value="{{$conge->statut}}">
                        <option name="statut">{{$conge->statut}}</option>
                        <option name="statut">{{$conge->statut}}</option>
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
