// =====================================================================
//  Shared UI behaviour: fullscreen menu toggle + hotspot debug view
// =====================================================================
(function () {
  // ---- Fullscreen menu -------------------------------------------------
  var toggle = document.querySelector('.nav-toggle');
  var menu   = document.querySelector('.menu');
  var close  = document.querySelector('.menu .close');

  function openMenu()  { if (menu) menu.classList.add('open'); document.body.style.overflow = 'hidden'; }
  function closeMenu() { if (menu) menu.classList.remove('open'); document.body.style.overflow = ''; }

  if (toggle) toggle.addEventListener('click', openMenu);
  if (close)  close.addEventListener('click', closeMenu);
  if (menu) {
    menu.addEventListener('click', function (e) {
      if (e.target === menu) closeMenu();          // 背景クリックで閉じる
    });
  }
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();

    // ---- Hotspot debug: 「h」キーで透明リンク領域を赤く可視化 ----------
    if (e.key === 'h' || e.key === 'H') {
      var t = e.target.tagName;
      if (t === 'INPUT' || t === 'TEXTAREA') return;
      document.querySelectorAll('.stage').forEach(function (s) {
        s.classList.toggle('debug');
      });
    }
  });

  // ---- WordPress 埋め込み用：親フレームへ高さを通知（自動リサイズ） ----
  function postH() {
    if (window.parent !== window) {
      try { parent.postMessage({ iiiLpHeight: document.documentElement.scrollHeight }, '*'); } catch (e) {}
    }
  }
  window.addEventListener('load', postH);
  window.addEventListener('resize', postH);
  [300, 900, 1800].forEach(function (d) { setTimeout(postH, d); });
})();
