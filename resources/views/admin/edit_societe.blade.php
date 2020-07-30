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
        <a href="#">Modifier une societe</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Modifier une societe</h2>
        </div>
<!--  Fin validation de l'ajout d'un fabricant -->

        <div class="box-content">
        <form class="form-horizontal" action="{{url('/update-societe', $info_societe->id_societe)}}" method="post">              
                <!-- Founction csrf_field (Cross-site request forgeries) pour générer un token contre toute action malveillante -->
                {{ csrf_field() }}

              <fieldset>              
                <div class="control-group">
                  <label class="control-label" for="textarea2">Nom de la societe</label>
                  <div class="controls">
                  <input type="text" class="input-xlarge" name="nom_societe" value="{{$info_societe->nom_societe}}" required>
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError3">Catégorie de la société</label>
                    <div class="controls">
                        <select id="selectError3" name="id_categorie" required>
                                <option>Choisir une catégorie</option>
                                <?php
                                $toute_categorie_publiee = DB::table('tbl_categorie')
                                                        ->where('statut_publication',1)
                                                        ->get();
                                foreach($toute_categorie_publiee as $v_categorie){?>
                                <option value="{{$v_categorie->id_categorie}}">{{$v_categorie->nom_categorie}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                        <label class="control-label" for="selectError3">Nom du produit</label>
                        <div class="controls">
                            <select id="selectError3" name="id_produit" required>
                                    <option>Choisir un produit</option>
                                    <?php
                                    $all_published_produit = DB::table('tbl_produit')
                                                            ->where('statut_publication',1)
                                                            ->get();
                                    foreach($all_published_produit as $v_produit){?>
                                    <option value="{{$v_produit->id_produit}}">{{$v_produit->nom_produit}}</option>
                                <?php } ?>
                                
                            </select>
                        </div>
                    </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Designation de la société</label>
                    <div class="controls">
                      <textarea class="textarea2" name="societe_short_description" rows="3" required>
                            {{$info_societe->societe_short_description}}
                      </textarea>
                    </div>
                  </div>
                  <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Détail de la societe</label>
                    <div class="controls">
                      <textarea class="textarea2" name="societe_long_description" rows="3" required>
                            {{$info_societe->societe_long_description}}
                      </textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="fileInput">Image</label>
                    <div class="controls">
                        <input class="input-file uniform_on" name="image_societe" id="fileInput" type="file" required>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Statut de publication</label>
                    <div class="controls">
                        <input type="checkbox" name="statut_publication" value="1" required>
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