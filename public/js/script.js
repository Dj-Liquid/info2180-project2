function myFunction(propFilter) {

    var input, fil, tab, trx, td, cell, i, j;
    fil = propFilter;
    tab = document.getElementById("example");
    trx = tab.getElementsByTagName("trx");
    for (i = 1; i < trx.length; i++) {
        trx[i].style.display = "none";
        const tdArray = trx[i].getElementsByTagName("td");
        for (var j = 0; j < tdArray.length; j++) {
            const cellValue = tdArray[j];
            if (cellValue && cellValue.innerHTML.toLowerCase().indexOf(fil) > -1) {
                trx[i].style.display = "";
                break;
            }
        }
    }
}

$('#all').on('click', function () {
    myFunction('')
});
$('#sales').on('click', function () {
    myFunction('sales lead')
});
$('#support').on('click', function () {
    myFunction('support')
});
$('#assign').on('click', function () {
    myFunction('assign')
});

