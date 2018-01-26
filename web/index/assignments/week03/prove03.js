function addItem(table) {
    var price;
    var total = 0;
    var tableRow = document.getElementById(table).firstElementChild.firstElementChild.nextElementSibling;
    while (tableRow != null) {
        price = parseInt(tableRow.children[1].innerHTML.substr(1));
        console.log(price);
        total += tableRow.children[2].firstElementChild.value * price;
        tableRow = tableRow.nextElementSibling;
    }
    document.getElementById("result").innerHTML = total;
}


function createCookies() {
    var bacon = document.getElementsByName("bacon");
    console.log(bacon);
}