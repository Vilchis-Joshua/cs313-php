function addItem(amount) {
    var price;
    var total = 0;
    var tableRow = document.getElementById(amount).firstElementChild.nextElementSibling;
    while (tableRow != null) {
        price = parseInt(tableRow.children[1].innerHTML.substr(1));
        if (pricea == null) {
            console.log("Not Working");
        } else {
            console.log(price);
        }
        total += tableRow.children[3].firstElementChild.value * price;
        tableRow = tableRow.nextElementSibling;
    }
    document.getElementById("total").innerHTML = total;
}