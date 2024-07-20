

var row = 1;
var summ = 0;
var validate_payment = document.getElementById("validate_payment");
validate_payment.addEventListener("click", displayDetails);
const sum = document.getElementById("sum");





function displayDetails() {
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;

    if(!name || !price) {
        alert("please fill all the boxes");
        return;
    }

    var display = document.getElementById("display");

    var newRow = display.insertRow(row);   

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);

    cell1.innerHTML = name;
    cell2.innerHTML = price;

    row++;

    summ += parseInt(price, 10);
    sum.innerHTML = summ + 1;


}

const $btnPrint = document.querySelector("#btn");
      $btnPrint.addEventListener("click", () => {
        window.print();
      });





