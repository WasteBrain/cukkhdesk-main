<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/plugins/jquery/jquery-3.7.1.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>

<script src="<?= base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- dropzonejs -->
<script src="<?= base_url() ?>assets/plugins/dropzone/min/dropzone.min.js"></script>

<!-- online assets -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<!-- script for event -->
<script>
  $(document).ready(function () {

    // untuk ngisi select input kategori tiket ambil dari route api/get
    if ($('#forminputtiket').length) {
      var selectKategori = $('select[name="tiketkategori_id"]');
      $.ajax({
        type: 'POST',
        url: '../api/get',
        contentType: 'application/json',
        data: JSON.stringify({
          table: 'tiketkategori',
          id: ''
        }),
        success: function (response) {
          console.log(response);
          let resp = response.data;
          selectKategori.append(`
            <option value=''>-- Select kategori -- </option>
          `);
          $.each(resp, function (params, item) {
            selectKategori.append(`
              <option value="${item.tiketkategori_id}">${item.nama_kategori}</option>
            `);
          });

          selectKategori.val('');
        },
        error: function (error) {
          console.log(error);
        }
      });
    }
  });

  // unutk kirimkan data forminputtiket ke route api/insert
  $(document).on('submit', '#forminputtiket', function (e) {
    e.preventDefault();
    var currentDateTime = new Date().toISOString().slice(0, 19).replace('T', ' ');
    console.log(currentDateTime);

    //make ajax inside ajax
    $.ajax({

    });

    $.ajax({
      type: "POST",
      url: "../api/insert",
      contentType: 'application/json',
      data: JSON.stringify({
        table: 'tiket',
        data: [{
          user_id: $('input[name="user_id"]').val(),
          tiketkategori_id: $('select[name="tiketkategori_id"]').val(),
          status: '1', // status pertama kali input tetap 1
          prioritas: 'none', // prioritas pertama input tetap none
          tgl_buat: currentDateTime, // gunakan tgl dan waktu saat input
          deskripsi: $('textarea[name="deskripsi"]').val(),
          nama_file: 'form trouble.docx', // nanti ganti dengan input/agak laen metode upload
          // img location
          img: '/assets/img/1_1_2024_04_06.jpg' // nanti ganti dengan input/ agak laen metode upload
        }]
      }),
      success: function (response, textStatus, xhr) {
        if (xhr.status >= 200) {

          // simpan file ke path

          swal({
            title: "Done",
            text: "Tiket sukses disubmit",
            showConfirmButton: true,
            type: 'success'
          });

          // reset form after submited
          $('#forminputtiket')[0].reset();
        } else {
          alert("Error: " + xhr.status);
        }
      },
      error: function (xhr, textStatus, errorThrown) {
        console.log("Error: " + xhr.status);
      }
    });
  })

  $(function () {
    bsCustomFileInput.init();
  });


</script>