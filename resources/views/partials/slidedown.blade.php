<style>
    @keyframes moveUpDown {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px);
  }
}
.animate {
  animation: moveUpDown 2s ease-in-out infinite; /* Mengatur durasi, timing function, dan iterasi */
}
</style>

<div class="text-center mt-5">
    <img class="animate" src="icon/Move Down.png" alt="move down" height="50">
    <p style="color: #ffffffbb;" class="mt-3">Slide down</p>
</div>