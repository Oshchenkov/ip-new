<!-- ------------------------------------------------------------------------------------ -->
<!-- -------------------       Tell us about your Investment        ----------------- -->
<!-- ------------------------------------------------------------------------------------ -->
<br />
<br />
<!-- YourPriorityInvestingGoals-partner Request Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#YourPriorityInvestingGoals">
  Your Priority Investing Goals
</button>

<br />
<br />

<!-- YourPriorityInvestingGoals Request Report Modal -->
<div class="modal fade" id="YourPriorityInvestingGoals" tabindex="-1" role="dialog" aria-labelledby="YourPriorityInvestingGoals" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-headerClean px-4 pt-4 pb-0">
        <div class="row">
          <div class="col px-2 position-relative">
            <h1 class="text-dark font-weight-bold text-uppercase m-0">Your priority investing goals</h1>
            <button type="button" class="closeAbsol close position-absolute close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
            </button>
          </div><!-- /.col p-2 -->
        </div><!-- /.row -->
      </div><!-- /.modal-headerClean -->

      <div class="modal-body p-4 bg-white">

        <section id="PIG-quesrion-1">
          <div class="row">
            <div class="col-3 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Guidance:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-3 -->
            <div class="col-9 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Question 1:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-9 -->
          </div><!-- /.row -->
          <div class="row mb-5">
            <div class="col-3 px-2">
              <div class=" questionContentL bg-light p-2 d-block h-100">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
            </div><!-- /.col-3 p-3 -->
            <div class="col-9 px-2 ">
              <div class="questionContentR p-0  d-block h-100">
                <h5 class="text-uppercase mb-3">
                  What are your financial goal and how much money are you allocating towards achieving each goal?
                </h5><!-- /.text-uppercase -->

                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0">
                        <p class="text-uppercase align-middle mb-0"></p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <p class="text-uppercase text-center fz-14 align-middle mb-0 align-self-center">
                          Category
                        </p><!-- /.text-uppercase -->
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Initial investment</p><!-- /.text-uppercase -->
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Investing currency</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Target value</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Time horizon</p>
                  </div><!-- /.col-2 -->
                </div><!-- /.row -->
                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0 align-self-center">
                        <p class="text-uppercase  align-middle mb-0 ">Goal 1:</p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <select class="form-control" id="goal-1-Cat">
                          <!-- <option readonly="" value="">Pay off the mortgages</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-1-InInv" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1 ">
                    <select class="form-control" id="goal-1-InvCur">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-1-TargVal" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <select class="form-control" id="goal-1-TimeHorizon">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->
                  <div class="col-12 px-0 pb-3">
                    <a href="#" class="fz-12 addGoal text-uppercase text-dark"><i class="fas fa-plus"></i>Add goal</a>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->

                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0">
                        <p class="text-uppercase align-middle mb-0"></p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <p class="text-uppercase text-center fz-14 align-middle mb-0 align-self-center">
                          Category
                        </p><!-- /.text-uppercase -->
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Initial investment</p><!-- /.text-uppercase -->
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Investing currency</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Target value</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Time horizon</p>
                  </div><!-- /.col-2 -->
                </div><!-- /.row -->
                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0 align-self-center">
                        <p class="text-uppercase  align-middle mb-0 ">Goal 2:</p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <select class="form-control" id="goal-2-Cat">
                          <!-- <option readonly="" value="">Pay off the mortgages</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-2-InInv" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1 ">
                    <select class="form-control" id="goal-2-InvCur">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-2-TargVal" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <select class="form-control" id="goal-2-TimeHorizon">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->
                  <div class="col-12 px-0 pb-3">
                    <a href="#" class="fz-12 addGoal text-uppercase text-dark"><i class="fas fa-plus"></i>Add goal</a>
                  </div><!-- /.col-12 -->
                </div><!-- /.row -->

                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0">
                        <p class="text-uppercase align-middle mb-0"></p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <p class="text-uppercase text-center fz-14 align-middle mb-0 align-self-center">
                          Category
                        </p><!-- /.text-uppercase -->
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Initial investment</p><!-- /.text-uppercase -->
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Investing currency</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Target value</p>
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <p class="text-uppercase text-center fz-14 align-middle mb-0 lh-1">Time horizon</p>
                  </div><!-- /.col-2 -->
                </div><!-- /.row -->
                <div class="row mx-0 mb-2 align-items-center">
                  <div class="col-4 pl-0 pr-1">
                    <div class="row mx-0">
                      <div class="col-4 px-0 align-self-center">
                        <p class="text-uppercase  align-middle mb-0 ">Goal 3:</p><!-- /.text-uppercase -->
                      </div><!-- /.col-3 -->
                      <div class="col-8 px-0">
                        <select class="form-control" id="goal-3-Cat">
                          <!-- <option readonly="" value="">Pay off the mortgages</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-9 -->
                    </div><!-- /.row mx-0 -->
                  </div><!-- /.col-4 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-3-InInv" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1 ">
                    <select class="form-control" id="goal-3-InvCur">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->
                  <div class="col-2 px-1">
                    <input type="text" class="form-control" id="goal-3-TargVal" aria-describedby="" placeholder="">
                  </div><!-- /.col-2 -->
                  <div class="col-2 pl-1 pr-0">
                    <select class="form-control" id="goal-3-TimeHorizon">
                      <!-- <option readonly="" value=""></option>
                      <option value="Dr">Dr</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option> -->
                    </select>
                  </div><!-- /.col-2 -->

                </div><!-- /.row -->

                <p class="mb-1 mt-5">A minimum of 25k on each goal as this is the fund min.</p>

              </div><!-- /.bg-light -->
            </div><!-- /.col-9 p-3 -->
          </div><!-- /.row -->
        </section><!-- /#quesrion-1 -->

        <section id="PIG-quesrion-2">
          <div class="row">
            <div class="col-3 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Guidance:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-3 -->
            <div class="col-9 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Question 2:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-9 -->
          </div><!-- /.row -->
          <div class="row mb-5">
            <div class="col-3 px-2">
              <div class=" questionContentL bg-light p-2 d-block h-100">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
            </div><!-- /.col-3 p-3 -->
            <div class="col-9 px-2 ">
              <div class="questionContentR p-0  d-block h-100">
                <h5 class="text-uppercase mb-4">
                  Please indicate below in which accounts you will be investing via, and which of your goals relate to that account. <span class="ttInitial">(A single account can have more than one objective/goal).</span>
                </h5><!-- /.text-uppercase -->

                <section id="PIG-q2-contentTitle">
                  <div class="row mx-0 mb-3">
                    <div class="col-6 pl-0 pr-1">
                      <p class="text-uppercase font-weight-bold align-middle mb-0 fz-14">
                        Goal:
                      </p><!-- /.text-uppercase align-middle mb-0 -->
                    </div><!-- /.col-6 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Account
                      </p><!-- /.text-uppercase -->
                    </div><!-- /.col-2 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Amount
                      </p>
                    </div><!-- /.col-2 -->
                    <div class="col-2  px-0">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Contributions
                      </p>
                    </div><!-- /.col-2 -->
                  </div><!-- /.row -->
                </section><!-- /#PIG-q2-contentTitle -->

                <section id="PIG-q2-content">
                  <section id="PIG-q2-contentRow-1">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0">
                          Pay off the mortgage/debts
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                        <select class="form-control text-uppercase" id="PIG-q2-pay-account">
                          <!-- <option readonly="" value="">General</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q2-pay-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <input type="text" class="form-control" id="PIG-q2-pay-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q2-contentRow-2">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0">
                          To finance children's education
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                        <select class="form-control text-uppercase" id="PIG-q2-finance-account">
                          <!-- <option readonly="" value="">Other</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q2-finance-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <input type="text" class="form-control" id="PIG-q2-finance-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q2-contentRow-3">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0">
                          Simply medium to long-term savings
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                        <select class="form-control text-uppercase" id="PIG-q2-savings-account">
                          <!-- <option readonly="" value="">Offshores</option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q2-savings-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <input type="text" class="form-control" id="PIG-q2-savings-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                </section><!-- /#PIG-q2 -->
                
  
              </div><!-- /.bg-light -->
            </div><!-- /.col-9 p-3 -->
          </div><!-- /.row -->
        </section><!-- /#quesrion-2 -->

        <section id="PIG-quesrion-3">
          <div class="row">
            <div class="col-3 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Guidance:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-3 -->
            <div class="col-9 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Question 3:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-9 -->
          </div><!-- /.row -->
          <div class="row mb-5">
            <div class="col-3 px-2">
              <div class=" questionContentL bg-light p-2 d-block h-100">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
            </div><!-- /.col-3 p-3 -->
            <div class="col-9 px-2 ">
              <div class="questionContentR p-0  d-block h-100">
                <h5 class="text-uppercase mb-4">
                  Please confirm when you might need to take an income.
                </h5><!-- /.text-uppercase -->

                <section id="PIG-q3-contentTitle">
                  <div class="row mx-0 mb-3">
                    <div class="col-6 pl-0 pr-1">
                      <p class="text-uppercase font-weight-bold align-middle mb-0 fz-14">
                        Account:
                      </p><!-- /.text-uppercase align-middle mb-0 -->
                    </div><!-- /.col-6 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Amount
                      </p><!-- /.text-uppercase -->
                    </div><!-- /.col-2 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Contributions
                      </p>
                    </div><!-- /.col-2 -->
                    <div class="col-2  px-0">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Currency
                      </p>
                    </div><!-- /.col-2 -->
                  </div><!-- /.row -->
                </section><!-- /#PIG-q2-contentTitle -->

                <section id="PIG-q3-content">
                  <section id="PIG-q3-contentRow-1">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          General investment account
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q3-InvAcc-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q3-InvAcc-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q3-InvAcc-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q3-contentRow-2">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          Other
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q3-Other-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q3-Other-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q3-Other-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q3-contentRow-3">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          Offshore bond
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q3-Offshore-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q3-Offshore-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q3-Offshore-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  
                </section><!-- /#PIG-q3 -->
  
              </div><!-- /.bg-light -->
            </div><!-- /.col-9 p-3 -->
          </div><!-- /.row -->
        </section><!-- /#quesrion-3 -->

        <section id="PIG-quesrion-4">
          <div class="row">
            <div class="col-3 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Guidance:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-3 -->
            <div class="col-9 p-2">
              <h6 class="text-uppercase m-0 highlight-textСolor font-weight-normal">
                Question 4:
              </h6><!-- /.text-uppercase -->
              <hr class="my-3 " />
            </div><!-- /.col-9 -->
          </div><!-- /.row -->
          <div class="row mb-5">
            <div class="col-3 px-2">
              <div class=" questionContentL bg-light p-2 d-block h-100">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</div>
            </div><!-- /.col-3 p-3 -->
            <div class="col-9 px-2 ">
              <div class="questionContentR p-0  d-block h-100">
                <h5 class="text-uppercase mb-4">
                  Please confirm when you might need to draw a lump sum from these investments.
                </h5><!-- /.text-uppercase -->

                <section id="PIG-q4-contentTitle">
                  <div class="row mx-0 mb-3">
                    <div class="col-6 pl-0 pr-1">
                      <p class="text-uppercase font-weight-bold align-middle mb-0 fz-14">
                        Account:
                      </p><!-- /.text-uppercase align-middle mb-0 -->
                    </div><!-- /.col-6 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Amount
                      </p><!-- /.text-uppercase -->
                    </div><!-- /.col-2 -->
                    <div class="col-2 px-1">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Contributions
                      </p>
                    </div><!-- /.col-2 -->
                    <div class="col-2  px-0">
                      <p class="text-uppercase text-center mb-0 fz-12">
                        Currency
                      </p>
                    </div><!-- /.col-2 -->
                  </div><!-- /.row -->
                </section><!-- /#PIG-q2-contentTitle -->

                <section id="PIG-q4-content">
                  <section id="PIG-q2-contentRow-1">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          General investment account
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q4-InvAcc-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q4-InvAcc-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q4-InvAcc-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q4-contentRow-2">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          Other
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q4-Other-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q4-Other-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q4-Other-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  <section id="PIG-q4-contentRow-3">
                    <div class="row mx-0 align-items-center mb-3">
                      <div class="col-6 pl-0 pr-1">
                        <p class=" align-middle mb-0 text-uppercase">
                          Offshore bond
                        </p>
                      </div><!-- /.col-6 -->
                      <div class="col-2 px-1">
                         <input type="text" class="form-control" id="PIG-q4-Offshore-amount" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 px-1">
                        <input type="text" class="form-control" id="PIG-q4-Offshore-contrib" aria-describedby="" placeholder="">
                      </div><!-- /.col-2 -->
                      <div class="col-2 pl-1 pr-0">
                        <select class="form-control text-uppercase" id="PIG-q4-Offshore-currency">
                          <!-- <option readonly="" value=""></option>
                          <option value="Dr">Dr</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Miss">Miss</option>
                          <option value="Ms">Ms</option> -->
                        </select>
                      </div><!-- /.col-2 -->
                    </div><!-- /.row -->
                  </section>
                  
                </section><!-- /#PIG-q4 -->
  
              </div><!-- /.bg-light -->
            </div><!-- /.col-9 p-3 -->
          </div><!-- /.row -->
        </section><!-- /#quesrion-4 -->


      </div>


      <div class="modal-footerComplex clearfix px-4">
        <div class="footerProgress float-left w-50">
          <label class="m-0 d-flex" for="">Progress:</label>
          <div class="progress ">
            <div class="progress-bar highlight-bgСolor" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
          </div>
        </div><!-- /.footerProgress float-left -->
        <div class="footerButtons float-right ">
          <button type="button" class="btn btn-md btn-outline-info mx-3" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Previous</button>
          <button type="button" class="btn btn-md btn-outline-info " data-dismiss="modal">Continue <i class="fa fa-arrow-right"></i></button>
        </div><!-- /.footerButtons floatRight -->
      </div>
    </div>
  </div>
</div>