var sozler = [];



function GetQuotes() {
    return fetch("https://type.fit/api/quotes")
        .then(response => response.json())
        .then(data => {
            sozler = data;

            Change();
        })
}

function Change() {
    var count = sozler.length;
    var rndNumb = Math.floor(Math.random() * count);

    document.getElementById('text').innerText = sozler[rndNumb].text;
    document.getElementById('author').innerText = "-" + sozler[rndNumb].author;


}



GetQuotes();