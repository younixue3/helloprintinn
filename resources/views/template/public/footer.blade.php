<footer class="page-footer red darken-3">
    <div class="container">
      <div class="row">
        <div class="col l5 s8">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
          <div class="card z-depth-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.687709282709!2d117.15434541475337!3d-0.4636093996617577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df679525eb7d3b1%3A0x42c5f38ef09cac4f!2sPrint%20Inn!5e0!3m2!1sid!2sid!4v1598599161007!5m2!1sid!2sid" width="100%" height="270" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <a href="https://www.google.com/maps/dir//Print+Inn,+Jl.+Perjuangan+No.59,+Sempaja+Sel.,+Kec.+Samarinda+Utara,+Kota+Samarinda,+Kalimantan+Timur+75242/@-0.4636094,117.1543454,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2df679525eb7d3b1:0x42c5f38ef09cac4f!2m2!1d117.1565341!2d-0.4636094!3e0" target="blank_" class="btn-floating btn-large halfway-fab waves-effect waves-light green z-depth-2 pulse hoverable"><i class="material-icons" id="size-icon">place</i></a>
          </div>


        </div>
        <div class="col l3 s6 offset-l1">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s6">
          <h5 class="white-text">Contact</h5>
          <ul>
            <li><a class="white-text" href="https://www.instagram.com/helloprintinn/">Instagram</a></li>
            <li><a class="white-text" href="https://api.whatsapp.com/send?phone=+6281212778805">Whatsapp</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" target="_blank" href="http://47.254.202.219/">RDeveloper</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('Materialize/js/materialize.min.js')}}"></script>
  <script src="{{ asset('Materialize/js/init.js')}}"></script>
  <script>
      $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
    });
  </script>
  </body>
</html>

<style>
  #index-banner {
    padding-top: 13vh;
    min-height: 525px;
    height: 95vh;
  }
  #judul {
    background-color: #C62828;
  }
</style>
