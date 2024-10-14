<!doctype html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <?php require_once 'includes/head-meta.html' ?>
    <title>Our Catalog | Tamasha Spaces</title>
    <?php include_once 'includes/head-links.html' ?>
  </head>

  <body class="flex flex-col w-full">
    <?php include_once 'includes/cart.html' ?>
    <?php include_once 'includes/header.html' ?>

    <main class="w-full">
      <section class="pages-hero">
        <h1 class="mb-7 text-4xl font-titles font-extrabold">
          Spaces for Rent
        </h1>
      </section>

      <!-- CATEGORY 1 -->
      <section class="section">
        <h2
          class="mb-10 text-center md:text-left text-3xl font-titles font-bold"
        >
          For talks and events
        </h2>
        <div
          class="md:flex md:justify-between md:items-center md:gap-7 lg:gap-10"
        >
          <a href="preview.php?category=conference&item=0" class="block card">
            <img src="media/conference-3.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Conference Hall</h3>
            <p class="font-body font-light text-gray-dark">
              For events and conferences. Ideal for product launches and networking.
            </p>
          </a>

          <a href="preview.php?category=conference&item=1" class="block card">
            <img src="media/conference-2.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Events Space</h3>
            <p class="font-body font-light text-gray-dark">
              For hosting events and gatherings. Ideal for anniversaries, and corporate events.
            </p>
          </a>

          <a href="preview.php?category=conference&item=2" class="block card card--last">
            <img src="media/conference-1.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Meetings Room</h3>
            <p class="font-body font-light text-gray-dark">
              For small to medium-sized meetings and events. Ideal for team meetings.
            </p>
          </a>
        </div>
      </section>

      <!-- CATEGORY 2 -->
      <section class="bg-gray-light">
        <div class="section">
          <h2
            class="mb-10 text-center md:text-left text-3xl font-titles font-bold"
          >
            Offices for team work
          </h2>
          <div
            class="md:flex md:justify-between md:items-center md:gap-7 lg:gap-10"
          >
            <a href="preview.php?category=office&item=0" class="block card bg-lite">
              <img src="media/office-1.webp" alt="" width="240" />
              <h3 class="mb-3 text-lg md:text-xl font-subs">
                Coworking Space
              </h3>
              <p class="font-body font-light text-gray-dark">
                For freelancers and small teams. It's ideal for collaborative work and innovation.
              </p>
            </a>

            <a href="preview.php?category=office&item=1" class="block card bg-lite">
              <img src="media/office-3.webp" alt="" width="240" />
              <h3 class="mb-3 text-lg md:text-xl font-subs">
                Private Office
              </h3>
              <p class="font-body font-light text-gray-dark">
                For small teams, it's ideal for focused work, meetings, and client consultations.
              </p>
            </a>

            <a href="preview.php?category=office&item=2" class="block card card--last bg-lite">
              <img src="media/office-2.webp" alt="" width="240" />
              <h3 class="mb-3 text-lg md:text-xl font-subs">
                Shared Office
              </h3>
              <p class="font-body font-light text-gray-dark">
                For teams and entrepreneurs. Ideal for meetings and business presentations.
              </p>
            </a>
          </div>
        </div>
      </section>

      <!-- CATEGORY 3 -->
      <section class="section">
        <h2
          class="mb-10 text-center md:text-left text-3xl font-titles font-bold"
        >
          Education and training
        </h2>
        <div
          class="md:flex md:justify-between md:items-center md:gap-7 lg:gap-10"
        >
          <a href="preview.php?category=training&item=0" class="block card">
            <img src="media/training-1.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Training Room</h3>
            <p class="font-body font-light text-gray-dark">
              Perfect forworkshops and seminars. Ideal for teams training and building.
            </p>
          </a>

          <a href="preview.php?category=training&item=1" class="block card">
            <img src="media/training-3.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Classroom for Rent</h3>
            <p class="font-body font-light text-gray-dark">
              Perfect for lectures and workshops. Ideal for educational institutions.
            </p>
          </a>

          <a href="preview.php?category=training&item=2" class="block card card--last">
            <img src="media/training-2.webp" alt="" width="240" />
            <h3 class="mb-3 text-lg md:text-xl font-subs">Seminar Room</h3>
            <p class="font-body font-light text-gray-dark">
              Perfect for training. Host corporate events, and networking sessions.
            </p>
          </a>
        </div>
      </section>

      <section class="container px-10 lg:px-24 mx-auto">
        <div class="separator w-full"></div>
      </section>

      <section class="section md:pb-0" style="padding-bottom: 0 !important">
        <div class="md:flex md:justify-evenly md:items-start lg:items-center">
          <div class="md:w-2/4 pb-16 text-center md:text-left">
            <h2 class="mb-5 text-3xl font-titles font-extrabold">
              Get assessment today!
            </h2>
            <p class="mb-8 font-body font-light">
              Contact us to get a personalized assessment for your business needs and let us help you find the perfect solution.
            </p>
            <a href="contact.php"><button class="btn">Contact Us</button></a>
          </div>

          <img src="media/assessment.webp" alt="" class="mx-auto md:mx-0" />
        </div>
      </section>
    </main>

    <?php include_once 'includes/footer.php' ?>

    <script src="src/js/main.js"></script>
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/shoelace-autoloader.js"
    ></script>
  </body>
</html>
