<div class="absolute inset-0 -z-10 overflow-hidden">
    <svg
      class="pointer-events-none absolute h-full w-full"
      viewBox="0 0 1000 1000"
      preserveAspectRatio="none"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      {{-- 40 garis beam --}}
      @for ($i = 0; $i < 40; $i++)
        <path 
          d="M{{ -380 + ($i * 7) }} {{ -189 - ($i * 8) }}C{{ -380 + ($i * 7) }} {{ -189 - ($i * 8) }} {{ -312 + ($i * 7) }} {{ 216 - ($i * 8) }} {{ 152 + ($i * 7) }} {{ 343 - ($i * 8) }}C{{ 616 + ($i * 7) }} {{ 470 - ($i * 8) }} {{ 684 + ($i * 7) }} {{ 875 - ($i * 8) }} {{ 684 + ($i * 7) }} {{ 875 - ($i * 8) }}"
          class="stroke-[0.5] animate-beam"
          stroke="url(#beam-gradient)"
          stroke-opacity="{{ max(0.05, 0.5 - $i * 0.01) }}"
        />
      @endfor
  
      <defs>
        <linearGradient id="beam-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="#18CCFC" stop-opacity="0"/>
          <stop offset="20%" stop-color="#18CCFC"/>
          <stop offset="50%" stop-color="#6344F5"/>
          <stop offset="100%" stop-color="#AE48FF" stop-opacity="0"/>
        </linearGradient>
      </defs>
    </svg>
  </div>
  