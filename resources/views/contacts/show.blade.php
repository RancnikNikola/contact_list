<x-layout>
  <div class="mt-10 ml-5">
      <span>
          <a href="/">
            <i class="fa-solid fa-arrow-left"></i>
          </a>
      </span>
  </div>
  <div class="mt-10 ml-10">
    
  <div class="flex">
      <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full ring-4 ring-gray-300" 
           src="{{ asset('storage/'.$contact->profilephoto) }}" 
           alt="">
      <div class="mt-4 sm:mx-4 sm:mt-0">
          <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white">{{ $contact->firstname}} {{ $contact->lastname }}</h1>
          
          @if ($contact->favorite == '1')
              <span><i class="fa-solid fa-heart"></i></span>
          @else
              <span><i class="fa-regular fa-heart"></i></span>
          @endif
      </div>
      <div class="mt-4 text-right w-3/6">
          <a href="/contacts/{{ $contact->id }}/edit" class="border border-gray-700 px-6 py-2 rounded-xl">Edit</a>
      </div>
  </div>

  <h3 class="mt-5">Email address</h3>
  <p class="mt-2 text-gray-500 dark:text-gray-300">{{ $contact->email }}.</p>

  <h3 class="mt-5">Numbers</h3>
  
  <div class="mt-5">
      <ul class="rounded-md border border-gray-200 w-9/12 text-gray-900">
        
        @foreach ($contact->phones as $phone)
          <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">+{{ $phone->name }}  {{ $phone->label }}</li><p></p>
        @endforeach
      
      </ul>
  </div>
</x-layout>