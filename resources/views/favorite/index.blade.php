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
                    href="/contacts"
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
                    <span
                    class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"
                  ></span>
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
              <div class="container px-6 mx-auto grid">
            
                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg">

                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="border-b-2 border-gray-300 h-10 px-5 w-full text-sm focus:outline-none"
                          type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                            width="512px" height="512px">
                            <path
                              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                          </svg>
                        </button>
                      </div>
                    
                  <div class="w-full overflow-x-auto">
                      
                    <table class="w-full whitespace-no-wrap mt-5">
                      <thead>
                        <tr
                          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                          <th class="px-4 py-3">Name</th>
                          <th class="px-4 py-3"></th>
                          <th class="px-4 py-3"></th>
                          <th class="px-4 py-3"></th>
                        </tr>
                      </thead>
                      <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                      >

                    @foreach ($contacts as $contact)

                    
                        <tr class="text-gray-700 dark:text-gray-400">
                          
                            <td class="px-4 py-3">
                              <a href="/contacts/{{ $contact->id }}">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div
                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                >
                                <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="{{ asset('storage/' .$contact->profilephoto) }}"
                                    alt=""
                                    loading="lazy"
                                />
                                <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                ></div>
                                </div>
                                <div>
                                <p class="font-semibold">{{ $contact->firstname }} {{ $contact->lastname }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $contact->email }}
                                </p>
                                </div>
                            </div>
                              </a>
                            </td>
                          
                            <td class="px-4 py-3 text-sm">

                              @if ($contact->favorite == '1')
                                  <span><i class="fa-solid fa-heart"></i></span>
                              @else
                                <span><i class="fa-regular fa-heart"></i></span>
                              @endif
                            
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="/contacts/{{ $contact->id }}/edit">Edit</a>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="#">Delete</a>
                            </td>
                            
                        </tr>
               
                    @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
      </body>
</html>