# タイトル：マッチングアプリ
複数の質問に答えることで登録されたユーザー同士の質問の回答一致数が確認可能なサイト。それによって自分にあった人とマッチングできる・・・かもしれない。
![image](https://user-images.githubusercontent.com/105050060/220828983-6cbe5115-ef10-42a2-a5a2-6155b38ab715.png)

## URL: https://arcane-ocean-35939.herokuapp.com

## 使用技術　
・PHP 8.2.0
・Laravel 8
・JAWSDB
・Heroku

## 構造
resources/views/home.blade.php = ホーム画面。未ログイン時はログインが、ログイン時はログアウトおよび登録情報編集ページと他のユーザー検索ページへと遷移可能。  
resources/views/user/edit.blade.php = 登録情報編集が可能なページ。edit_check.blade.phpは変更したい登録情報に間違いないか確認するための画面、edit_finish.blade.phpは登録情報の変更が完了したことを伝える画面。  
resources/views/user/search.blade.php = 他のユーザーを検索できる画面。検索条件も設定可能。  
resources/views/user/result.blade.php = 検索結果を表示する画面。自らが設定した回答一致数未満の相手の場合は対象外と表示される。  

database/migrations/2023_02_19_101109_add_column_to_users_table.php  = ユーザー情報のカラムの設定ファイル。app/Models/User.phpと連携。  
database/migrations/2023_02_19_102439_add_column_to_kaitou_table.php = 質問のカラムの設定ファイル。app/Models/Kaitou.phpと連携。  

tests/Feature/ExampleTest.php = テストプログラム。Featureの方。httpステータスコードが想定通りか、非ログイン時にログイン必須のページにアクセスしたときログイン画面に遷移されるか、POSTメソッドに対してGETメソッドを行ったとき弾かれるかの確認。  

app/Http/Controllers/ = 各種コントローラーが存在するが認証機能やDBからのデータの取得や検索・保存、ページの遷移等を担っている。加えて、ラジオボタンの形式そのままに質問の回答をDBに保存できないと思われるためデータを加工するためにKController.phpを作成。  

# ログインのためのアカウントはpaizaの方に掲載しています!
