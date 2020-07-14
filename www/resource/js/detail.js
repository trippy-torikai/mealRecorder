
//=============================
//      メイン画像切り替え
//-----------------------------
// ユーザーのカーソル選択に合わせて
//   メイン画像の切り替えを行う
//=============================

//変数宣言
let mainPicture;    //メイン画像要素
let pictures;       //サブ画像格納用配列

//各要素の取得
mainPicture = document.getElementById('main-picture');
pictures = document.querySelectorAll('.sub-picture img');

//サブ画像にイベントリスナーを設置
pictures.forEach(picture => {
    picture.addEventListener('mouseover', function() {

        //カーソルの乗ったサブ画像をメイン画像に配置する
        //選択されたサブ画像はCSSを修正し透過
        //また一連の機能を実行する前に全ての透過をリセットする
        resetFocus();
        this.style.opacity = '0.4';
        mainPicture.src = picture.src;
    })
})

//透過のリセットを行う関数
function resetFocus() {
    pictures.forEach(picture => {
        picture.style.opacity = '1';
    })
}




