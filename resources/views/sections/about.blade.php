<section class="min-h-screen flex items-center justify-center px-8 py-16 bg-transparent mt-[100px]">
    <div class="flex flex-col md:flex-row gap-8 max-w-6xl w-full">
  
      {{-- Foto dengan border glow neon (1/3) --}}
      <div class="md:w-1/3 flex justify-center items-center">
        <div class="relative p-[6px] rounded-2xl">
  
          {{-- Glow layer dekat --}}
          <div class="absolute inset-0 rounded-2xl blur-sm opacity-100
                      bg-[conic-gradient(at_top_left,#ff0080,#7928ca,#2afadf,#ff0080)]
                      bg-[length:300%_300%] animate-glow">
          </div>
  
          {{-- Glow layer jauh --}}
          <div class="absolute inset-0 rounded-2xl blur-3xl opacity-70
                bg-[conic-gradient(at_top_left,#c4b5fd,#f9a8d4,#c4b5fd)]
                bg-[length:300%_300%] animate-glow"></div>
  
          {{-- Foto --}}
          <img src="{{ asset('images/mygw.jpg') }}" alt="Foto Profil"
               class="relative z-10 w-128 h-128 object-cover rounded-2xl shadow-lg border-4 border-transparent">
        </div>
      </div>
  
      {{-- Biodata (2/3) --}}
      <div class="md:w-2/3 flex flex-col justify-center">
        <h2 class="text-6xl font-bold mb-6 text-pink-400">About Me</h2>
        <p class="text-lg text-violet-400 leading-relaxed mb-4 text-justify">
            Nama sya Fara Daud Ibra, mahasiswa semester 7 yang sedang menempuh program studi Informatika di Universitas Teknologi Yogyakarta. Saya memiliki pengalaman menggunakan Python untuk proyek kuliah dan belajar mandiri, dengan fokus pada data science, yang membantu saya memahami analisis data dan berpikir logis dalam menyelesaikan masalah. Saat ini, saya sedang belajar Laravel secara intensif untuk memahami dasar-dasar PHP dan pengembangan aplikasi web menggunakan framework ini. Sebagai contoh, seluruh website ini dibuat menggunakan teknologi PHP, Laravel, dan Tailwind. Saya adalah pribadi yang tekun, cepat belajar, dan siap berkontribusi dalam pengembangan aplikasi web.
        </p>
        <div class="grid grid-cols-4 sm:grid-cols-6 gap-6 mt-6 text-5xl">
            <i class="devicon-python-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-laravel-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-php-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-react-original text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-typescript-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-mysql-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-pytorch-plain text-pink-400 hover:scale-110 transition-transform"></i>
            <i class="devicon-tailwindcss-plain text-pink-400 hover:scale-110 transition-transform"></i>
        </div>                
      </div>
  
    </div>
  </section>
  