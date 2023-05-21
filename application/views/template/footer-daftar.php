<!-- Remove the container if you want to extend the Footer to full width. -->
<footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->

    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Email : ppdb@smkn1kragilan.sch.id |
    © 2023 Copyright:
    <a class="text-dark" href="#"> IT SMKN 1 Kragilan</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- End of .container -->

<!-- footer akhir -->


<script src="<?= base_url() ?>assets/datepicker/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/datepicker/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/datepicker/js/custom.js"></script>

<script>
  $(document).ready(function() {
    setDatePicker()
    setDateRangePicker(".startdate", ".enddate")
    setMonthPicker()
    setYearPicker()
    setYearRangePicker(".startyear", ".endyear")
  })

  $(document).ready(function() {
    $("#domainsTable").tablesorter({
      sortList: [
        [3, 1],
        [2, 0]
      ]
    });
  });

  function searchTable() {
    var input;
    var saring;
    var status;
    var tbody;
    var tr;
    var td;
    var i;
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
          status = true;
        }
      }
      if (status) {
        tr[i].style.display = "";
        status = false;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
</script>
</body>

</html>