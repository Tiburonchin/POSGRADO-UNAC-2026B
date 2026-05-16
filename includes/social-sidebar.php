<?php
$baseUrl = $baseUrl ?? './';
?>
<aside class="social-sidebar fixed right-6 top-1/2 z-[60] -translate-y-1/2 hidden lg:flex flex-col gap-4" id="social-sidebar">
    <div class="social-sidebar-inner flex flex-col gap-4 p-2 rounded-full bg-white/5 backdrop-blur-md border border-white/10">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-link group relative flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 hover:bg-unac-blue" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f text-xl text-white/70 group-hover:text-white group-hover:scale-110 transition-transform"></i>
            <span class="absolute right-full mr-4 px-3 py-1 rounded bg-unac-blue text-white text-xs font-semibold opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all">Facebook</span>
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-link group relative flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 hover:bg-gradient-to-tr hover:from-yellow-400 hover:to-purple-600" aria-label="Instagram">
            <i class="fa-brands fa-instagram text-xl text-white/70 group-hover:text-white group-hover:scale-110 transition-transform"></i>
            <span class="absolute right-full mr-4 px-3 py-1 rounded bg-purple-600 text-white text-xs font-semibold opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all">Instagram</span>
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-link group relative flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 hover:bg-[#0077b5]" aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin-in text-xl text-white/70 group-hover:text-white group-hover:scale-110 transition-transform"></i>
            <span class="absolute right-full mr-4 px-3 py-1 rounded bg-[#0077b5] text-white text-xs font-semibold opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all">LinkedIn</span>
        </a>
        <a href="https://wa.me/51999999999" target="_blank" rel="noopener noreferrer" class="social-link group relative flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 hover:bg-[#25d366]" id="whatsapp-link" aria-label="WhatsApp">
            <i class="fa-brands fa-whatsapp text-xl text-white/70 group-hover:text-white group-hover:scale-110 transition-transform"></i>
            <span class="absolute right-full mr-4 px-3 py-1 rounded bg-[#25d366] text-white text-xs font-semibold opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all">WhatsApp</span>
        </a>
        <button type="button" class="theme-toggle-btn group relative flex items-center justify-center w-12 h-12 rounded-full transition-all duration-300 hover:bg-unac-yellow border-2 border-white/10 hover:border-unac-yellow" id="theme-toggle-sidebar" aria-label="Cambiar tema">
            <i class="fa-solid fa-moon text-xl text-white/70 group-hover:text-bg-base transition-all"></i>
            <span class="absolute right-full mr-4 px-3 py-1 rounded bg-unac-yellow text-bg-base text-xs font-semibold opacity-0 -translate-x-4 pointer-events-none group-hover:opacity-100 group-hover:translate-x-0 transition-all">Cambiar Tema</span>
        </button>
    </div>
</aside>
