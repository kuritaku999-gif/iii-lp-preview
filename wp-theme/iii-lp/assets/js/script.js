/* ===================================================================
   iii-iii.com LP（WordPressテーマ版）
   リンク先は WordPress「外観 → カスタマイズ → iii LP 設定」で編集します。
   （functions.php が var LINKS を自動で出力します）
   =================================================================== */
window.LINKS = window.LINKS || {};

(function () {
  /* --- iframe埋め込み（WordPress等）検出：固定ヘッダー/サイドバーを埋め込み用に調整 --- */
  if (window.self !== window.top) {
    document.body.classList.add("is-embedded");
  }

  /* --- リンクを適用 --- */
  document.querySelectorAll("[data-link]").forEach(function (el) {
    var url = LINKS[el.getAttribute("data-link")];
    if (url && url.trim() !== "") {
      el.setAttribute("href", url);
      el.classList.remove("is-disabled");
    } else {
      // 未定リンクは押しても動かないようにする
      el.setAttribute("href", "#");
      el.classList.add("is-disabled");
      el.addEventListener("click", function (e) { e.preventDefault(); });
    }
  });

  /* --- モバイルドロワー --- */
  var burger = document.getElementById("hamburger");
  var drawer = document.getElementById("drawer");
  var backdrop = document.getElementById("drawerBackdrop");

  function setDrawer(open) {
    burger.classList.toggle("is-open", open);
    drawer.classList.toggle("is-open", open);
    backdrop.classList.toggle("is-open", open);
    burger.setAttribute("aria-expanded", open ? "true" : "false");
    drawer.setAttribute("aria-hidden", open ? "false" : "true");
    document.body.style.overflow = open ? "hidden" : "";
  }
  if (burger) {
    burger.addEventListener("click", function () {
      setDrawer(!drawer.classList.contains("is-open"));
    });
    backdrop.addEventListener("click", function () { setDrawer(false); });
    drawer.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () { setDrawer(false); });
    });
    window.addEventListener("keydown", function (e) {
      if (e.key === "Escape") setDrawer(false);
    });
  }

  /* --- サイドバー開閉（デスクトップ） --- */
  var sidebar = document.getElementById("sidebar");
  var sideToggle = document.getElementById("sideToggle");
  if (sideToggle && sidebar) {
    sideToggle.addEventListener("click", function () {
      var closed = sidebar.classList.toggle("is-closed");
      sideToggle.setAttribute("aria-expanded", closed ? "false" : "true");
    });
  }

  /* --- WordPress iframe 自動リサイズ（親へ高さ通知） --- */
  function postHeight() {
    if (window.parent !== window) {
      window.parent.postMessage({ iiiLpHeight: document.body.scrollHeight }, "*");
    }
  }
  window.addEventListener("load", postHeight);
  window.addEventListener("resize", postHeight);
  if (window.ResizeObserver) new ResizeObserver(postHeight).observe(document.body);
})();
