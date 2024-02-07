<!-- モーダルトリガーボタン -->
<button type="button" class="admin-button__detail" data-toggle="modal" data-target="#myModal">
  選択した項目を表示
</button>

<!-- モーダル -->
<div id="myModal" class="modal fade" role="dialog">

  <!-- モーダルのコンテンツ -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/window.css') }}" />
</head>

<body>
    <header>
        <div class="modal-close">
        <!-- 右上の閉じるボタン（×） -->
        <button type="button" class="modal-close" data-dismiss="modal">&times;</button>
        </div>
    </header>

    <main>
    <h4 class="modal-title">選択した項目</h4>
     <div class="modal-table">
          <table class="modal-table__inner">
            <tr class="modal-table__row">
              <th class="modal-table__header">姓</th>
              <td class="modal-table__text">山田
            　</td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">名</th>
              <td class="modal-table__text">
                太郎
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">性別</th>
              <td class="modal-table__text">
                男性
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">メールアドレス</th>
              <td class="modal-table__text">
                test@example.com
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">電話番号</th>
              <td class="modal-table__text">
                09012345678
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">住所</th>
              <td class="modal-table__text">
                東京都千駄ヶ谷1-2-5
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">建物名</th>
              <td class="modal-table__text">
                千駄ヶ谷マンション101
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">お問い合わせの種類</th>
              <td class="modal-table__text">
                その他
              </td>
            </tr>
            <tr class="modal-table__row">
              <th class="modal-table__header">お問い合わせ内容</th>
              <td class="modal-table__text">
                テスト
              </td>
            </tr>
          </table>
        </div>
      <div class="modal-button">
        <button type="button" class="modal__button-submit" data-dismiss="modal">削除</button>
      </div>
    </div>
</main>
</body>
</html>