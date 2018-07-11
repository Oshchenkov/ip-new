<!doctype html>
<html lang="en">
  <head>
    <?php include('inc/head-common.php'); //Common head elements ?>

    <title>iPlanner - Modals</title>

    <!-- Custom styles for this page -->
    <link href="css/modals.css?ver=<?php echo rand(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="libs/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.min.css" />


  </head>

  <body>
    <?php include('inc/header.php'); ?>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row">
        <article id="content" class="col-md-9">

          <!-- Start New Report Button trigger modal -->
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#StartNewReport">
            Start New Report
          </button>

          <br><br>

          <!-- Profiling Request Button trigger modal -->
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#ProfilingRequest">
            Profiling Request
          </button>

          <!-- Profiling Request Report Modal -->
          <div class="modal fade" id="ProfilingRequest" tabindex="-1" role="dialog" aria-labelledby="ProfilingRequestLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="offset-1 col-10 modal-title text-center" id="exampleModalLabel">Profiling <span>Request</span></h5>
                  <button type="button" class="col-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
                    <div class="row">
                      <div class="col pr-2">
                        <div class="form-group">
                          <label for="f1">Client Status</label>
                          <select class="form-control" id="f1">
                            <option readonly></option>
                            <option>New</option>
                            <option>Existing</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="f3">First Name</label>
                          <input type="text" class="form-control" id="f3" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="f5">Last Name</label>
                          <input type="text" class="form-control" id="f5" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="f7">Fee Required <span>(if known)</span></label>
                          <select class="form-control" id="PR-BackEnd">
                            <option value="back-end" readonly>Back end</option>
                            <option value="0%">0%</option>
                            <option value="3%">3%</option>
                            <option value="5%">5%</option>
                            <option value="7%">7%</option>
                          </select>
                        </div>
                        <div class="form-group mb-2">
                          <select class="form-control" id="PR-Trail">
                            <option value="trail" readonly>Trail</option>
                            <option value="0.50%">0%</option>
                            <option value="0.50%">0.50%</option>
                            <option value="0.75%">0.75%</option>
                            <option value="1.00%">1.00%</option>
                          </select>
                        </div>
                      </div>
                      <div class="col pl-2">
                        <div class="form-group">
                          <label for="f2">Source of Referral</label>
                          <select class="form-control" id="f2">
                            <option readonly></option>
                            <option value="Personal recommendation (friend/colleague)">Personal recommendation (friend/colleague)</option>
                            <option value="Professional recommendation (accountant/solicitor)">Professional recommendation (accountant/solicitor)</option>
                            <option value="Internet search">Internet search</option>
                            <option value="Email">Email</option>
                            <option value="Phone call">Phone call</option>
                            <option value="Radio">Radio</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="f4">First Initial(s)</label>
                          <input type="text" class="form-control" id="f4" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="f6">Email Address</label>
                          <input type="email" class="form-control" id="f6" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="f8">&nbsp;</label>
                          <select class="form-control" id="PR-OffTheTop">
                            <option value="off-the-top" readonly>Off the top</option>
                            <option value="0%">0%</option>
                            <option value="1%">1%</option>
                            <option value="2%">2%</option>
                            <option value="3%">3%</option>
                            <option value="4%">4%</option>
                            <option value="5%">5%</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-md btn-outline-info">Continue</button>
                </div>
              </div>
            </div>
          </div>


          <br><br>

          <!-- ------------------------------------------------------------------------------------ -->
          <!-- -----------------------       Tell Us About Yourself         ----------------------- -->
          <!-- ------------------------------------------------------------------------------------ -->

          <!-- TellUsAboutYourself Request Button trigger modal -->
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#TellUsAboutYourself">
            Tell Us About Yourself
          </button>

          <!-- TellUsAboutYourself Request Report Modal -->
          <div class="modal fade" id="TellUsAboutYourself" tabindex="-1" role="dialog" aria-labelledby="TellUsAboutYourself" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="offset-1 col-10 modal-title text-center" id="exampleModalLabel">Tell us <span>About yourself</span></h5>
                  <button type="button" class="col-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-firstName">First Name</label>
                          <input type="text" class="form-control" id="tellUs-firstName" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-middletInitials">Middle initial(s)</label>
                          <input type="text" class="form-control" id="tellUs-middletInitials" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-surname">Surname</label>
                          <input type="text" class="form-control" id="tellUs-surname" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-Title">Title</label>
                          <select class="form-control" id="tellUs-Title">
                            <option readonly value=""></option>
                            <option value="Dr">Dr</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms">Ms</option>
                            <option id="tellUs-title--Other"  value="Other">Other</option>
                          </select>
                          <div class="inputWithCloseBtn hide" id="tellUs-title--OtherText">
                            <input type="text" class="form-control" id="tellUs-title--OtherText-input"  aria-describedby="" placeholder="Insert Title">
                            <div class="closeBtn"><i class="fas fa-times"></i></div><!-- /.closeBtn -->
                          </div><!-- /.inputWithCloseBtn -->
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label >Gender:</label>
                          <div class="col py-2 px-0">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tellUs-gender" id="tellUs-gender__male" value="Male">
                            <label class="form-check-label" for="tellUs-gender__male">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tellUs-gender" id="tellUs-gender__female" value="Female">
                            <label class="form-check-label" for="tellUs-gender__female">Female</label>
                          </div>
                          </div><!-- /.col -->
                          
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-Identification">Identification:</label>
                          <select class="form-control" id="tellUs-Identification">
                            <option readonly value=""></option>
                            <option value="Passport">Passport</option>
                            <option value="Government ID Card">Government ID Card</option>
                            <option value="Driving Licence">Driving Licence</option>
                            <option id="tellUs-identification--Other"  value="Other">Other</option>
                          </select>
                          <div class="inputWithCloseBtn hide" id="tellUs-Identification--OtherText">
                            <input type="text" class="form-control" id="tellUs-Identification--OtherText-input"  aria-describedby="" placeholder="Insert Identification">
                            <div class="closeBtn"><i class="fas fa-times"></i></div><!-- /.closeBtn -->
                          </div><!-- /.inputWithCloseBtn -->
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-IdentificationNumber">Identification Number:</label>
                          <input type="text" class="form-control" id="tellUs-IdentificationNumber" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-CountryOfIssue">Country of Issue:</label>
                          <select class="form-control" id="tellUs-CountryOfIssue">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-MaritalStatus">Marital Status:</label>
                          <select class="form-control" id="tellUs-MaritalStatus">
														<option readonly  value=""></option>
														<option value="Single">Single</option>
                            <option value="Married">Married</option>
														<option value="Divorced">Divorced</option>
														<option value="Widowed">Widowed</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-NumberOfFinancialDependants ">Number of Financial Dependants :</label>
                          <select class="form-control" id="tellUs-NumberOfFinancialDependants">
                            <option readonly  value=""></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5+">5+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-dateOfBirth">Date of Birth:</label>
                          <input data-provide="datepicker" class="form-control datepicker tellUs-datepicker" id="tellUs-dateOfBirth" placeholder="dd/mm/yyyy">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-PlaceOfBirth">Place of Birth:</label>
                          <input type="text" class="form-control" id="tellUs-PlaceOfBirth" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-EmploymentStatus">Employment Status:</label>
                          <select class="form-control" id="tellUs-EmploymentStatus">
                            <option readonly  value=""></option>
                            <option value="">Employed</option>
                            <option value="">Self-Employed</option>
                            <option value="">Unemployed</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-Occupation">Occupation:</label>
                          <input type="text" class="form-control" id="tellUs-Occupation" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-NameOfEmployer">Name of employer:</label>
                          <input type="text" class="form-control" id="tellUs-NameOfEmployer" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
													<label for="tellUs-EmployerAddress">Employer Address:</label>
													<textarea  rows="2" class="form-control" id="tellUs-EmployerAddress" placeholder=""></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-AnnualGrossSalary">Annual Gross Salary (<span class="ttInitial">figure in GBP</span>):</label>
                          <select class="form-control" id="tellUs-AnnualGrossSalary">
                            <option readonly  value=""></option>
                            <option value="0-50,000">0-50,000</option>
                            <option value="50,001-75,000">50,001-75,000</option>
                            <option value="75,001-100,000">75,001-100,000</option>
                            <option value="100,001-125,000">100,001-125,000</option>
                            <option value="125,001-150,000">125,001-150,000</option>
                            <option value="150,001-175,000">150,001-175,000</option>
                            <option value="175001-200,000">175001-200,000</option>
                            <option value="200,001-250,00">200,001-250,00</option>
                            <option value="250,000+">250,000+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-AnnualNetSalary">Annual Net Salary (<span class="ttInitial">figure in GBP</span>):</label>
                          <select class="form-control" id="tellUs-AnnualNetSalary">
                            <option readonly  value=""></option>
                            <option value="0-50,000">0-50,000</option>
                            <option value="50,001-75,000">50,001-75,000</option>
                            <option value="75,001-100,000">75,001-100,000</option>
                            <option value="100,001-125,000">100,001-125,000</option>
                            <option value="125,001-150,000">125,001-150,000</option>
                            <option value="150,001-175,000">150,001-175,000</option>
                            <option value="175001-200,000">175001-200,000</option>
                            <option value="200,001-250,00">200,001-250,00</option>
                            <option value="250,000+">250,000+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-NormalRetirementAge ">Normal Retirement age :</label>
                          <input data-provide="datepicker" class="form-control datepicker tellUs-datepicker" id="tellUs-NormalRetirementAge" placeholder="dd/mm/yyyy">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-CountryOfResidence">Country of Residence:</label>
                          <select class="form-control" id="tellUs-CountryOfResidence">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-CountryOfTaxResidence">Country of Tax residence:</label>
                          <select class="form-control" id="tellUs-CountryOfTaxResidence">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-ResidentialAddress">Residential Address:</label>
                          <textarea class="form-control" id="tellUs-ResidentialAddress" rows="2"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-CorrespondanceAddress">Correspondance address:</label>
                          <textarea class="form-control" id="tellUs-CorrespondanceAddress" rows="2"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-EmailAddress">Email Address:</label>
                          <input type="email" class="form-control" id="tellUs-EmailAddress" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-TelephoneDay">Telephone (<span class="ttInitial">day</span>):</label>
                          <input type="text" class="form-control" id="tellUs-TelephoneDay" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-TelephoneEvening">Telephone (<span class="ttInitial">evening</span>):</label>
                          <input type="text" class="form-control" id="tellUs-TelephoneEvening" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-TelephoneMobile">Telephone (<span class="ttInitial">mobile</span>):</label>
                          <input type="text" class="form-control" id="tellUs-TelephoneMobile" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-InvestingCurrency">Investing Currency:</label>
                          <select class="form-control" id="tellUs-InvestingCurrency">
                            <option readonly  value=""></option>
                            <option value="GBP">GBP</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-Smoker">Smoker:</label>
                          <select class="form-control" id="tellUs-Smoker">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-StateOfHealth">State of Health:</label>
                          <select class="form-control" id="tellUs-StateOfHealth">
                            <option readonly  value=""></option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-UpToDateWill">Up To Date Will:</label>
                          <select class="form-control" id="tellUs-UpToDateWill">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-DoYouIntend">Do You Intend/ Have you Moved Abroad:</label>
                          <select class="form-control" id="tellUs-DoYouIntend">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->

                    <div class="row">
                      <div class="col px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-OtherInfo">Other relevant Information:</label>
                          <textarea class="form-control" id="tellUs-OtherInfo" rows="3"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->

                  </form>

                </div>
                <div class="modal-footerComplex clearfix">
                  <button type="button" class="btn btn-md btn-outline-info float-left" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Back</button>
                  <button type="button" class="btn btn-md btn-outline-info float-right" data-dismiss="modal">Continue <i class="fa fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- -----------------------      /Tell Us About Yourself         ----------------------- -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- -------------------       Tell Us About Yourself – Partner         ----------------- -->
          <!-- ------------------------------------------------------------------------------------ -->
          <br />
          <br />
          <!-- TellUsAboutYourself-partner Request Button trigger modal -->
          <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#TellUsAboutYourself-partner">
            Tell Us About Yourself – Partner
          </button>

          <!-- TellUsAboutYourself-partner Request Report Modal -->
          <div class="modal fade" id="TellUsAboutYourself-partner" tabindex="-1" role="dialog" aria-labelledby="TellUsAboutYourself-partner" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="offset-1 col-10 modal-title text-center" id="exampleModalLabel">Tell Us About Yourself - <span>Partner</span></h5>
                  <button type="button" class="col-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-firstName">First Name</label>
                          <input type="text" class="form-control" id="tellUs-partner-firstName" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-middletInitials">Middle initial(s)</label>
                          <input type="text" class="form-control" id="tellUs-partner-middletInitials" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-surname">Surname</label>
                          <input type="text" class="form-control" id="tellUs-partner-surname" aria-describedby="" placeholder="">
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-Title-partner">Title</label>
                          <select class="form-control" id="tellUs-Title-partner">
                            <option readonly value=""></option>
                            <option value="Dr">Dr</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Ms">Ms</option>
                            <option id="tellUs-titlePartner--Other"  value="Other">Other</option>
                          </select>
                          <div class="inputWithCloseBtn hide" id="tellUs-titlePartner--OtherText">
                            <input type="text" class="form-control" id="tellUs-titlePartner--OtherText-input"  aria-describedby="" placeholder="Insert Title">
                            <div class="closeBtn"><i class="fas fa-times"></i></div><!-- /.closeBtn -->
                          </div><!-- /.inputWithCloseBtn -->
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label >Gender:</label>
                          <div class="col py-2 px-0">
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tellUs-partner-gender" id="tellUs-partner-gender__male" value="Male">
                            <label class="form-check-label" for="tellUs-partner-gender__male">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tellUs-partner-gender" id="tellUs-partner-gender__female" value="Female">
                            <label class="form-check-label" for="tellUs-partner-gender__female">Female</label>
                          </div>
                          </div><!-- /.col -->
                          
                        </div><!-- /.form-group -->
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-Identification">Identification:</label>
                          <select class="form-control" id="tellUs-partner-Identification">
                            <option readonly value=""></option>
                            <option value="Passport">Passport</option>
                            <option value="Government ID Card">Government ID Card</option>
                            <option value="Driving Licence">Driving Licence</option>
                            <option id="tellUs-partner-identification--Other"  value="Other">Other</option>
                          </select>
                          <div class="inputWithCloseBtn hide" id="tellUs-partner-Identification--OtherText">
                            <input type="text" class="form-control" id="tellUs-partner-Identification--OtherText-input"  aria-describedby="" placeholder="Insert Identification">
                            <div class="closeBtn"><i class="fas fa-times"></i></div><!-- /.closeBtn -->
                          </div><!-- /.inputWithCloseBtn -->
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-IdentificationNumber">Identification Number:</label>
                          <input type="text" class="form-control" id="tellUs-partner-IdentificationNumber" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-CountryOfIssue">Country of Issue:</label>
                          <select class="form-control" id="tellUs-partner-CountryOfIssue">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-MaritalStatus">Marital Status:</label>
                          <select class="form-control" id="tellUs-partner-MaritalStatus">
                            <option readonly  value=""></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
														<option value="Divorced">Divorced</option>
														<option value="Widowed">Widowed</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-NumberOfFinancialDependants ">Number of Financial Dependants :</label>
                          <select class="form-control" id="tellUs-partner-NumberOfFinancialDependants">
                            <option readonly  value=""></option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="5+">5+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-dateOfBirth">Date of Birth:</label>
                          <input data-provide="datepicker" class="form-control datepicker tellUs-datepicker" id="tellUs-partner-dateOfBirth" placeholder="dd/mm/yyyy">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-PlaceOfBirth">Place of Birth:</label>
                          <input type="text" class="form-control" id="tellUs-partner-PlaceOfBirth" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-EmploymentStatus">Employment Status:</label>
                          <select class="form-control" id="tellUs-partner-EmploymentStatus">
                            <option readonly  value=""></option>
                            <option value="">Employed</option>
                            <option value="">Self-Employed</option>
                            <option value="">Unemployed</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-Occupation">Occupation:</label>
                          <input type="text" class="form-control" id="tellUs-partner-Occupation" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-NameOfEmployer">Name of employer:</label>
                          <input type="text" class="form-control" id="tellUs-partner-NameOfEmployer" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
													<label for="tellUs-partner-EmployerAddress">Employer Address:</label>
													<textarea  rows="2" class="form-control" id="tellUs-partner-EmployerAddress" placeholder=""></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-AnnualGrossSalary">Annual Gross Salary (<span class="ttInitial">figure in GBP</span>):</label>
                          <select class="form-control" id="tellUs-partner-AnnualGrossSalary">
                            <option readonly  value=""></option>
                            <option value="0-50,000">0-50,000</option>
                            <option value="50,001-75,000">50,001-75,000</option>
                            <option value="75,001-100,000">75,001-100,000</option>
                            <option value="100,001-125,000">100,001-125,000</option>
                            <option value="125,001-150,000">125,001-150,000</option>
                            <option value="150,001-175,000">150,001-175,000</option>
                            <option value="175001-200,000">175001-200,000</option>
                            <option value="200,001-250,00">200,001-250,00</option>
                            <option value="250,000+">250,000+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-AnnualNetSalary">Annual Net Salary (<span class="ttInitial">figure in GBP</span>):</label>
                          <select class="form-control" id="tellUs-partner-AnnualNetSalary">
                            <option readonly  value=""></option>
                            <option value="0-50,000">0-50,000</option>
                            <option value="50,001-75,000">50,001-75,000</option>
                            <option value="75,001-100,000">75,001-100,000</option>
                            <option value="100,001-125,000">100,001-125,000</option>
                            <option value="125,001-150,000">125,001-150,000</option>
                            <option value="150,001-175,000">150,001-175,000</option>
                            <option value="175001-200,000">175001-200,000</option>
                            <option value="200,001-250,00">200,001-250,00</option>
                            <option value="250,000+">250,000+</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-NormalRetirementAge ">Normal Retirement age :</label>
                          <input data-provide="datepicker" class="form-control datepicker tellUs-datepicker" id="tellUs-partner-NormalRetirementAge" placeholder="dd/mm/yyyy">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-CountryOfResidence">Country of Residence:</label>
                          <select class="form-control" id="tellUs-partner-CountryOfResidence">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-CountryOfTaxResidence">Country of Tax residence:</label>
                          <select class="form-control" id="tellUs-partner-CountryOfTaxResidence">
                            <option readonly  value=""></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Myanmar/Burma">Myanmar/Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Israel and the Occupied Territories">Israel and the Occupied Territories</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyz Republic (Kyrgyzstan)">Kyrgyz Republic (Kyrgyzstan)</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Republic of Macedonia">Republic of Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of Moldova">Moldova, Republic of Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Korea, Democratic Republic of (North Korea)">Korea, Democratic Republic of (North Korea)</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pacific Islands">Pacific Islands</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent's & Grenadines">Saint Vincent's & Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovak Republic (Slovakia)">Slovak Republic (Slovakia)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor Leste">Timor Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Islands">Turks & Caicos Islands</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
                            <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                            <option value="United States of America (USA)">United States of America (USA)</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (UK)">Virgin Islands (UK)</option>
                            <option value="Virgin Islands (US)">Virgin Islands (US)</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-ResidentialAddress">Residential Address:</label>
                          <textarea class="form-control" id="tellUs-partner-ResidentialAddress" rows="2"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-CorrespondanceAddress">Correspondance address:</label>
                          <textarea class="form-control" id="tellUs-partner-CorrespondanceAddress" rows="2"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-EmailAddress">Email Address:</label>
                          <input type="email" class="form-control" id="tellUs-partner-EmailAddress" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-TelephoneDay">Telephone (<span class="ttInitial">day</span>):</label>
                          <input type="text" class="form-control" id="tellUs-partner-TelephoneDay" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-TelephoneEvening">Telephone (<span class="ttInitial">evening</span>):</label>
                          <input type="text" class="form-control" id="tellUs-partner-TelephoneEvening" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-TelephoneMobile">Telephone (<span class="ttInitial">mobile</span>):</label>
                          <input type="text" class="form-control" id="tellUs-partner-TelephoneMobile" aria-describedby="" placeholder="">
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-InvestingCurrency">Investing Currency:</label>
                          <select class="form-control" id="tellUs-partner-InvestingCurrency">
                            <option readonly  value=""></option>
                            <option value="GBP">GBP</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-Smoker">Smoker:</label>
                          <select class="form-control" id="tellUs-partner-Smoker">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-StateOfHealth">State of Health:</label>
                          <select class="form-control" id="tellUs-partner-StateOfHealth">
                            <option readonly  value=""></option>
                            <option value="Excellent">Excellent</option>
                            <option value="Good">Good</option>
                            <option value="Average">Average</option>
                            <option value="Poor">Poor</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-UpToDateWill">Up To Date Will:</label>
                          <select class="form-control" id="tellUs-partner-UpToDateWill">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-DoYouIntend">Do You Intend/ Have you Moved Abroad:</label>
                          <select class="form-control" id="tellUs-partner-DoYouIntend">
                            <option readonly  value=""></option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                          </select>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                      <div class="col-sm-6 px-2 pb-2">
                        <div class="form-group m-0">
                          
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->

                    <div class="row">
                      <div class="col px-2 pb-2">
                        <div class="form-group m-0">
                          <label for="tellUs-partner-OtherInfo">Other relevant Information:</label>
                          <textarea class="form-control" id="tellUs-partner-OtherInfo" rows="3"></textarea>
                        </div><!-- /.form-group m-0 -->
                      </div><!-- /.col-sm-6 px-2 pb-2 -->
                    </div><!-- /.row -->

                  </form>

                </div>
                <div class="modal-footerComplex clearfix">
                  <button type="button" class="btn btn-md btn-outline-info float-left" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Back</button>
                  <button type="button" class="btn btn-md btn-outline-info float-right" data-dismiss="modal">Continue <i class="fa fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- ----------------------------------------------------------------------------- -->
          <!-- ---------------      /Tell Us About Yourself – Partner       ---------------- -->
          <!-- ----------------------------------------------------------------------------- -->


          <?php include('inc/mo/tellUsAboutYourInvestment_v2.php'); ?>
          
          <?php include('inc/mo/YourPriorityInvestingGoals.php'); ?>

          <?php include('inc/mo/YourFinancialCircumstances.php'); ?>

          <?php include('inc/mo/YourInvestingExperience.php'); ?>

          <?php include('inc/mo/YourFinancialPersonality.php'); ?>

          <?php include('inc/mo/InvestmentManagementPreferences.php'); ?>

          <!-- Profiling Request Report Modal -->
          <div class="modal fade" id="StartNewReport" tabindex="-1" role="dialog" aria-labelledby="StartNewReportLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="offset-1 col-10 modal-title text-center" id="exampleModalLabel">Start <span>New Report</span></h5>
                  <button type="button" class="col-1 close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                  </button>
                </div>
                <div class="modal-body p-4">
                  <form>
                    <div class="row">
                      <div class="col pr-2">
                        <div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Client Agreement/Profiling Document</h5>
                            </div>
                            <p>Email your client Terms of Engagement.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Latitude Illustration</h5>
                            </div>
                            <p>Non Contractual Regular Savings Illustration tool.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Spotlight</h5>
                            </div>
                            <p>Fact find for goals based models or GIA.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start enable">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Limelight</h5>
                            </div>
                            <p>Fact find for to discretionary portfolios.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Suitability Update</h5>
                            </div>
                            <p>Short form annual profile update.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start enable ">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Update Fact Find</h5>
                            </div>
                            <p>Amend or update client fact find.</p>
                          </a>
                        </div>
                      </div>
                      <div class="col pl-2">
                        <div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Investment Profiler</h5>
                            </div>
                            <p>Risk profile fact find only.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Cash Flow Planning</h5>
                            </div>
                            <p>Fact find for cash flow planning report.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">IHT Planning</h5>
                            </div>
                            <p>Fact find for estate planning purposes only.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Business Protection</h5>
                            </div>
                            <p>Information for business protection planning.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Insurance Provision</h5>
                            </div>
                            <p>Review existing provision.</p>
                          </a>
                          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mt-1 mb-1">Retirement Planning</h5>
                            </div>
                            <p>Fact Find for pension planning only.</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-md btn-outline-info" data-dismiss="modal">Continue</button>
                </div>
              </div>
            </div>
          </div>


        </article>
        <?php include('inc/sb/iplanner.php'); ?>

      </div>
    </main>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/footer-js.php'); ?>

    <script src="libs/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
    <script src="js/common.js"></script>

  </body>
</html>
