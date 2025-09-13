<section class="relative min-h-screen text-center px-8 py-16 bg-white overflow-hidden">
    {{-- Background grid cerah --}}
    <div 
      class="absolute inset-0 
             [background-size:40px_40px] 
             [background-image:linear-gradient(to_right,#e4e4e7_1px,transparent_1px),linear-gradient(to_bottom,#e4e4e7_1px,transparent_1px)]">
    </div>

    {{-- Radial mask --}}
    <div class="pointer-events-none absolute inset-0 flex items-center justify-center 
                bg-white [mask-image:radial-gradient(ellipse_at_center,transparent_20%,black)]">
    </div>

    {{-- Konten projects --}}
    <div class="relative z-10">
      <h2 class="text-pink-500 text-6xl font-bold mb-12">My Projects</h2>
  
      <div class="grid place-items-center w-full max-w-6xl mx-auto">
        {{-- Project card --}}
        <div class="w-full max-w-md hover:scale-105 transition-transform">
          
          <a href="https://www.youtube.com/watch?v=HUmTp-ZhR68" target="_blank" rel="noopener noreferrer" class="block">
            {{-- Gambar dengan border gradient full rounded --}}
            <div class="p-[2px] rounded-xl bg-gradient-to-r from-pink-400 via-violet-400 to-indigo-400">
              <img src="https://img.youtube.com/vi/HUmTp-ZhR68/maxresdefault.jpg" 
                   alt="YouTube Project Thumbnail" 
                   class="w-full h-56 object-cover rounded-xl">
            </div>
        
            {{-- Judul & Deskripsi --}}
            <div class="p-4">
              <h3 class="text-xl font-semibold text-violet-600">
                Hamisfera Alpha - Rekomendasi Progresi Chord Gitar
              </h3>
            </div>
          </a>
        </div>
      </div>
    </div>
</section>