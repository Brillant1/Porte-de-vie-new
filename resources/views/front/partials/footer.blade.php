<!-- footer -->
<footer class="bg-secondary">
    <div class=" d-flex justify-content-center py-100 border-bottom" style="border-color: #454547 !important">
      <div class="" style="width:75%;">
        <div class="row">
          <div class="col-md-4">
            <div class="mb-5 mb-md-0 text-center text-md-left">
              <!-- logo -->
              <img class="mb-30" src="{{ asset('front/images/logo-footer.png') }}" alt="logo">
              <p class="text-white mb-30">Nous sommes une église évangélique  qui investit dans la quête des âmes pour le Christ.
                Nous avons une doctrine fondée uniquement sur Jésus-Christ et rien d'autre.
              </p>
              <!-- social icon -->
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="#">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="#">
                    <i class="ti-twitter-alt"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="social-icon-outline" href="#">
                    <i class="ti-linkedin"></i>
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
                <a href="#">Rendez-vous</a>
              </li>
              <li>
                <a href="about.html">Rendez-vous</a>
              </li>
              <li>
                <a href="about.html">Prière de combat</a>
              </li>
              <li>
                <a href="contact.html">Chaîne télévisée</a>
              </li>
              <li>
                <a href="service.html">Mission évangélique</a>
              </li>
            </ul>
          </div>
          <!-- footer links -->
          <div class="col-lg-2 col-md-4 col-6">
            <h4 class="text-white mb-4">Liens utiles</h4>
            <ul class="footer-links">
              <li>
                <a href="{{ route('activite') }}">Activités</a>
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
              <form action="#" class="position-relative">
                <input type="text" class="form-control subscribe" name="subscribe" id="Subscribe"
                  placeholder="Enter Your Email">
                <button class="btn-subscribe" type="submit" value="send">
                  <i class="ti-arrow-right"></i>
                </button>
              </form>
            </div>
          </div>
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
  </footer>
  <!-- /footer -->
