<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://img.icons8.com/glyph-neue/64/40C057/recycle-bin.png">
    <link rel="icon" type="image/png" href="https://img.icons8.com/glyph-neue/64/40C057/recycle-bin.png">
    <title>Bank Sampah</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="<?= base_url(); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="<?= base_url(); ?>assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <style>
      .async-hide {
        opacity: 0 !important
      }
    </style>
    <script>
      (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
          s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
          i();
          h.end = null
        }, c);
        h.timeout = c;
      })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-K9BGS8K': true
      });
    </script>
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-46172202-22', 'auto', {
        allowLinker: true
      });
      ga('set', 'anonymizeIp', true);
      ga('require', 'GTM-K9BGS8K');
      ga('require', 'displayfeatures');
      ga('require', 'linker');
      ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <script defer data-site="demos.creative-tim.com" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>
  <body class="g-sidenav-show  bg-gray-200">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
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
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm">
                <a class="opacity-3 text-dark" href="javascript:;">
                  <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>shop </title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(0.000000, 148.000000)">
                            <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                            <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </a>
              </li>
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Order List</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Order List</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link text-body p-0 position-relative" target="_blank">
                  <i class="material-icons me-sm-1"> account_circle </i>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="material-icons fixed-plugin-button-nav cursor-pointer"> settings </i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container-fluid py-4">
        <div class="d-sm-flex justify-content-between">
          <div>
            <a href="javascript:;" class="btn btn-icon bg-gradient-primary"> New order </a>
          </div>
            <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
              <i class="material-icons text-xs position-relative">archive</i> Export CSV </button>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">Orders Table</h5>
                <p class="text-sm mb-0"> View all the orders from the previous year. </p>
              </div>
              <div class="table-responsive">
                <table class="table table-flush" id="datatable-search">
                  <thead class="thead-light">
                    <tr>
                      <th>Id</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Customer</th>
                      <th>Product</th>
                      <th>Revenue</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck1">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10421</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <img src="
																													<?= base_url(); ?>assets/img/team-2.jpg" class="avatar avatar-xs me-2" alt="user image">
                          <span>Orlando Imieto</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">Nike Sport V2</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$140,20</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check pt-0">
                            <input class="form-check-input" type="checkbox" id="customCheck2">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10422</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 10:53 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <img src="
																															<?= base_url(); ?>assets/img/team-1.jpg" class="avatar avatar-xs me-2" alt="user image">
                          <span>Alice Murinho</span>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">Valvet T-shirt</span>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">$42,00</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck3">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10423</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 11:13 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">refresh</i>
                          </button>
                          <span>Refunded</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-dark">
                            <span>M</span>
                          </div>
                          <span>Michael Mirra</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Leather Wallet <span class="text-secondary ms-2"> +1 more </span>
                        </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$25,50</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck4">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10424</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 12:20 PM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <img src="
																																			<?= base_url(); ?>assets/img/team-3.jpg" class="avatar avatar-xs me-2" alt="user image">
                            <span>Andrew Nichel</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Bracelet Onu-Lino </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$19,40</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck5">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10425</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 1:40 PM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">clear</i>
                          </button>
                          <span>Canceled</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <img src="
																																					<?= base_url(); ?>assets/img/team-4.jpg" class="avatar avatar-xs me-2" alt="user image">
                            <span>Sebastian Koga</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Phone Case Pink <span class="text-secondary ms-2"> x 2 </span>
                        </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$44,90</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck6">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10426</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 2:19 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-primary">
                            <span>L</span>
                          </div>
                          <span>Laur Gilbert</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Backpack Niver </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$112,50</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck7">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10427</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">1 Nov, 3:42 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-dark">
                            <span>I</span>
                          </div>
                          <span>Iryna Innda</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Adidas Vio </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$200,00</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck8">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10428</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">2 Nov, 9:32 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-dark">
                            <span>A</span>
                          </div>
                          <span>Arrias Liunda</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Airpods 2 Gen </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$350,00</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck9">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10429</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">2 Nov, 10:14 AM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <img src="
																																										<?= base_url(); ?>assets/img/team-5.jpg" class="avatar avatar-xs me-2" alt="user image">
                            <span>Rugna Ilpio</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Bracelet Warret </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$15,00</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck10">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10430</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">2 Nov, 12:56 PM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">refresh</i>
                          </button>
                          <span>Refunded</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <img src="
																																												<?= base_url(); ?>assets/img/ivana-squares.jpg" class="avatar avatar-xs me-2" alt="user image">
                            <span>Anna Landa</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Watter Bottle India <span class="text-secondary ms-2"> x 3 </span>
                        </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$25,00</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck11">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10431</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">2 Nov, 3:12 PM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-dark">
                            <span>K</span>
                          </div>
                          <span>Karl Innas</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Kitchen Gadgets </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$164,90</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="customCheck12">
                          </div>
                          <p class="text-xs font-weight-normal ms-2 mb-0">#10432</p>
                        </div>
                      </td>
                      <td class="font-weight-normal">
                        <span class="my-2 text-xs">2 Nov, 5:12 PM</span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                            <i class="material-icons text-sm" aria-hidden="true">done</i>
                          </button>
                          <span>Paid</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-xs me-2 bg-gradient-info">
                            <span>O</span>
                          </div>
                          <span>Oana Kilas</span>
                        </div>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs"> Office Papers </span>
                      </td>
                      <td class="text-xs font-weight-normal">
                        <span class="my-2 text-xs">$23,90</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start"> © <script>
                    document.write(new Date().getFullYear())
                  </script> Copyright Bank Sampah, template by Material</div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Material UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="material-icons">clear</i>
            </button>
          </div>
        </div>
        <div class="card-body pt-sm-3 pt-0">
          <hr class="horizontal dark my-sm-4">
          <a class="btn bg-gradient-primary w-100" href="">Logout</a>
          <a class="btn bg-gradient-info w-100" href="">Logout</a>
          <a class="btn btn-outline-dark w-100" href="">Logout</a>
        </div>
      </div>
    </div>
    <script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins/datatables.js"></script>
    <script>
      const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false
      });
      document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
          var type = el.dataset.type;
          var data = {
            type: type,
            filename: "material-" + type,
          };
          if (type === "csv") {
            data.columnDelimiter = "|";
          }
          dataTableSearch.export(data);
        });
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?= base_url(); ?>assets/js/material-dashboard.min.js?v=3.0.6"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7b19ce871b533f8d","version":"2023.3.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
  </body>
</html>
