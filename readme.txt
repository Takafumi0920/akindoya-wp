
＊ヘッダーナビの設定方法
表示したいページを固定ページで作成→管理画面の外観のメニュー→新しいメニュを作成でメニュの位置をトップページナビ→表示したい固定ページをメニューに追加→追加した固定ページの▼からcss classをnav-textに指定（css classは表示オプションを開きcssオプションにチェック）

＊お問い合わせページの作り方
固定ページ新規作成。タイトルは「お問い合わせ」→右サイドメニューのテンプレート属性をcontactに指定→プラグイン「contact form7」をインストールし、管理画面のお問い合わせからコンタクトフォームの新規作成→フォームタグから以下を貼り付け

<div class="form__wrap template02">
<div class="form__row row-name">
  <p class="form__label is-required"><label for="your-name">お名前</label></p>
  <p class="form__body">[text* your-name id:your-name placeholder "お名前"]</p>
</div>
<div class="form__row row-tel">
  <p class="form__label is-required"><label for="tel">電話番号</label></p>
  <p class="form__body">[tel* tel id:tel placeholder "03-1234-1234"]</p>
</div>
<div class="form__row row-email">
  <p class="form__label is-required"><label for="email">メールアドレス</label></p>
  <p class="form__body">[email* email id:email placeholder "sample@sample.com"]</p>
</div>

<div class="form__row row-select">
  <p class="form__label"><label for="select">件名</label></p>
  <p class="form__body"><span class="select-wrap">[select select id:select default:0 "選択してください" "商品について" "出店イベントについて" "その他"]</span></p>
</div>
<div class="form__row row-message">
  <p class="form__label is-required"><label for="message">お問い合わせ内容</label></p>
  <p class="form__body">[textarea* message id:message placeholder "お問い合わせ内容"]</p>
</div>
<div class="form__row row-privacy">
  <p class="form__body">[acceptance acceptance] <a href="#privacy_url" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>に同意する [/acceptance]</p>
</div>
<div class="form__row row-submit">
  <div class="submit-btn">[submit id:submit "送信"]<div class="submit-bg"></div></div>
</div>
</div>

あとはメールタグ等で任意の設定をする（送信動作確認）

＊商品一覧ページの作り方
固定ページ新規作成。タイトルは「商品一覧」→右サイドメニューのテンプレート属性をitemに指定→管理画面の外観のカスタマイズの商品一覧設定から、商品名、価格、写真を選択

＊トップページのじゃがバターとメロンソフトの画像設定
管理画面の外観のカスタマイズのトップコラム画像設定から画像を選択。なお、テキストの一部にリンクが設置できる。じゃがバターのリンク先はトップページ下の方にある「あきんど屋出店情報」のリンクと同じ。パーマリンク設定を「基本」のままにしているとボタンのリンクが機能しないことがある。

＊トップページ下部の３連ボタンのリンク設定
管理画面の外観のカスタマイズのトップページボタン設定から作成済みの固定ページをリンク先として選択可能。

＊スマホサイズ時の右に出てくる縦３連ボタンのリンク設定
管理画面の外観のカスタマイズのレスポンシブボタン設定から作成済みの固定ページをリンク先として選択可能。

＊フッターSNSボタンのリンク設定
管理画面の外観のカスタマイズのSNSリンクボタン設定から任意のURLをリンク先として入力可能。

＊フッター
外観→メニューから新しいメニューを作成（名前は任意）
フッターでの表示場所を選択し、固定ページをメニューに追加。ここはcssのclassを指定しなくて大丈夫


＊トップページ
固定ページを新規作成。タイトル「トップページ」とする→管理画面設定から表示設定でフロントページの表示を「固定ページ」選択。ホームページで「トップページ」選択

＊投稿一覧ページ
固定ページ作成。任意のタイトル（ブログ）を設定。ページ設定はデフォルトのまま→管理画面設定から表示設定でフロントページの表示を「固定ページ」選択。投稿ページで「先ほど設定した固定ページ名（ブログ）」選択
※作成したページはページ属性の親を「トップページ」に指定してください。



