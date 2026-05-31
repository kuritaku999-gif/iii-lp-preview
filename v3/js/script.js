/* ===================================================================
   iii-iii.com LP v3
   ▼▼▼ リンク先はこの { } の中だけ書き換えればOK ▼▼▼
   ・URLを変えたいときは "" の中を書き換えるだけ
   ・"" (空) のままにしておくと、そのリンクは無効（押しても動かない）
   =================================================================== */
var LINKS = {
  /* --- ヘッダー / モバイルメニュー --- */
  header_project: "https://iii-iii.com/project/",
  header_theory:  "https://iii-iii.com/i-theory/",
  header_about:   "https://yuma-muranushi.jp/",
  header_news:    "https://iii-iii.com/i.media/",
  header_contact: "https://line.me/R/ti/p/@082qgqqf",

  /* --- サイドバー / ユニバース 01〜06 --- */
  nav_common:   "https://iii-iii.com/i.media/",
  nav_theory:   "https://iii-iii.com/i-theory/",
  nav_praxis:   "https://iii-iii.com/grid/",
  nav_ipeace:   "https://iii-iii.com/i.peace/",
  nav_projecti: "https://iii-iii.com/organization/",
  nav_social:   "",                                   /* ★未定 */

  /* --- ヒーロー（ロゴ / ENTER THE UNIVERSE） --- */
  enter: "https://iii-iii.com/",

  /* --- 中間セクション THEORY / PRAXIS --- */
  mid_theory: "https://iii-iii.com/i-theory/",
  mid_praxis: "https://iii-iii.com/grid/",

  /* --- PICKUP カード 01〜06 --- */
  card_theory:     "https://iii-iii.com/i-theory/",
  card_peaceman:   "https://peace-man.space",
  card_maaaru:     "https://maaaru.org",
  card_iiiproject: "https://utage-system.com/p/ahvsB4JoN9vL",
  card_vasileus:   "",                                /* ★未定 */
  card_homodimes:  "https://iii-iii.com/homodimes",

  /* --- 下部バンド（横長の帯） --- */
  band_ipeace:   "https://iii-iii.com/i.peace/",
  band_bigi:     "https://iii-iii.com/project/",
  band_projecti: "https://iii-iii.com/organization/",
  band_social:   "",                                  /* ★未定 */

  /* --- フッター --- */
  foot_home:        "https://iii-iii.com/",
  foot_project:     "https://iii-iii.com/project/",
  foot_theory:      "https://iii-iii.com/i-theory/",
  foot_about:       "https://yuma-muranushi.jp/",
  foot_media:       "https://iii-iii.com/i.media/",
  foot_partnership: "",                               /* ★未定 */
  foot_privacy:     "",                               /* ★未定 */

  /* --- SNS --- */
  sns_youtube:   "https://www.youtube.com/@PEACE-PEACE-PEACE-PEACE",
  sns_x:         "",                                  /* ★未定 */
  sns_instagram: "https://www.instagram.com/muranushing",
  sns_facebook:  ""                                   /* ★未定 */
};
/* ▲▲▲ 書き換えるのはここまで ▲▲▲ */


(function () {
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
