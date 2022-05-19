<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>  
    <script src="https://kit.fontawesome.com/159af6db37.js" crossorigin="anonymous"></script>
</head>
  <body>
    <body>
        <div
          class="flex h-screen bg-gray-50 dark:bg-gray-900"
          :class="{ 'overflow-hidden': isSideMenuOpen }"
        >
          <!-- Desktop sidebar -->
          <aside
            class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
          >
            <div class="py-4 text-gray-500 dark:text-gray-400">
              <a
                class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                href="#"
              >
                Revendo
              </a>
              <ul class="mt-6">
                <div class="px-6 my-6">
                    <a href="/contacts/create"
                      class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                      <span class="ml-2" aria-hidden="true">+</span>
                      Add contact
                </a>
                  </div>
                <li class="relative px-6 py-3">
                  <span
                    class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"
                  ></span>
                  <a
                    class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="/"
                  >
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                      ></path>
                    </svg>
                    <span class="ml-4">All Contacts</span>
                  </a>
                </li>
              </ul>
              <ul>
                <li class="relative px-6 py-3">
                  <a
                    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="/favorite"
                  >
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span class="ml-4">My Favorite</span>
                  </a>
                </li>
              </ul>
            </div>
          </aside>
          </aside>
          <div class="flex flex-col flex-1 w-full">
            <main class="h-full overflow-y-auto">
              {{ $slot }}
            </main>
          </div>
        </div>
      </body>
</html>
<script type="text/javascript">


   $('.close').click(function() {
    return confirm('Are You Sure ?')
  });


  $(document).ready(function() {
    $('#addNumber').on('click', function() {
      var html='<div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phonenumber[]" name="phonenumber[]" value=""></div> <div class="form-group mb-6"> <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="label[]" name="label[]" value=""> </div> <div class="form-group mb-6 text-right"> <a href="#">Delete</a> </div>';
      $('#apending-div').append(html);
      html.attr('id', 'phonenumber');
    })
  })

  $(document).on('click', '#remove', function() {
    $(this).closest($('first')).remove();
  })

  $('.close').click(function() {
  return confirm('Are You Sure ?')
});

$(document).ready(function() {
    $('#addNumber').on('click', function() {
      var html='<div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phonenumber[]" name="phonenumber[]" value=""></div> <div class="form-group mb-6"> <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="label[]" name="label[]" value=""> </div> <div class="form-group mb-6 text-right"> <a href="#">Delete</a> </div>';
      $('#apending-div').append(html);
    });

    $('#addNumber').on('click', function() {
      var html='<div class="form-group mb-6"><input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phonenumber[]" name="phonenumber[]" value=""></div> <div class="form-group mb-6"> <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="label[]" name="label[]" value=""> </div> <div class="form-group mb-6 text-right"> <a href="#">Delete</a> </div>';
      $('#apending-div').append(html);
      html.attr('id', 'phonenumber');
    });

    $(document).on('click', '#remove', function() {
      $(this).closest($('#first')).remove();
    });

    


  })

  
</script>