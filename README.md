# プロダクトのタイトル
卒制プロトタイプ作成
## プロダクトの紹介
勉強をサポートする卒制に向けたプロトタイプ作り

## 工夫した点，こだわった点
・今回はノート作成のホーム画面とノートの編集画面からノートの名前を変更できるようにした。
・初めて、htmlでダイアログ画面を作成した。
## 苦戦した点，共有したいハマりポイントなど
・いまいちajaxの使い方がわからない。特にデータの受け取り方が。。ajax通信自体はコンソールで「success」と表示されるため、どうもできているようだが、データが送れていない。nullになっているため、おそらくphpのほうの受け取り方が間違っているのかもしれない。
・if文での、ｓｑｌにあるか、ないかなどの条件分岐が最初苦戦した。今回はsessionを使ったが、すごく便利。
・UIの観点から、deleteを押したときに、ダイアログで本当に消去しますか？はいで送信まではできたが、id値の指定方法が本当に難しく、今回は断念。<br>
同じボタンが複数あり、クラス名は同一にしているため、querySelectorAll("クラス名")で最初ボタン要素を取得していたが、classだと配列ではなく、nodelistに格納されるため、addEventlistenerが効かなかった。「...」で全要素取得の配列に変更してみたが、今度はそこから、押されたボタンのid名の取得ができずに、困った。繰り返し処理の変数iの値をid値に持っていこうかともしたが、それだと、最初のみ上手くいき、そのID値を持つノートが消去され、id値がそもそもなくなると、iとのズレで、挙動がおかしくなったので、断念。<br>

https://masatoshisondoda.github.io/phpkadai3/
