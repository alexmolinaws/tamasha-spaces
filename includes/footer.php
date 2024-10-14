<footer id="page-footer" class="text-lite bg-main">
  <div
    class="flex flex-col md:flex-row justify-between items-start md:gap-5 lg:gap-14 container pt-16 pb-12 md:py-[78px] px-6 md:px-16 mx-auto [&_a]:text-2xl"
  >
    <div
      class="w-full md:w-2/3 lg:w-1/4 mr-5 mb-8 md:mb-0 text-center font-body font-light"
    >
      <a href="index.php">
        <img
          src="../media/white-logo.webp"
          alt="Tamasha Spaces png logo"
          class="w-2/4 md:w-4/5 lg:w-2/4 mx-auto mb-3"
        />
      </a>
      <p class="mb-4 font-body font-light">Flexible spaces for modern business.</p>
      <a href="#" class="mr-2.5"><i class="bx bxl-instagram-alt"></i></a>
      <a href="#" class="mr-2.5"><i class="bx bxl-facebook-square"></i></a>
      <a href="#"><i class="bx bxl-linkedin-square"></i></a>
    </div>

    <div
      class="w-5/6 md:w-2/3 lg:w-1/4 mx-auto md:ml-0 md:mr-6 lg:mr-8 mb-6 md:mb-0"
    >
      <sl-carousel loop autoplay autoplay-interval="1800" class="w-full">
        <sl-carousel-item>
          <img alt="" src="media/slide-1.webp" />
        </sl-carousel-item>
        <sl-carousel-item>
          <img alt="" src="media/slide-2.webp" />
        </sl-carousel-item>
        <sl-carousel-item>
          <img alt="" src="media/slide-3.webp" />
        </sl-carousel-item>
        <sl-carousel-item>
          <img alt="" src="media/slide-4.webp" />
        </sl-carousel-item>
      </sl-carousel>
    </div>

    <div class="hidden lg:block w-1/5">
      <h4 class="mb-3 text-lg font-subs">Navigation</h4>
      <nav>
        <ul class="font-body font-light [&_li]:mb-2.5">
          <li><a href="index.php" style="font-size: 1rem">Solutions</a></li>
          <li><a href="spaces.php" style="font-size: 1rem">Spaces</a></li>
          <li><a href="contact.php" style="font-size: 1rem">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="w-full md:w-2/3 lg:w-1/5 text-center md:text-left">
      <h4 class="mb-3 text-lg font-subs">Contact Us</h4>
      <ul class="font-body font-light [&_li]:mb-2.5">
        <li>
          <i class="bx bxs-envelope mr-2 text-lg"></i>
          biznes@tamasha.kz
        </li>
        <li>
          <i class="bx bxs-map mr-2 text-lg"></i> Tulpar Trade Complex, Almaty,
          Kazakhstan.
        </li>
      </ul>
    </div>
  </div>

  <div
    class="py-4 md:py-3 px-6 text-center text-sm font-body font-light text-dark bg-main-light"
  >
    <p>
      Copyright &copy; <?= date(format: 'Y') ?> Tamasha Spaces. All rights reserved. Developed by
      <a
        href="https://alexmolinaws.com/"
        class="font-medium hover:text-gray-dark"
        >Alex Molina</a
      >.
    </p>
  </div>
</footer>
