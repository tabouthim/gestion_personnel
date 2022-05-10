<?php
//$pdo =null;
//$dsn ='mysql: host=localhost;dbname=ecole';
//$dbuser = 'root';
//$Pw ='';
///try{
  //$pdo=new PDO($dsn, $dbuser,$pw);
 // $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOException $e){
  //echo 'connection echouer: ' .$e->getMessage();

//}
//$pdo ->query("SET NAMES UTF8");
//return $pdo;


//if(isset($_POST['boutEnr'])){ //bouton Enregistrer declancher
   // if(isset(['nom'],$_POST['prenom'])){
     // if($_POST['Nom']!="" && $_POST['prenom'] !=""){

        //  $insertion = "INSERT INTO eleve (nom,prenom) VALUES('$nom', '$prenom')";
        //  $execute= $pdo->query($insertion);//executer la requete


         /// if($execute==true){
         //   $msgsucces="information enregistrer avec succes";

         // }else{
          //  $msgError ="echec d'enregistrement";
          //}

     // }
    //}
//}






    //if(isset($msgError))
    //{
     // echo $msgError;
    //}
    //else
    //if
    //(isset($msgsucces)){
    //echo $msgsucces;
 // }
  ?>

@extends("layout")
@section('h1')
        <h1 style="font-size: 40px;font-weight: normal;text-align: center;">Formulaire d'enregistrement des eleves </h1>
@endsection

@section ('content')
        <P><a href="/">HOME</a></P>
        @if(session()->has("succes"))
            <div class="alert alert-success">
                <p>{{session()->get('succes')}}</p>
            </div>
        @endif
        <form style="width: 350px;height: auto;position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);action=" action="{{route('post_eleve')}}"  method="post">
            {{ csrf_field() }}
            <fieldset style="width: 500px">
                <legend>formulaire</legend>
                    <label for="matricule">matricule</label>
                    <input type="text" name='matricule' id="matricule" require><br>
                    <label for="Nom">Nom</label>
                    <input type="text" name='nom' id="Nom" require><br>
                    <label for="prenom">Prenom</label>
                    <input type="text" name='prenom' id="prenom" require><br>
                    <label for="classe">classe</label>
                    <select name="classe" id="classe"  >
                        <option  value="6eme">6eme</option>
                        <option  value="5eme">5eme</option>
                        <option  value="4eme">4eme</option>
                        <option  value="3eme">3eme</option>
                        <option  value="2nd">2nd</option>
                        <option  value="1er">1ere</option>
                        <option  value="Tle">Tle</option>
                    </select><br>
                    <label for="sexe">sexe</label>
                    <input type="radio" id="garcon" name="garcon" value="garcon"checked>
                    <label for="garcon">garcon</label>
                    <input type="radio" id="fille" name="garcon" value="fille">
                    <label for="fille">fille</label><br>
                <input type="reset" name="boutAnn" value="Annuler" class="bouton" >
                    <input type="submit" name="boutEnr" value="Enregistrer" class="bouton"  ">
            <script type="text/javascript">
                        //<![CDATA[

                        function valider() {
                            if(document.formSaisie.matricule.value != "") {
                            // alors on envoie le formulaire
                            document.formSaisie.submit();
                          }
                          else {
                            // sinon on affiche un message
                            alert("Saisissez le matricule");
                          }
                          if(document.formSaisie.nom.value != "") {
                            // alors on envoie le formulaire
                            document.formSaisie.submit();
                          }
                          else {
                            // sinon on affiche un message
                            alert("Saisissez le nom");
                          }
                          // si la valeur du champ prenom est non vide
                          if(document.formSaisie.prenom.value != "") {
                            // alors on envoie le formulaire
                            document.formSaisie.submit();
                          }
                          else {
                            // sinon on affiche un message
                            alert("Saisissez le prénom");
                          }
                        }

                        //]]>
                        </script>
                                    <ul class="error">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
            </fieldset>
        </form>
        <section style="height: 300px; width:300px;box-shadow:6px 6px 6px orange;margin-top:80px;margin-left:500px;" class="ele" onclick="decaleralbum('.bloc_image_album')">
            <br class="my-3 p-3 bg-body rounded shadow-sm"></br>
            <h2 class="border-bottom pb-2 mb-5">liste  des eleves</h2>
            <div  class="mt-5">

                @if(session()->has("successDelete"))
                    <div class="alert-success">
                        <h3>{{session()->get('successDelete')}}</h3>
                    </div>
                @endif
                <table class="table table-bordered table-hover ">
                    <style>
                        table,
                        th,
                        td {
                            padding: 10px;
                            border: 1px solid #050303;
                            border-collapse: collapse;
                        }
                    </style>
                    <thead>
                    <tr>
                        <th scope="col">n</th>
                        <th scope="col">matricule</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">classe</th>
                        <th scope="col">sexe</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($eleves as $eleve)
                    <tr>
                        <th scope="row">{{$loop->index +1}}</th>
                        <td>{{$eleve->matricule}}</td>
                        <td>{{$eleve->nom}}</td>
                        <td>{{$eleve->prenom}}</td>
                        <td>{{$eleve->classe}}</td>
                        <td>{{$eleve->sexe}}</td>
                        <td>
                            <a href="#" class="btn btn-info">editer</a>
                            <a href="#" class="btn btn-danger" onclick="if(confirm('voulez vous vraiment supprimer cet ' +
                             'eleve?')){document.getElementById('form-{{$eleve->id}}').submit()}">supprimer</a>
                            <form id="form-{{$eleve->id}}" action="{{route('eleve.supprimer',['eleve'=>$eleve->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div  class="pagination">
                    {{$eleves->links()}}
                </div>
            </div>
        </section>

        <style>
            label {
                 display:inline-block;
                  width:100px;
                 }
            input {
                 display:inline-block;
                 }
            input[type=submit] {
                color:#fff;
                 background-color:green;
             }


        </style>


@endsection
