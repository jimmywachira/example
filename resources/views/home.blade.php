<x-layout>
    <x-slot:heading class="text-center">
        Home page
    </x-slot:heading>

    <section class="px-4 py-6">
        <header class="max-w-4xl mt-5 text-center">
          <div class="max-w-lg mx-auto">
            <div >
              <h1 class="text-4xl mb-2">job <span class="text-blue-500">finds</span>
            </h1>
            <h2 class="mb-2">
              Connecting those who seek with those who have.
            </h2>
            
            </div>
          </div>
        </header>
      
        <main class="max-w-6xl mx-auto mt-4">
          <article class="rounded-xl">
            <div class="py-6 px-5 mb-4 flex">
                <div class="mr-8 flex-1 object-cover opacity-70">
                  <img class="rounded w-full" src="https://assets.laracasts.com/images/wallpapers/Lara-Matrix.jpeg" alt="">
                </div>
      
                <div class="flex-1  flex flex-col justify-between">
                    <header> 
                      <div class="space-x-2">
                        <a class="py-2 px-4 border border-blue-500 rounded-full  font-bold text-xs" href="/jobs">jobs</a>
                        <a class="py-2 px-4 border border-blue-500 rounded-full  text-xs font-bold" href="/about">about</a>
                      </div>
      
                      <div class="mt-4">
                        <h1 class="text-2xl">
                          a unique online platform 
                        </h1>
                 
                        <span class="mt-2 block text-black text-xs">published <time datetime="">1 day ago </time></span>
                      </div>
                    </header>
      
                    <div class="text-sm mt-2">
                      <p>
                      At RareFinds Marketplace, we believe that just because an item is no longer widely available doesn't mean it's gone forever.  
                    Our platform empowers individuals to share their treasures and helps others find the missing pieces they need. Join our community today and experience the satisfaction of finding – or helping someone else find – that truly rare gem.</p>
                    </div>
      
                    <footer class="justify-between items-center mt-6">
                      <div class="flex items-center space-x-4">
                        <img class="h-20 w-auto" src="https://assets.laracasts.com/images/mascot/larylab.svg" alt=""> 
                        <div class="mt-4">
                             <a href="/products" class="bg-blue-600 hover:bg-blue-700 py-2 px-6 rounded-fullshadow-lg"> Visit App Here
                              </a>
                        </div>
                      </div>
                    </footer>
                </div>
            </div>
          </article>
        </main>
      
        <?php #require "../views/partials/footer.php";?>
      </section>

</x-layout>