<!doctype html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <?php require_once 'includes/head-meta.html' ?>
    <title>Property Overview | Tamasha Spaces</title>
    <?php include_once 'includes/head-links.html' ?>
  </head>

  <body class="flex flex-col w-full">
    <?php require 'src/php/logic.php' ?>
    <?php include_once 'includes/cart.html' ?>
    <?php include_once 'includes/header.html' ?>

    <main class="w-full">
      <section
        id="space-summary"
        class="section md:flex md:flex-wrap md:justify-between md:items-center"
      >
        <!-- DYNAMIC GALLERY -->
        <div class="md:w-[44%] lg:w-[46%] mb-10 md:mb-0">
          <h1
            class="md:hidden mb-4 text-4xl text-center font-titles font-extrabold"
          >
            <?= $space_name ?>
          </h1>
          <p class="md:hidden mb-8 text-center font-body font-light">
            <span class="text-3xl font-titles font-extrabold"
              ><?= $space_price ?></span
            >
            <span class="text-3xl font-titles font-extrabold">KZT</span> / day
          </p>
          <img
            src="<?= $space_photos[0]; ?>"
            alt=""
            width="100%"
            class="mb-8"
          />
          <div class="flex justify-between items-center gap-4 w-full">
            <img
              src="<?= $space_photos[0]; ?>"
              alt=""
              width="30%"
              id="space-img"
            />
            <img src="<?= $space_photos[1]; ?>" alt="" width="30%" />
            <img src="<?= $space_photos[2]; ?>" alt="" width="30%" />
          </div>
        </div>

        <div class="order-data md:w-2/4">
          <!-- ORDER DATA -->
          <h1
            class="hidden md:block mb-4 text-4xl font-titles font-extrabold text-gray-dark"
          >
            <?= $space_name ?>
          </h1>
          <p class="hidden md:block mb-5 font-body font-light">
            <span class="current-price text-3xl font-titles font-extrabold">
              <?= $space_price ?></span
            >
            <span class="text-3xl font-titles font-extrabold">KZT</span> / day
          </p>
          <p class="mb-7 md:mb-5 font-body font-light"><?= $space_desc ?></p>

          <p class="hidden lg:block mb-7 md:mb-5 font-body font-light">
            All our spaces count with insurance, exclusive use during the time period in the contract, as well as fully functional and unlimited WiFi, bathroom and electric services; all with the best security practices.
          </p>

          <!-- ICON ITEM FOR > :MD -->
          <div class="hidden md:block mb-5">
            <div
              class="flex justify-start items-center ml-[11vw] md:ml-0 text-left"
            >
              <i class="bx bx-group mr-2 text-2xl"></i>
              <p class="font-body font-light">
                <span class="mr-2.5 font-medium">Capacity:</span>
                <?= $space_cap ?> people.
              </p>
            </div>
          </div>

          <p class="hidden lg:block mb-7 md:mb-6 font-body font-light text-sm text-gray-dark">
            By using our services, you agree to our <strong>terms and conditions.</strong> We are experts at events handling but we encourage our users to review our policies for more information.
          </p>

          <div
            class="block md:flex md:justify-between md:items-center md:gap-6"
          >
            <a href="" class="block md:w-2/4 mb-5 md:mb-0"
              ><button class="add-viewing btn w-full">Add to Cart</button></a
            >
            <a href="checkout.php" class="block md:w-2/4"
              ><button class="btn btn--alt w-full">Reserve Now</button></a
            >
          </div>
        </div>
      </section>

      <!-- TESTIMONIALS -->
      <section class="container px-10 lg:px-24 mx-auto">
        <h2 class="text-xl text-center md:text-left font-subs mb-6">
          What our clients say
        </h2>

        <div
          class="md:flex md:justify-between md:items-center md:gap-9 lg:gap-8"
        >
          <div class="md:w-2/4 p-7 md:p-8 border border-gray-dark mb-9 md:mb-0">
            <div class="text-lg mb-4 text-gray-dark">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <p class="mb-4 font-body font-light">
              Tamasha Spaces has been a game-changer for our company. Their
              modern and well-equipped venues have helped us host successful
              events and meetings.
            </p>
            <h4 class="text-lg font-subs">Emily Chen, Marketing Manager</h4>
          </div>

          <div class="md:w-2/4 p-7 md:p-8 border border-gray-dark">
            <div class="text-lg mb-4 text-gray-dark">
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <p class="mb-4 font-body font-light">
              I was impressed by the flexibility and professionalism of the
              Tamasha Spaces team. They helped us find the perfect space for our
              training sessions.
            </p>
            <h4 class="text-lg font-subs">David Lee, Training Director</h4>
          </div>
        </div>
      </section>

      <section class="container px-10 lg:px-24 pt-20 lg:pt-24 mx-auto">
        <div class="separator w-full"></div>
      </section>

      <!-- FEATURED SPACES -->
      <section id="featured" class="section">
        <h2
          class="mb-10 text-center md:text-left text-3xl font-titles font-bold"
        >
          Most popular spaces
        </h2>
        <div
          class="md:flex md:justify-between md:items-center md:gap-7 lg:gap-10"
        >
          <div href="" class="card card--recommended">
            <img src="media/conference-3.webp" alt="" height="180" />
            <h3 class="mb-2 text-lg md:text-xl font-subs">Meetings Room</h3>
            <div class="flex justify-between items-center">
              <p class="uppercase font-body font-light text-gray-dark">
                90000 KZT
              </p>
              <button class="add-featured btn block">
                <i class="bx bxs-cart"></i>
                <span class="md:hidden lg:inline">Add</span>
              </button>
            </div>
          </div>

          <div href="" class="card card--recommended">
            <img src="media/office-1.webp" alt="" height="180" />
            <h3 class="mb-2 text-lg md:text-xl font-subs">Coworking Space</h3>
            <div class="flex justify-between items-center">
              <p class="uppercase font-body font-light text-gray-dark">
                60000 KZT
              </p>
              <button class="add-featured btn block">
                <i class="bx bxs-cart"></i>
                <span class="md:hidden lg:inline">Add</span>
              </button>
            </div>
          </div>

          <div href="" class="card card--last card--recommended">
            <img src="media/training-1.webp" alt="" height="180" />
            <h3 class="mb-2 text-lg md:text-xl font-subs">Training Room</h3>
            <div class="flex justify-between items-center">
              <p class="uppercase font-body font-light text-gray-dark">
                100000 KZT
              </p>
              <button class="add-featured btn block">
                <i class="bx bxs-cart"></i>
                <span class="md:hidden lg:inline">Add</span>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include_once 'includes/footer.php' ?>

    <script src="src/js/main.js"></script>
    <script src="src/js/preview.js"></script>

    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/shoelace-autoloader.js"
    ></script>
  </body>
</html>
