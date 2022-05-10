<div id="viewModalEmploye" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="{{route('employe.view')}}">
        {{ csrf_field() }}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">information sur l'employe {{$employe->nom}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" id="id" name="id" value="{{$employe->id}}">
                <div class="modal-body">
                    <label style="width: 150px">Nom</label>
                    <input autocomplete="off"  type="text" value="{{$employe->nom}}" name="nom" id="nom"><br>
                    <label  style="width: 150px; ">prenom</label>
                    <input type="text" name="prenom" id="prenom" value="{{$employe->prenom}}"><br>

                    <label  style="width: 150px; ">poste</label>
                    <input type="text" name="poste" id="poste" value="{{$employe->poste}}"><br>

                    <label  style="width: 150px; "> numero de la cni</label>
                    <input type="number" name="numero_cni" id="numero_cni" value="{{$employe->numero_cni}}"><br>


                    <label  style="width: 150px; ">type de contrat:</label>
                    <input type="radio" name="type_de_contrat" id="contrat" value="{{$employe->contrat}}"> CDI
                    <input type="radio" name="type_de_contrat"id="contrat" value="{{$employe->contrat}}" >CDD<br>

                    <label  style="width: 150px; ">date de naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" value="{{$employe->date_naissance}}"><br>

                    <label  style="width: 150px; ">lieu de naissance</label>
                    <input type="text" name="lieu_naissance"id="lieu_naissance" value="{{$employe->lieu_naissance}}"><br>

                    <label  style="width: 150px; ">Situation marital:</label>
                    <input type="radio" name="situation_marital" id="situation_marital" value="{{$employe->situation_marital}}" >Marié
                    <input type="radio" name="situation_marital" id="situation_marital" value="{{$employe->situation_marital}}" >Celibataire<br>
                    <label  style="width: 150px; ">sexe:</label>
                    <input style="width: auto" type="radio" name="sexe" id="sexe" value="{{$employe->sexe}}"> masculin
                    <input style="width:auto" type="radio" name="sexe" id="sexe" value="{{$employe->sexe}}">feminin<br>

                    <label style="width: 150px"> departement</label>
                    <select name="departement" id="departement" value="{{$employe->departement}}">
                        <option>RH</option>
                        <option>Developpeur web</option>
                        <option>developpeur android</option>
                        <option>graphiste</option>
                        <option>marketing</option>
                    </select><br>
                    <label style="width: 150px; " for="start">date de debut:</label>

                    <input type="date" id="debut" name="debut" value="{{$employe->debut}}"
                           value="2018-07-22"
                           min="2018-01-01" max="2050-12-31"><br>
                    <label  style="width: 150px; ">Email</label>
                    <input type="text" name="email" value="{{$employe->email}} " id="email"><br>
                    <label  style="width: 150px; " >tel</label>
                    <input type="tel" name="tel" id="tel" value="{{$employe->tel}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">modifier</button>
                </div>
            </div>
        </div>
    </form>
</div>
