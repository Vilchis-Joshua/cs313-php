function addItem(amount) {
    var price;
    var total = 0;
    var tableRow = document.getElementById(table).firstElementChild.firstElementChild.nextElementSibling;
    while (tableRow != null) {
        price = parseInt(tableRow.children[1].innerHTML.substr(1));
        total += tableRow.children[2].firstElementChild.value * price;
        tableRow = tableRow.nextElementSibling;
    }
    document.getElementById("total").innerHTML = total;
}

function caclulateTotal() {

}