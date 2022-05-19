<x-layout>
              <div class="container px-6 mx-auto grid">
            
                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg">

                    <div class="pt-2 relative mx-auto text-gray-600">
                      <form method="GET" action="/">
                        <input class="border-b-2 border-gray-300 h-10 px-5 w-full text-sm focus:outline-none"
                          type="search" name="search" id="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                          Search
                        </button>
                      </form>
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

                            <form action="/contacts/{{ $contact->id }}" method="POST">
                              @method('DELETE')

                              @csrf
                              
                            
                            <td class="px-4 py-3 text-sm">
                                <button onclick="return confirm('Are you sure you want to Delete?');" id="deleteBtn" name="deleteBtn" type="submit">Delete</button>
                            </td>
                            </form>
                            
                        </tr>
               
                    @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </x-layout>