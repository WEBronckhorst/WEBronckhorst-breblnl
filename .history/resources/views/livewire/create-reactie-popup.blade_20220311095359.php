<div x-data="{ open: false }">
    <button x-on:click=" open = !open" class=" bt-blauw">
        Reageer
    </button>
   <div x-show="open"@click.outside="open = false" @keyup.page-down="alert('Submitted!')""  class="fixed bottom-0 left-0 w-full "  >
       <div class="w-full max-w-3xl px-5 pt-10 pb-4 mx-auto bg-white border shadow-card rounded-t-xl ">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reprehenderit consequatur fugit vel itaque, saepe natus voluptas laudantium accusamus odio soluta vero corporis dignissimos fuga tempora harum, tempore, earum velit.
       </div>
   </div>
</div>
