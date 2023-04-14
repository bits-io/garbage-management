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
