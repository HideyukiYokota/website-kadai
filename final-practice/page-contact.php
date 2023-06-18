<?php get_header("2"); ?>
    <article>
      <div class="top-Carou">
        <img src="image/contact/mainContact.png" alt="" width="100%" />
      </div>
      <div class="sp-Carou">
        <img src="image/contact/mainSPContact.png" alt="" width="100%" />
      </div>
      <div class="pankuz">
        <p>
          <a href="">ホーム</a>
          > <a href="">ご予約・お問い合わせ</a>
        </p>
      </div>
      <section class="toiawase-main">
        <div class="toiawase">
          <p>お電話でのご予約・お問い合わせ</p>
          <p>※ 2営業日以内にご返信いたします。</p>
          <p>住友不動産秋葉原駅前ビル 5F</p>
        </div>
        <div class="toiawase">
          <p>ご予約・問い合わせフォーム</p>
          <p>※ 2営業日以内にご返信いたします。</p>
        </div>
      </section>
      <!-- <form class="contact" action="confirmation.html" method="post"> -->

      <!-- STATIC FORMSのフォームタグ -->
      <!-- <form
                        action="https://api.staticforms.xyz/submit"
                        method="post"
                    > -->
      <form id="form" action="https://api.staticforms.xyz/submit" method="post" >
        <input type="text" name="honeypot" style="display: none" />
        <!-- STATIC FORMSのアクセスキー -->
        <input
          type="hidden"
          name="accessKey"
          value="18ee4d99-9279-4384-a175-a3125dde65ce"
        />
        <!--メールのタイトル-->
        <input type="hidden" name="subject" value="お問い合わせフォーム" />
        <!--送信先のメールアドレスをvalueに設定する-->
        <input type="hidden" name="replyTo" value="juza.de.nube@gmail.com" />
        <!--redirectToのURLは公開後ののURLへリンクする-->
        <input
          type="hidden"
          name="redirectTo"
          value="<?php echo home_url(); ?>/confirmation/"
        />

        <table>
          <tr>
            <td>氏名(必須)</td>
            <td>
              <input type="text" name="name" placeholder="侍 太郎" />
            </td>
          </tr>
          <tr>
            <td>フリガナ(必須)</td>
            <td>
              <input
                type="text"
                name="$hurigana"
                placeholder="サムライ　タロウ"
              />
            </td>
          </tr>
          <tr>
            <td>電話番号(必須)</td>
            <td>
              <input type="text" name="phone" placeholder="0312345678" />
            </td>
          </tr>
          <tr>
            <td>メールアドレス(必須) <span>半角英文字</span>:</td>
            <td>
              <input type="text" name="$email" placeholder="abc@example.com" />
            </td>
          </tr>
          <tr>
            <td>ご予約希望日</td>
            <td>
              <input
                type="text"
                name="$kiboubi"
                placeholder="例）2023年3月1日"
              />
            </td>
          </tr>

          <tr>
            <td>お悩み（必須）</td>
            <td>
              <select name="$onayami">
                <option value="1">お悩みを選択してください</option>
                <option value="2">腰痛・肩こり</option>
                <option value="3">冷え性・だるさ</option>
                <option value="4">冷え性・だるさ</option>
                <option value="5">骨盤・背骨矯正</option>
                <option value="6">骨折・打撲・捻挫・脱臼</option>
                <option value="7">スポーツ診療</option>
                <option value="8">その他</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>お問い合わせ内容</td>
            <td>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="できるだけ詳しいお問い合わせ内容を記入ください"
              ></textarea>
            </td>
          </tr>
        </table>
        <input class="sub" type="submit" value="送信" />
      </form>
    </article>
    <?php get_footer();?>