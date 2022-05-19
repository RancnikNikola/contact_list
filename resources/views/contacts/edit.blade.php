<x-layout>
              <div class="md:grid md:grid-cols-3 md:gap-6">
               
                <div class="mt-5 md:mt-0 md:col-span-2">
                   <form action="/contacts/{{ $contact->id }}" method="POST">
                                @method('DELETE')
  
                                @csrf
                              
                              <td class="px-4 py-3 text-sm">
                                  <button type="submit" onclick="return confirm('Are you sure you want to Delete?');" id="deleteBtn" name="deleteBtn" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                              </td>
                      </form>

                  <form action="/contacts/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                      
                        <div class="mb-6 mt-6">
                          <label class="block text-sm font-medium text-gray-700">
                              Photo
                            </label>
                            <input type="file" id="profilephoto" name="profilephoto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <img src="{{ asset($contact->profilephoto) }}" alt="" class="rounded-xl ml-6" width="100" />

                        </div>
                          <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                              <div class="h-full w-full text-gray-300">
                                {{-- <img src="{{ asset('storage/' . $contact->profilephoto) }}" alt="" class="rounded-xl ml-6" width="100"> --}}
                              </div>
                            </span>
                            <button type="submit" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                              Save
                            </button>
                            <a type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/contacts">
                                Cancel
                            </a>
                             
                          </div>
                          <div class="mb-6 mt-6">
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full name</label>
                            <input value="{{ old('fullname', $contact->firstname . ' ' . $contact->lastname ) }}" type="text" id="fullname" name="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          </div>
                          <div class="mb-6 mt-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                            <input value="{{ old('email', $contact->email) }}" type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          </div>
                          <div class="mb-6 mt-6">
                            <label for="favorite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Add to favorite contacts?</label>
                            <input id="favorite" name="favorite" type="checkbox" value="{{ $contact->favorite }}"
                            {{ old('favorite', $contact->favorite) == $contact->favorite ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          </div>
                          <h3>Numbers</h3>

                          @foreach ($contact->phones as $phone)
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
                               focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                               id="phonenumber[]" 
                               name="phonenumber[]" 
                               {{-- value="+{{ old('phonenumber', $phone->phonenumber) }}" --}}
                               >
                               
                               
                              </div>
                              <div id="first" class="form-group mb-6">
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
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                                  id="label[]" 
                                  name="label[]" 
                                  {{-- value="{{ old('label', $phone->label) }}" --}}
                                  >
                              </div>
                            <div class="form-group mb-6 text-right">
                                <button id="remove">Delete</button>
                            </div>
                          </div>
                          @endforeach
                          
                          <div class="flex space-x-2">
                            <button id="addNumber" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Add number</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>               
              </div>
</x-layout>