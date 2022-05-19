<x-layout>
              <div class="md:grid md:grid-cols-3 md:gap-6">
               
                <div class="mt-5 md:mt-0 md:col-span-2">



                  <form action="/" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            
                        <div>
                         
                          
                          <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                              <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                              </svg>
                            </span>
                            <button type="submit" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Save
                            </button>
                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancel
                              </button>
                              <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Delete
                              </button>
                          </div>
                          <div class="mb-6 mt-6">
                            <label class="block text-sm font-medium text-gray-700">
                                Photo
                              </label>
                              <input type="file" id="profilephoto" name="profilephoto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
                          <div class="mb-6 mt-6">
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full name</label>
                            <input type="text" id="fullname" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          </div>
                          <div class="mb-6 mt-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          </div>

                          <div class="mb-6 mt-6">
                            <label for="favorite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add to favorite contacts?</label>
                            <input id="favorite" name="favorite" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          </div>



                          <h3>Numbers</h3>
                          
                          <div id="apending-div" class="grid grid-cols-3 gap-4 mt-6">

                         
                            <div class="form-group mb-6">
                             <input type="text" class="form-control
                             block
                             w-full
                             px-3
                             py-1.5
                             text-base
                             font-normal
                             text-gray-700
                             bg-white bg-clip-padding
                             border border-solid border-gray-300
                             rounded
                             transition
                             ease-in-out
                             m-0
                             focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="phonenumber[]" name="phonenumber[]">
                            </div>
                            <div class="form-group mb-6">
                              <input type="text" class="form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="label[]" name="label[]">
                            </div>
                          <div class="form-group mb-6 text-right">
                              <button id="remove">Delete</button>
                          </div>
                        </div>
                        
                      <x-add-number-btn />

                        </div>
            
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>               
              </div>
</x-layout>
           