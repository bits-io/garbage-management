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
    <link id="pagestyle" href="<?= base_url(); ?>assets/css/material-dashboard.min.css?v=3.0.5" rel="stylesheet" />
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
  <body class="bg-gray-200">
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
      <div class="container">
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 d-flex justify-content-center" id="navigation">
        </div>
      </div>
    </nav>
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-100">
        <span class="mask bg-gradient-success opacity-6"></span>
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Bank Sampah Cikal</h4>
                    <div class="row mt-3">
										<?php if(isset($_GET['msg'])&&$_GET['msg']=="gagal"){?>
											<p class="alert alert-danger text-white text-center">Username atau Password salah!</p>
										<?php }else if(isset($_GET['msg'])&&$_GET['msg']=="logout"){?>
											<p class="alert alert-success text-white text-center">Berhasil logout!</p>
										<?php }else { ?>
											<p class="alert alert-success text-white text-center">Sign in to start your session</p>
										<?php } ?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form role="form" action="<?= base_url() ?>Auth/login" method="post" class="text-start">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label"></label>
                      <input type="text" class="form-control" name="username" placeholder="Login">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-secondary w-100 my-4 mb-2">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
          <div class="container">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-12 my-auto">
                <div class="copyright text-center text-sm text-white text-lg-center"> © <script>
                    document.write(new Date().getFullYear())
                  </script> Copyright Bank Sampah, template by Material</div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
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
    <script src="
																																								<?= base_url(); ?>assets/js/material-dashboard.min.js?v=3.0.6">
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7b19ce871b533f8d","version":"2023.3.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
  </body>
</html>
