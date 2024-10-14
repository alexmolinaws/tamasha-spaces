<!doctype html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <?php require_once 'includes/head-meta.html' ?>
    <title>Contact Us | Tamasha Spaces</title>
    <?php include_once 'includes/head-links.html' ?>
  </head>

  <body class="flex flex-col w-full">
    <?php include_once 'includes/cart.html' ?>
    <?php include_once 'includes/header.html' ?>
    <?php include_once 'includes/modal.html' ?>

    <main class="w-full">
      <section class="pages-hero">
        <h1 class="mb-7 text-4xl font-titles font-extrabold">Contact Us</h1>
      </section>

      <section class="section">
        <div class="md:flex md:justify-between md:items-start lg:gap-20">
          <div class="md:w-[42%]">
            <div
              class="hidden md:block px-6 py-7 md:p-8 mb-11 text-center md:text-left bg-gray-light"
            >
              <h3 class="mb-3 text-xl font-subs">Get in touch</h3>
              <p class="mb-5 font-body font-light">
                Contact us via email or visit our office for a more personal touch.
              </p>

              <div
                class="flex justify-start items-center mb-3 ml-[11vw] md:ml-0 mr-6 text-left"
              >
                <i class="bx bxs-envelope mr-3 text-2xl text-gray-dark"></i>
                <p class="font-body font-light">biznes@tamasha.kz</p>
              </div>

              <div
                class="flex justify-start items-center ml-[11vw] md:ml-0 mr-6 text-left"
              >
                <i class="bx bxs-map mr-3 text-2xl text-gray-dark"></i>
                <p class="font-body font-light">Almaty, Kazakhstan</p>
              </div>
            </div>

            <!-- SOCIALS CTA -->
            <div class="hidden md:block">
              <h3 class="mb-4 text-xl font-subs">Follow us</h3>
              <div class="lg:flex lg:justify-start lg:items-center">
                <div
                  class="flex justify-start items-center w-full lg:w-auto mb-3 lg:mb-0 mr-7 text-left"
                >
                  <i
                    class="bx bxl-instagram-alt mr-3 text-2xl text-gray-dark"
                  ></i>
                  <p class="font-body font-light">
                    Instagram
                    <span class="lg:hidden ml-1 font-medium"
                      >(@tamasha_kz)</span
                    >
                  </p>
                </div>

                <div
                  class="flex justify-start items-center w-full lg:w-auto mb-3 lg:mb-0 mr-7 text-left"
                >
                  <i
                    class="bx bxl-facebook-square mr-3 text-2xl text-gray-dark"
                  ></i>
                  <p class="font-body font-light">
                    Facebook
                    <span class="lg:hidden ml-1 font-medium"
                      >(Tamasha Spaces)</span
                    >
                  </p>
                </div>

                <div
                  class="flex justify-start items-center w-full lg:w-auto lg:mb-0 text-left"
                >
                  <i
                    class="bx bxl-linkedin-square mr-3 text-2xl text-gray-dark"
                  ></i>
                  <p class="font-body font-light">
                    LinkedIn
                    <span class="lg:hidden ml-1 font-medium"
                      >(Tamasha Spaces)</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="w-full md:w-[52%] border border-gray-dark px-6 py-8 md:p-8 lg:px-10 lg:py-8"
          >
            <h3 class="mb-4 text-center text-xl font-subs">
              Send us a message
            </h3>
            <form id="form">
              <fieldset>
                <div class="w-full mb-4">
                  <label for="Name" class="form__label">Full name</label>
                  <input
                    name="Name"
                    type="text"
                    placeholder="Your name here"
                    required
                    class="form__field"
                  />
                </div>

                <div class="w-full mb-4">
                  <label for="Email" class="form__label">Your email</label>
                  <input
                    name="Email"
                    type="email"
                    placeholder="username@domain.com"
                    required
                    class="form__field"
                  />
                </div>

                <div class="w-full">
                  <label for="Message" class="form__label">Your message</label>
                  <textarea
                    name="Message"
                    rows="4"
                    placeholder="How can we help you?"
                    required
                    class="form__field mb-7"
                  ></textarea>
                  <input type="submit" value="Send Now" class="btn w-full" />
                </div>
              </fieldset>
            </form>
          </div>

          <div
            class="block md:hidden px-6 py-7 md:p-8 mt-11 text-center md:text-left bg-gray-light"
          >
            <h3 class="mb-3 text-xl font-subs">Get in touch</h3>
            <p class="mb-5 font-body font-light">
              Contact us via email or visit our office for a more personal touch.
            </p>

            <div
              class="flex justify-start items-center mb-3 ml-[11vw] md:ml-0 mr-6 text-left"
            >
              <i class="bx bxs-envelope mr-3 text-2xl text-gray-dark"></i>
              <p class="font-body font-light">biznes@tamasha.kz</p>
            </div>

            <div
              class="flex justify-start items-center ml-[11vw] md:ml-0 mr-6 text-left"
            >
              <i class="bx bxs-map mr-3 text-2xl text-gray-dark"></i>
              <p class="font-body font-light">Almaty, Kazakhstan</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include_once 'includes/footer.php' ?>

    <script src="src/js/main.js"></script>
    <script src="src/js/form.js"></script>
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/shoelace-autoloader.js"
    ></script>
  </body>
</html>
