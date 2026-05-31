# WordPress 設置ガイド（iii LP / Z = D + iD）

このLPは **「自動リサイズiframe方式」** でWordPressに設置します。
テーマのCSSと干渉せず、固定ページに貼るだけ。高さは自動でぴったり合います。
（iframe埋め込み時はヘッダーを通常配置に、追従サイドバーは自動で非表示に切り替わります）

---

## ■ かんたん設置（コピペするだけ）

1. WP管理画面 → **固定ページ → 新規追加**
2. ブロック追加で **「カスタムHTML」** を選ぶ
3. 下のコードを貼り付け
4. **公開**

### 貼り付けコード（GitHub Pages版／今すぐ使えます）

```html
<iframe id="iiiLp"
  src="https://kuritaku999-gif.github.io/iii-lp-preview/v3/"
  style="width:100%;border:0;display:block;overflow:hidden"
  scrolling="no" loading="lazy"></iframe>
<script>
window.addEventListener('message', function (e) {
  if (e.data && e.data.iiiLpHeight) {
    document.getElementById('iiiLp').style.height = e.data.iiiLpHeight + 'px';
  }
});
</script>
```

> 全幅で見せたい場合は、ページ属性で **「全幅／フルワイド」テンプレート** を選ぶか、
> テーマ側でコンテンツ幅の制限を外してください。

---

## ■ 自社サーバー（ConoHa WING）に置く場合 ＝ 本番おすすめ

GitHubに依存せず、同一ドメインで堅牢に動きます。

1. `iii-lp-v3.zip` を解凍 → 中の `v3` フォルダを **サーバーにアップロード**
   例：`/public_html/lp/iii/`（＝ `https://お客様ドメイン/lp/iii/`）
2. 上の貼り付けコードの `src` を自社URLに変更：

```html
  src="https://お客様ドメイン/lp/iii/"
```

3. 残りは同じ。固定ページのカスタムHTMLに貼って公開。

---

## ■ リンク先の変更について

LP内の全リンクは **`js/script.js` の冒頭 `LINKS = { }`** をまとめて書き換えるだけで変更できます。
未定の項目（VASILEUS / SOCIAL / SNS一部など）は空 `""` のままにすると、押しても動かない無効リンクになります。
（自社サーバー設置の場合は、アップロードした `v3/js/script.js` を編集してください）

---

## ■ 構成ファイル
- `index.html` … LP本体
- `css/style.css` … デザイン
- `js/script.js` … リンク設定＋動作＋高さ通知
- `images/` … 画像一式
