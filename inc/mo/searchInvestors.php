<!-- ------------------------------------------------------------------------------------ -->
<!-- -----------------------------       Search Investors        ------------------------ -->
<!-- ------------------------------------------------------------------------------------ -->

<!--Search Investors modal -->
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#searchInvestors">
	Search Investors
</button>

<br />
<br />
					<!-- Search Investors modal -->
					<div class="modal fade" id="searchInvestors" tabindex="-1" role="dialog" aria-labelledby="searchInvestors" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="offset-1 col-10 modal-title text-center" id="exampleModalLabel"><span>Search investors</span></h5>
                  <button type="button" class="col-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
										<table id="searchInvestors-tabel" class="display" style="width:100%">
											<thead>
													<tr>
															<th>Investor</th>
															<th>Age</th>
															<th>Profile</th>
															<th>Score</th>
															<th>Version</th>
															<th>Review Due</th>
													</tr>
											</thead>
											<tbody>
													<tr>
															<td>John Doe</td>
															<td>2018</td>
															<td>(Unassigned)</td>
															<td>0</td>
															<td>-</td>
															<td>11/07/2019</td>
													</tr>
													
											</tbody>
									</table>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-md btn-outline-info">Continue</button>
                </div>
              </div>
            </div>
          </div>