<!doctype html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <?php require_once 'includes/head-meta.html' ?>
    <title>Complete Reservation | Tamasha Spaces</title>
    <?php include_once 'includes/head-links.html' ?>
  </head>

  <body class="flex flex-col w-full">
    <?php include_once 'includes/cart.html' ?>
    <?php include_once 'includes/header.html' ?>
    <?php include_once 'includes/modal.html' ?>

    <main class="w-full">
      <section class="section">
        <h1
          class="mb-7 md:mb-9 lg:mb-10 text-center md:text-left text-4xl font-titles font-extrabold"
        >
          Complete Reservation
        </h1>
        <div class="md:flex md:justify-between md:items-start lg:gap-20">
          <div class="md:w-[42%]">
            <div
              class="px-6 py-7 md:p-8 border border-gray-dark mb-11 text-center md:text-left"
            >
              <h3 class="mb-3 text-center md:text-left text-xl font-subs">
                Total
              </h3>
              <p
                class="text-center md:text-left text-4xl font-titles font-extrabold"
              >
                <span id="checkout-total">90000</span> KZT
              </p>
              <div class="separator w-full my-6"></div>

              <div
                class="flex justify-between items-center w-full mb-3 md:ml-0 mr-6 text-left"
              >
                <p class="font-body font-light">Calculated price</p>
                <p class="font-body font-light"><span id="checkout-subtotal">90000</span> KZT</p>
              </div>

              <div
                class="flex justify-between items-center w-full md:ml-0 mr-6 text-left"
              >
                <p class="font-body font-light">Taxes</p>
                <p class="font-body font-light">+ 10%</p>
              </div>
            </div>

            <div
              class="px-6 py-7 md:p-8 mb-11 text-center md:text-left bg-gray-light"
            >
              <h3 class="mb-4 text-xl font-subs">How does it work?</h3>
              <p class="font-body font-light">After filling our checkout form, one of our agents <strong>will send you an email</strong> containing all our <strong>legal registry and bank account</strong> data for proceeding.</p>
            </div>
          </div>

          <div
            class="w-full md:w-[52%] border border-gray-dark px-6 py-8 md:p-8 lg:px-10 lg:py-8"
          >
            <h3 class="mb-2 text-center md:text-left text-xl font-subs">
              Billing information
            </h3>
            <p class="mb-4 text-center md:text-left font-body font-light">
              Fields with an asterisk are required
              <span class="font-medium font-body text-accent">*</span>
            </p>
            <form id="form">
              <fieldset>
                <div class="w-full mb-4">
                  <label for="Name" class="form__label"
                    >Full name
                    <span class="font-bold text-accent">*</span></label
                  >
                  <input
                    name="Name"
                    type="text"
                    placeholder="Your name here"
                    required
                    class="form__field"
                  />
                </div>

                <div class="w-full mb-4">
                  <label for="Email" class="form__label"
                    >Your email
                    <span class="font-bold text-accent">*</span></label
                  >
                  <input
                    name="Email"
                    type="email"
                    placeholder="username@domain.com"
                    required
                    class="form__field"
                  />
                </div>

                <div class="w-full mb-6 md:mb-5">
                  <label for="method" class="form__label"
                    >Payment method
                    <span class="font-bold text-accent">*</span></label
                  >
                  <select
                    name="method"
                    id=""
                    required
                    class="form__field bg-lite"
                  >
                    <option value="">Local bank transfer</option>
                    <option value="">International transfer</option>
                  </select>
                </div>
                <div class="w-full mb-7">
                  <input type="checkbox" name="policy" required class="mr-1" />
                  <label for="policy" class="md:text-sm font-body font-light"
                    >I have accepted the
                    <a
                      href="#"
                      class="font-medium text-accent hover:text-gray-dark transition-colors duration-200"
                      >terms and conditions</a
                    >.</label
                  >
                </div>
                <input
                  type="submit"
                  value="Reserve Now"
                  class="btn w-full"
                />
              </fieldset>
            </form>
          </div>
        </div>
        <p
          class="mt-11 md:mt-8 lg:mt-14 text-sm text-justify md:text-left font-body font-light text-gray-dark"
        >
          By using our services, you agree to our terms and conditions. We
          reserve the right to change or update our privacy policy at any time.
          Please review our privacy policy for more information on how we
          protect your personal data.
        </p>
      </section>
    </main>

    <?php include_once 'includes/footer.php' ?>

    <script src="src/js/main.js"></script>
    <script src="src/js/checkout.js"></script>
    <script src="src/js/form.js"></script>
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/shoelace-autoloader.js"
    ></script>
  </body>
</html>
