<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/datatables.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/multistep-form.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	// To style all selects
	$(document).ready(function() {
    $('select').select2();
	});
</script>
