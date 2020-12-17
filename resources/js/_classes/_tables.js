var tables = document.querySelector('.table');
var td     = document.querySelectorAll('.table td');
var th     = document.querySelectorAll('.table th');

for(var i = 0; i < td.length; i++) {
    tables.style.color       = tables.dataset.color;
    td[i].style.borderBottom = `1px solid ${tables.dataset.color}`;
    th[i].style.borderBottom = `1px solid ${tables.dataset.color}`;
}