<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <!-- component -->
    <div
      class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-12"
    >
      <div
        class="relative bg-white px-6 pt-10 pb-9 shadow-xl mx-auto w-full max-w-lg rounded-2xl"
      >
        <div class="mx-auto flex w-full max-w-md flex-col space-y-16">
          <div
            class="flex flex-col items-center justify-center text-center space-y-2"
          >
            <div class="font-semibold text-3xl">
              <p>Email Verification</p>
            </div>
            <div class="flex flex-row text-sm font-medium text-gray-400">
              <p>We have sent a code to your phone number</p>
            </div>
          </div>

          <div>
            <form action="" method="post">
              <div class="flex flex-col space-y-16">
                <div
                  class="flex flex-row items-center justify-between mx-auto w-full max-w-xs"
                >
                  <div class="w-16 h-16">
                    <input
                      required
                      class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-rose-500"
                      type="text"
                      name=""
                      id=""
                    />
                  </div>
                  <div class="w-16 h-16">
                    <input
                      required
                      class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-rose-500"
                      type="text"
                      name=""
                      id=""
                    />
                  </div>
                  <div class="w-16 h-16">
                    <input
                      required
                      class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-rose-500"
                      type="text"
                      name=""
                      id=""
                    />
                  </div>
                  <div class="w-16 h-16">
                    <input
                      required
                      class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-rose-500"
                      type="text"
                      name=""
                      id=""
                    />
                  </div>
                </div>

                <div class="flex flex-col space-y-5">
                  <div>
                    <button
                    type="submit"
                    class="block w-full max-w-xs mx-auto bg-rose-500 hover:bg-rose-700 focus:bg-rose-700 text-white rounded-lg px-3 py-3 font-semibold"
                  >
                    Verify Account
                  </button>
                  </div>

                  <div
                    class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-gray-500"
                  >
                    <p>Didn't recieve code?</p>
                    <a
                      class="flex flex-row items-center text-blue-600"
                      href="/"
                      target="_blank"
                      rel="noopener noreferrer"
                      >Resend</a
                    >
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
