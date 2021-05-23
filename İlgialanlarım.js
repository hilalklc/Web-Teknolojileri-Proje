var quotes = [];



function GetQuotes() {
    return fetch("https://type.fit/api/quotes")
        .then(response => response.json())
        .then(data => {
            quotes = data;

            Change();
        })
}

function Change() {
    var count = quotes.length;
    var rndNumb = Math.floor(Math.random() * count);

    document.getElementById('text').innerText = quotes[rndNumb].text;
    document.getElementById('author').innerText = "-" + quotes[rndNumb].author;


}



GetQuotes();