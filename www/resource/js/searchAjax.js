
//inputの情報
const inputBox = document.getElementById('search-str');
const outputBox = document.getElementById('output');
const resultBox = document.getElementById('result');


const xhr = new XMLHttpRequest();
xhr.responseType = 'json';

//非同期検索のイベントハンドラーを検索窓に追加
//inputに文字が入力されたら発火する
inputBox.addEventListener('input', function() {

    //検索窓に文字が入っていないときは何も表示せずリターン
    if(!inputBox.value) {
        resultBox.textContent = "";
        return;
    }
    
    var searchStr = inputBox.value;
    var url = `https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid=5b47296bc37b329ddd7f0aaa8ec7cf97&freeword=${searchStr}`
    
    xhr.open('GET', url, true);
    xhr.send(null);

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                let resultList = xhr.response;
                outputResult(resultList);
            } else {
                outputBox.textContent = "FUCK";
            }
        } else {
            outputBox.textContent = "NOW LOADING";
        }
    }
}, false);



//===================================
// 関数名：outputResult
//-----------------------------------
// 引数  ：resultList  非同期検索の結果オブジェクト
// 戻り値：なし
//
// 検索結果表示の処理を行う実行関数
// 表示する店舗数をループで制御する
//====================================
let outputResult =(resultList) => {

    let outputHtml = getOutputHtml(resultList, 0);
    resultBox.innerHTML = outputHtml;

    for(let i = 1; i < 10; i++) {
        let outputHtml = getOutputHtml(resultList, i);
        resultBox.insertAdjacentHTML('beforeend', outputHtml);
    }
}


//===================================
// 関数名：getOutputHtml
//-----------------------------------
// 引数  ：resultList  非同期検索の結果オブジェクト
// 　　  ：count       ループカウンタ
// 戻り値：outputHtml　 出力するhtml
//
// 出力するhtml文を作成する
//====================================
let getOutputHtml = (resultList, count) => {
    let outputHtml = 
        `<div id="resultSet">
            <a class="name">${resultList.rest[count].name}</a>   
        </div>`;
    
    return outputHtml;
}