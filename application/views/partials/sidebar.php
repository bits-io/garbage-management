<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html " target="_blank">
          <img src="https://img.icons8.com/glyph-neue/64/40C057/recycle-bin.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Bank Sampah</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item mb-2 mt-0">
            <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
              <img src="<?= base_url(); ?>assets/img/team-3.jpg" class="avatar">
              <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
            </a>
            <div class="collapse" id="ProfileNav" style="">
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link text-white" href="../../../pages/pages/profile/overview.html">
                    <span class="sidenav-mini-icon"> MP </span>
                    <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white " href="../../../pages/authentication/signin/basic.html">
                    <span class="sidenav-mini-icon"> L </span>
                    <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <hr class="horizontal light mt-0">
          <li class="nav-item">
						<a class="nav-link text-white " href="../../../pages/dashboards/analytics.html">
              <i class="material-icons-round opacity-10">dashboard</i>
              <span class="nav-link-text ms-2 ps-1">Dashboards</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">group</i>
              <span class="nav-link-text ms-2 ps-1">Data User</span>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/pages/pricing-page.html">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Operator </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/pages/rtl-page.html">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Nasabah </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
					<li class="nav-item">
            <a data-bs-toggle="collapse" href="#masterWaste" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">delete_sweep</i>
              <span class="nav-link-text ms-2 ps-1">Data Sampah</span>
            </a>
            <div class="collapse " id="masterWaste">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/pages/pricing-page.html">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Data Sampah </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/pages/rtl-page.html">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Sampah Keluar </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">point_of_sale</i>
              <span class="nav-link-text ms-2 ps-1">Transaksi</span>
            </a>
            <div class="collapse " id="applicationsExamples">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/applications/crm.html">
                    <span class="sidenav-mini-icon"> SS </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Setor Sampah </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/applications/kanban.html">
                    <span class="sidenav-mini-icon"> TU </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Tarik Uang </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white active" aria-controls="ecommerceExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">history</i>
              <span class="nav-link-text ms-2 ps-1">Riwayat</span>
            </a>
            <div class="collapse  show " id="ecommerceExamples">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " href="../../../pages/ecommerce/referral.html">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Riwayat Transaksi </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white " aria-controls="authExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
              <span class="nav-link-text ms-2 ps-1">Authentication</span>
            </a>
            <div class="collapse " id="authExamples">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Sign In <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="signinExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signin/basic.html">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signin/cover.html">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signin/illustration.html">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signupExample">
                    <span class="sidenav-mini-icon"> S </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Sign Up <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="signupExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signup/basic.html">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signup/cover.html">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/signup/illustration.html">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#resetExample">
                    <span class="sidenav-mini-icon"> R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Reset Password <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="resetExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/reset/basic.html">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/reset/cover.html">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/reset/illustration.html">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#lockExample">
                    <span class="sidenav-mini-icon"> L </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Lock <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="lockExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/lock/basic.html">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/lock/cover.html">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/lock/illustration.html">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#StepExample">
                    <span class="sidenav-mini-icon"> 2 </span>
                    <span class="sidenav-normal  ms-2  ps-1"> 2-Step Verification <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="StepExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/verification/basic.html">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Basic </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/verification/cover.html">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Cover </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/verification/illustration.html">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Illustration </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#errorExample">
                    <span class="sidenav-mini-icon"> E </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Error <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse " id="errorExample">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/error/404.html">
                          <span class="sidenav-mini-icon"> E </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Error 404 </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white " href="../../../pages/authentication/error/500.html">
                          <span class="sidenav-mini-icon"> E </span>
                          <span class="sidenav-normal  ms-2  ps-1"> Error 500 </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <hr class="horizontal light" />
            <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Pengaturan</h6>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link text-white " aria-controls="componentsExamples" role="button" aria-expanded="false">
              <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">settings</i>
              <span class="nav-link-text ms-2 ps-1">Pengaturan</span>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav ">
                <li class="nav-item ">
                  <a class="nav-link text-white " href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-dashboard" target="_blank">
                    <span class="sidenav-mini-icon"> A </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Logout </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </aside>
