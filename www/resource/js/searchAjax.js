
//inputの情報
const inputBox = document.getElementById('search-str');
const outputBox = document.getElementById('output');

const xhr = new XMLHttpRequest();
xhr.responseType = 'json';

//イベントハンドラー追加
//inputに文字が入力されたら発火する
inputBox.addEventListener('input', function() {
    
    var searchStr = inputBox.value;
    var url = `https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid=&name=${searchStr}`
    
    xhr.open('GET', url, true);
    xhr.send(null);

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4) {
            if(xhr.status === 200) {
                outputBox.textContent = xhr.response.rest[0].name;
            } else {
                outputBox.textContent = "FUCK";
            }
        } else {
            outputBox.textContent = "NOW LOADING";
        }
    }
}, false);