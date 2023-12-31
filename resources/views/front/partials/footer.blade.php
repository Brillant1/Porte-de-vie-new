<!-- footer -->
<footer class="bg-secondary">
    <div class=" d-flex justify-content-center py-100 border-bottom" style="border-color: #454547 !important">
      <div class="" style="width:75%;">
        <div class="row">
          <div class="col-md-4">
            <div class="mb-5 mb-md-0 text-center text-md-left">
              <!-- logo -->
              <img class="mb-30" src="{{ asset('front/images/membre/logo.svg') }}" alt="logo">
              <p class="text-white mb-30">Nous sommes une église évangélique  qui investit dans la quête des âmes pour le Christ.
                Nous avons une doctrine fondée uniquement sur Jésus-Christ et rien d'autre.
              </p>
              <!-- social icon -->
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="facebook.com/sec.sec.sans.melange" title="facebook">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="https://www.youtube.com/watch?v=VAwZDS-bVsU" title="youtube">
                    <i class="ti-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="tiktok.com/@porte_tv_officiel" title="tiktok">
                    <i class="ti-tumblr-alt"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- footer links -->
          <div class="col-lg-2 col-md-4 col-6">
            <h4 class="text-white mb-4">Services</h4>
            <ul class="footer-links">
              <li>
                <a href="{{ route('apointments.index') }}">Rendez-vous</a>
              </li>

              <li>
                <a href="#">Prière de combat</a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=VAwZDS-bVsU">Chaîne télévisée</a>
              </li>
              <li>
                <a href="#">Mission évangélique</a>
              </li>
            </ul>
          </div>
          <!-- footer links -->
          <div class="col-lg-2 col-md-4 col-6">
            <h4 class="text-white mb-4">Liens utiles</h4>
            <ul class="footer-links">
              <li>
                <a href="{{ route('all-activities') }}">Activités</a>
              </li>
              <li>
                <a href="{{ route('about') }}">A propos</a>
              </li>
              <li>
                <a href="{{ route('annexe') }}">Annexes</a>
              </li>
              <li>
                <a href="{{ route('equipe') }}">L'équipe</a>
              </li>
              <li>
                <a href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>
          </div>
          <!-- subscribe form -->
          <div class="col-lg-3 offset-lg-1">
            <div class="mt-5 mt-lg-0 text-center text-md-left">
              <h4 class="mb-4 text-white">Abonnez-vous</h4>
              <p class="text-white mb-4">Abonnez-vous à notre newsletter pour être informé en temps réel de nos actualités et activités</p>
                <form method="POST" class="position-relative form-newsletter">
                  @csrf
                  <input type="email" class="form-control subscribe" name="subscribe" id="Subscribe"
                    placeholder="Entrez votre adresse email" required>
                    <p class="mt-1 text-danger success_message" style="display: none;">Merci pour votre abonnement !</p>
                    <button class="btn-subscribe btn-abonne">
                      <i class="ti-arrow-right"></i>
                    </button>
                </form>
            </div>
          </div>&
        </div>
      </div>
    </div>
    <!-- copyright -->
    <div class=" d-flex justify-content-center pt-4 pb-3 position-relative">
      <div class="" style="width:75%;">
        <div class="row">
          <div class="col-lg-6 col-md-5">
            <p class="text-white text-center text-md-left">
              <span class="text-primary">Porte de vie</span> &copy; {{ Carbon\Carbon::now()->year  }} Tout droits réservés</p>
          </div>
          <div class="col-lg-6 col-md-7">
            <ul class="list-inline text-center text-md-right">
              <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                <a class="font-secondary text-white" href="#">Mentions légales</a>
              </li>

              <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                <a class="font-secondary text-white" href="#">Politiques de confidentialité</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- back to top -->
      <button class="back-to-top">
        <i class="ti-angle-up"></i>
      </button>
    </div>




    <script>
        $(document).ready(function() {

            $('.form-newsletter').submit(function(e) {
                e.preventDefault();
                let message = $('.form-newsletter input[type="email"]').val();
                if (!message == "") {

                        $.ajax({
                            method: "POST",
                            url: '/save',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'message': message,

                            },
                            beforeSend: function() {
                                $('.btn-abonne').prop('disable', false);
                            },
                            success: function(data) {

                                $('.success_message').css('display', 'block');
                                setTimeout(() => {
                                    $('.success_message').css('display', 'none');
                                }, 3000);
                            },
                            completed: function() {
                                $('.btn-abonne').prop('disable', true);
                            }
                        })

                } else {
                    alert('Le champ est requis');
                }
            });
        });

    </script>
  </footer>
  <!-- /footer -->
