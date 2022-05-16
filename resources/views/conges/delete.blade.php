<div id="DeleteModalConge" class="modal modal-danger  fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="post" action="{{route('conge.delete')}}">
        {{ csrf_field() }}
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="myModalLabel">supprimer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <input type="hidden" id="id" name="id" value="{{$conge->id}}">

                <div class="modal-body">
                    <p  class="text-center">
                        voulez vous reelement supprimer les conges de l'employé :<div style="color: #cc8500;text-align: center">{{$conge->employe}}?</div>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">supprimer</button>
                </div>
            </div>
        </div>
    </form>
</div>


