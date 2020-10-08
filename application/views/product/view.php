<h2><?= $title; ?></h2>
<div class="row">
	<div class="col-4">
		<div class="card" style="width: 18rem;">
			<img src="<?= $products_item['product_image']; ?>" class="card-img-top" alt="...">
			<div class="card-body">
                <p class="badge badge-warning"><?= $products_item['type_name']; ?></p>
                <h5 class="card-title"><?= $products_item['product_name']; ?></h5>
                <p class="font-weight-bold text-right"><?= $products_item['product_price'].' €'; ?></p>
                <div class="input-group input-group-sm my-3"><div class="input-group-prepend ml-1 ml-auto"><span class="input-group-text">Qté</span><input aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" type="number" value="0" min="0" max="10" step="1" id="inputQty17119" class="form-control"></div></div>
                <button id="product<?= $products_item['product_id']; ?>" data-toggle="modal" data-target="#bucket" class="btn btn-primary m-1 w-100">Ajouter au panier</button>
                <!-- <a href="<?= site_url('product/'.$products_item['type_id']); ?>/" class="btn btn-primary">Ajouter au panier</a> -->
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="bucket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Votre Panier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    <p>Votre panier est vide</p>
                    <!-- <table class="table table-borderless text-center m-0">
                        <thead>
                          <tr>
                            <th scope="col">Ref</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody id="containerList">
                          <tr>
                            <th scope="row">17203</th>
                            <td>Bracelets Or Flèches</td>
                            <td>
                                <div class="input-group-prepend ml-1 ml-auto">
                                    <input aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" type="number" value="0" min="0" max="10" step="1" id="inputQty02332" class="form-control">
                                </div>
                            </td>
                            <td>298€</td>
                            <td>
                                <img src="assets/img/dustbin.svg">
                            </td>
                          </tr>

                          <tr>
                            <th scope="row">17359</th>
                            <td>Pull Homme 100% cachemire</td>
                            <td>
                                <div class="input-group-prepend ml-1 ml-auto">
                                    <input aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" type="number" value="0" min="0" max="10" step="1" id="inputQty02332" class="form-control">
                                </div>
                            </td>
                            <td>229€</td>
                            <td>
                                <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                          </tr>

                          <tr class="align-item-end">
                            <td></td>
                            <td></td>
                            <th scope="row">Total</th>
                            <td class="text-bold">€€€</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-dark" id="addBucket">Payer</button>
                </div>
            </div>
        </div>
    </div>