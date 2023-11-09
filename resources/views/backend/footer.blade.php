<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{asset('assets/modules/chart.min.js')}}"></script>
  <script src="{{asset('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <!-- <script src="{{asset('assets/js/page/index-0.js')}}"></script> -->

  <!-- Alert -->

  <script src="{{asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/modules-sweetalert.js')}}"></script>

  <!-- End Allert -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script src="{{asset('assets/js/sw/sweetalert2.all.min.js')}}"></script>
  <script src="{{asset('assets/js/sw/myscript.js')}}"></script>
  <script>
    document.getElementById("verifikasiButton").addEventListener("click", function () {
        var form = document.getElementById("verifikasiForm");
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Tindakan sukses, contohnya munculkan pesan sukses
                    alert(response.message);
                } else {
                    // Tindakan jika terjadi kesalahan
                    alert(response.message);
                }
            }
        };

        xhr.open("POST", form.action, true);
        xhr.setRequestHeader("X-CSRF-Token", form.querySelector('input[name="_token"]').value);

        xhr.send(new FormData(form));
    });

    function kirimVerifikasi() {
        // Lakukan logika pengiriman email verifikasi di sini

        // Ganti warna tombol dan teks setelah berhasil dikirim
        var verifikasiButton = document.getElementById("verifikasiButton");
        var verifikasiMessage = document.getElementById("verifikasiMessage");

        // Ubah warna tombol menjadi hijau
        verifikasiButton.classList.remove("btn-danger");
        verifikasiButton.classList.add("btn-success");

        // Ubah teks tombol
        verifikasiButton.innerHTML = "Berhasil dikirim ke email Anda";

        // Tampilkan pesan sukses
        verifikasiMessage.innerHTML = "Verifikasi link berhasil dikirim. Cek email Anda.";
    }
</script>

  <!-- Blok FIle JS -->
  @stack('js')
</body>
</html>