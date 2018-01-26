function problem1(v, age) {
    if (v.search(/\d+/g) >= 0) {
        if (v >= 0 && v < 119) {
            document.getElementsByClassName(age)[0].style.visibility = 'hidden';
        }
        else
            document.getElementsByClassName(age)[0].style.visibility = 'visible';
    }
    else {
        document.getElementsByClassName(age)[0].style.visibility = 'visible';
    }
}


function problem2(value1, ssn) {
    Number(ssn);
    if (value1.search(/\d{3}-\d{2}-\d{4}$/g) == 0) {
        document.getElementsByClassName(ssn)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(ssn)[0].style.visibility = 'visible';
    }
}


function problem3(value1, ccNumber) {
    Number(ccNumber);
    if (value1.search(/\d{4}\s?\d{4}\s?\d{4}\s?\d{4}$/g) == 0) {
        document.getElementsByClassName(ccNumber)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(ccNumber)[0].style.visibility = 'visible';
    }
}

function problem4(value1, date) {
    if (value1.search(/^(0?[1-9]|10|11|12)\/([0-2]?[1-9]|10|20|30|31)\/\d{4}$/g) == 0) {
        var year = Number(value1.substr(value1.search(/\d{4}/g), 4));
        if (year >= 1753 && year <= 2100) {
            document.getElementsByClassName(date)[0].style.visibility = 'hidden';
        }
        else
            document.getElementsByClassName(date)[0].style.visibility = 'visible';
    }
    else {
        document.getElementsByClassName(date)[0].style.visibility = 'visible';
    }
}

function problem5(value, abb) {
    if (value.search(/^[A-Z]{2}$/) == 0) {
        document.getElementsByClassName(abb)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(abb)[0].style.visibility = 'visible';
    }
}

function PhoneNumber(value, pNumber) {
    if (value.search(/^\d{3}-?\d{3}-?\d{4}$/) == 0) {

        document.getElementsByClassName(pNumber)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(pNumber)[0].style.visibility = 'visible';
    }
}

function problem6(value, damount) {
    if (value.search(/(^\$?[0-9]?\+?\,?[0-9]?\+?\.?[0-9]+)$/) == 0) {
        document.getElementsByClassName(damount)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(damount)[0].style.visibility = 'visible';
    }
}

function nameValidation(value, name) {
    if (value.search(/^[a-zA-Z]+$/g) == 0) {
        document.getElementsByClassName(name)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(name)[0].style.visibility = 'visible';
    }
}

function onBuyPage() {
    alert("Congratulations on the wise decision~");
}


function upTheCase() {
    var change = document.getElementById("Case");
    change.value = change.value.toUpperCase();
}


function elementReset() {
    alert("Please try again");
}

function reset() {
    alert("Please re-enter the form. But more gentlemen-like")
}


function problemZipCode(value, zip) {
    if (value.search(/^\d{5}$/) == 0) {

        document.getElementsByClassName(zip)[0].style.visibility = 'hidden';
    }
    else {
        document.getElementsByClassName(zip)[0].style.visibility = 'visible';
    }
}


function getQuantity(table) {
    //var quantity = document.getElementById(quantity).value;
    //var adding = document.getElementById("result");
    //parseInt(adding.innerHTML) + x;
    var price;
    var total = 0;
    var tableRow = document.getElementById(table).firstElementChild.firstElementChild.nextElementSibling;
    while (tableRow != null) {
        price = parseInt(tableRow.children[1].innerHTML.substr(1));
        conso
        total += tableRow.children[2].firstElementChild.value * price;
        tableRow = tableRow.nextElementSibling;
    }
    document.getElementById("result").innerHTML = total;
}