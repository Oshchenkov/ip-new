<!-- ------------------------------------------------------------------------------------ -->
<!-- -------------------       Tell us about your Investment        ----------------- -->
<!-- ------------------------------------------------------------------------------------ -->
<br />
<br />
<!-- TellUsAboutYourInvestment-partner Request Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#TellUsAboutYourInvestment2">
  Tell us about your Investment
</button>

<!-- TellUsAboutYourInvestment Request Report Modal -->
<div class="modal fade" id="TellUsAboutYourInvestment2" tabindex="-1" role="dialog" aria-labelledby="TellUsAboutYourInvestment2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-headerClean px-4 pt-4 pb-0">
        <div class="row">
          <div class="col px-2 position-relative">
            <h1 class="text-dark font-weight-bold text-uppercase m-0">Tell Us About Your investment</h1>
            <p class="text-secondary">Please tick the appropriate box for your circumstances</p><!-- /.lead -->
            <button type="button" class="closeAbsol close position-absolute close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
            </button>
          </div><!-- /.col p-2 -->
        </div><!-- /.row -->
      </div><!-- /.modal-headerClean -->
      <div class="modal-body p-4 bg-white">
        
        <div class="row">
          <div class="col p-2">
            <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
              Preliminary questions
            </h6><!-- /.text-uppercase -->
            <hr class="my-2 " />
          </div><!-- /.col px-2 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col p-2">
            <h5 class="text-uppercase">
              Please take into account the following:
            </h5><!-- /.text-uppercase -->
          </div><!-- /.col p-2 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 p-2">
						<h3 class="modalSubheader mb-0">
							Existing Investment
						</h3>
          </div><!-- /.col -->
          <div class="col-12 p-2">
            The portfolio has existing assets to be considered and:
          </div><!-- /.col-12 p-2 -->
          <div class="col-12 p-2">
            <ul class="list-none">
							<li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input type="radio" id="TellUsAboutYourInvestment-portfolio__uncr-gains" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment-portfolio__uncr-gains">Some have uncrystallised capital gains</label>
								</div>	
              </li><!-- /.list-group-item -->
							<li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input type="radio" id="TellUsAboutYourInvestment-portfolio__hold-iliquid" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment-portfolio__hold-iliquid">Some holdings may be illiquid</label>
								</div>	
              </li><!-- /.list-group-item -->
							<li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input type="radio" id="TellUsAboutYourInvestment-portfolio__structured-product" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment-portfolio__structured-product">There are structured products which will need reviewing</label>
								</div>	
              </li><!-- /.list-group-item -->
            </ul><!-- /.list-group list-group-flush -->
          </div><!-- /.col-12 p-2 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 p-2">
						<h3 class="modalSubheader mb-0">
							Us Clients or Connected Persons
						</h3>
          </div><!-- /.col -->
          <div class="col-12 p-2">
            <ul class="list-none">
              <li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input class="listRadio__input" type="radio" id="TellUsAboutYourInvestment-clientsOrConnected" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment-clientsOrConnected">I/We would be considered to be a'US connected person' and will, therefore, need an 'investment wrapper' to invest</label>
								</div>	
              </li><!-- /.list-group-item -->
						</ul><!-- /.list-group list-group-flush -->
          </div><!-- /.col-12 p-2 -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-12 p-2">
						<h3 class="modalSubheader mb-0">
							Self Directed Accounts
						</h3>
          </div><!-- /.col -->
          <div class="col-12 p-2">
            <ul class="list-none">
							<li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input type="radio" id="TellUsAboutYourInvestment__SelfDirectedAccounts" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment-SelfDirectedAccounts">I/We would like to have a separete account to make some self-directed investments</label>
								</div>	
              </li><!-- /.list-group-item -->
            </ul><!-- /.list-group list-group-flush -->
          </div><!-- /.col-12 p-2 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 p-2">
						<h3 class="modalSubheader mb-0">
							Income Requirements
						</h3>
          </div><!-- /.col -->
          <div class="col-12 p-2">
            <ul class="list-none">
							<li class="py-2 listRadio clearfix">
								<div class="bl-l">
									<input type="radio" id="TellUsAboutYourInvestment__IncomeRequirenments" checked>
								</div>
								<div class="bl-r">
									<label class="listRadio__label" for="TellUsAboutYourInvestment__IncomeRequirenments">I will need to take income from this portfolio but already have those requirements covered until
										 <input data-provide="datepicker" class="form-control datepicker w-initial mt-3" id="IncomeDatepicker" placeholder="dd/mm/yyyy">
									</label>
								</div>	
              </li><!-- /.list-group-item -->
            </ul><!-- /.list-group list-group-flush -->

          </div><!-- /.col-12 p-2 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 p-2">
						<h3 class="modalSubheader mb-0">
							Further Details:
						</h3>
          </div><!-- /.col -->
          <div class="col-12 p-2">
            Please provide any details here, and where relevant valuations of any existing assets.
          </div><!-- /.col-12 p-2 -->
          <div class="col-12 p-2">
            <textarea class="form-control" id="tellUsIncome-details" rows="5"></textarea>
          </div><!-- /.col-12 p-2 -->
        </div><!-- /.row -->

      </div>
      <div class="modal-footerComplex clearfix">
        <div class="footerProgress float-left w-50">
          <label class="m-0 d-flex" for="">Progress:</label>
          <div class="progress ">
            <div class="progress-bar highlight-bgСolor" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
          </div>
        </div><!-- /.footerProgress float-left -->
        <div class="footerButtons float-right">
          <button type="button" class="btn btn-md btn-outline-info mx-2" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Previous</button>
          <button type="button" class="btn btn-md btn-outline-info " data-dismiss="modal">Continue <i class="fa fa-arrow-right"></i></button>
        </div><!-- /.footerButtons floatRight -->
      </div>
    </div>
  </div>
</div>