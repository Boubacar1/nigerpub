@extends('admin_layout')
@section('admin_content')
			
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
    <a href="{{URL::to('/dasboard')}}">Accueil</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Modifier une catégorie</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Modifier une catégorie</h2>
        </div>
<!--  Fin validation de l'ajout d'une catégorie -->

        <div class="box-content">
        <form class="form-horizontal" action="{{url('/update-categorie', $info_categorie->id_categorie)}}" method="post">              
                <!-- Founction csrf_field (Cross-site request forgeries) pour générer un token contre toute action malveillante -->
                {{ csrf_field() }}

              <fieldset>              
                <div class="control-group">
                  <label class="control-label" for="date01">Nom de la catégoie</label>
                  <div class="controls">
                  <input type="text" class="input-xlarge" name="nom_categorie" value="{{$info_categorie->nom_categorie}}">
                  </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description de la catégorie</label>
                    <div class="controls">
                      <textarea class="cleditor" name="description_categorie" rows="3" required="">
                            {{$info_categorie->description_categorie}}
                      </textarea>
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn">Annuler</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection