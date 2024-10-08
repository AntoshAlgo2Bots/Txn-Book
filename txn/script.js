
function verifyAnswer() {


    let select_amt = document.getElementById('select_amt')
    var result = select_amt.options[select_amt.selectedIndex].text;


    console.log(result)

    if (result == "Credit") {
        document.getElementById('credit_amt_field').disabled = false;
        document.getElementById('credit_amt_field').placeholder = "Enter Your Credit Amount";
        document.getElementById('debit_amt_field').disabled = true;
        document.getElementById('debit_amt_field').placeholder = "";
    } else {
        document.getElementById('credit_amt_field').disabled = true;
        document.getElementById('debit_amt_field').disabled = false;
    }

    if (result == "Debit") {
        document.getElementById('debit_amt_field').disabled = false;
        document.getElementById('debit_amt_field').placeholder = "Enter Your Debit Amount";
        document.getElementById('credit_amt_field').disabled = true;
        document.getElementById('credit_amt_field').placeholder = "";
    } else {
        document.getElementById('credit_amt_field').disabled = false;
    }


}


$(document).ready(function () {
    $('#myForm').submit(function (event) {
        event.preventDefault();
        var form = document.getElementById('myForm');
        var formData = new FormData(form);

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                alert('Your form has been sent successfully.');
            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.error(error);
            }
        });
        var form = document.getElementById('myForm').reset();
    });
});






const getCheckedRowData = () => {

    let tbody = $("#rowAreaTbody")[0]

    let rows = tbody.querySelectorAll("tr")




    let chekedRow = []
    let rowIdToSubmit = []


    rows.forEach(row => {


        let checkbox = row.querySelector("input[type='checkbox']")


        if (checkbox.checked) {


            chekedRow.push(row)


            let line_id = checkbox.getAttribute("line-id")

            rowIdToSubmit.push(parseInt(line_id))


        }






        // data['recordIds']  = rowIdToSubmit  
        // data['recordIds']  = rowIdToSubmit  







    });


    let data = {

        recordIds: rowIdToSubmit,
        rowIdToSubmit: "rowIdToSubmit"

    };


    $.get("../phpAjax/txnAjaxData.php", data, function (data) {



        console.log(data);

        alert(data.message)


        rows.forEach(row => {

            let checkbox = row.querySelector("input[type='checkbox']")


            if (checkbox.checked) {



                checkbox.disabled = true;
                $(checkbox).slideToggle(2000)

                checkbox.checked = false
                
            }





        })



        console.log("jdfiej");

    }, "json").fail(error => {
        console.log(error);
    })




    // console.log(chekedRow);
    console.log(rowIdToSubmit);



    // console.log(rows);









}