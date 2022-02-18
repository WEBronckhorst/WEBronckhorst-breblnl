<div class="">
<a href="{{ route('faq.show',  $faq->id) }}" class="flex justify-between px-3 py-5 space-x-2 text-xl border-b hover:bg-slate-100 text-slate-500 hover:text-blauw-hover ">
    <div class="pl-6 ">
        <div class="font-semibold text-blauw">
            <span>{{ $faq->title }}</span>
        </div>
        <div class="flex justify-start text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
              </svg><span>{{ $faq->Category->title }}</span>
        </div>
        <p class="mt-1 text-sm line-clamp-2">{{ $faq->description }}</p>
    </div>
    <div class="flex justify-center pt-8 w-104">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
    </div>
</a>

</div>
