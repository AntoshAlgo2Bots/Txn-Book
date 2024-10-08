




console.log("HEllor ");








const setDataToMemebershiptArea = () => {


    let getMemeberShipDataId = $("#membership_no").val()



    if (getMemeberShipDataId == " " || getMemeberShipDataId == null || getMemeberShipDataId == undefined) {


        alert("Pleasent enter a correct number ")
    } else {







        console.log(getMemeberShipDataId);





        let data = {
            getMemeberShipData: "getMemeberShipData",
            membershipNumber: getMemeberShipDataId
        }

        $.ajax({
            url: '../phpAJax/receiptAjax.php',
            method: 'GET',
            data: data,
            dataType: "JSON",
            success: function (response) {

                console.log(response);





                if (response.success) {


                    let data = response.data[0]
                    // console.log(data);

                    $("#receipt_no").val(data.receipt_no)
                    $("#payment_method").val(data.payment_method)
                    $("#membership_type").val(data.membership_type)
                    $("#year_of_membership").val(data.year_of_membership)
                    $("#one_time_enrollment_fee").val(data.one_time_enrollment_fee)
                    $("#yearly_charges").val(data.yearly_charges)
                    $("#receipt_no").val(data.receipt_no)
                    $("#share_allocated").val(data.share_allocated)
                    $("#total_amount").val(data.total_amount)
                    $("#next_amount_due").val(data.next_amount_due)
                    $("#date_amount_paid").val(data.date_amount_paid)
                    $("#utr_no").val(data.utr_no)
                    $("#transaction_date").val(data.transaction_date)
                    $("#balance").val(data.balance)
                    $("#status").val(data.status)
                            






                    let inputs = document.querySelectorAll("input")


                    inputs.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })
                    let selects = document.querySelectorAll("select")


                    selects.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })








                    console.log(data.receipt_no);



                    console.log();
                }

            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.error(error);
            }
        });

    }
}


const setDataToMemebershiptOnlyArea = () => {


    let getMemeberShipDataId = $("#membership_no").val()



    if (getMemeberShipDataId == " " || getMemeberShipDataId == null || getMemeberShipDataId == undefined) {


        alert("Pleasent enter a correct number ")
    } else {







        console.log(getMemeberShipDataId);











        let data = {
            getMemeberShipData: "getMemeberShipData",
            membershipNumber: getMemeberShipDataId
        }

        $.ajax({
            url: '../phpAJax/receiptAjax.php',
            method: 'GET',
            data: data,
            dataType: "JSON",
            success: function (response) {

                console.log(response);





                if (response.success) {


                    let data = response.data[0]
                    console.log(data);

                    $("#creation_date").val(data.creation_date)
                    $("#starting_fy").val(data.starting_fy)
                    $("#company_name").val(data.company_name)
                    $("#company_address").val(data.company_address)
                    $("#company_email_id").val(data.company_email_id)
                    $("#person_name").val(data.person_name)
                    $("#person_email_id").val(data.person_email_id)
                    $("#person_phone_no").val(data.person_phone_no)
                    $("#udayam_aadhar_card").val(data.udayam_aadhar_card)
                    $("#pan_no").val(data.pan_no)
                    $("#gst_no").val(data.gst_no)
                    
                    $("#receipt_no").val(data.receipt_no)
                    $("#payment_method").val(data.payment_method)
                    $("#membership_type").val(data.membership_type)
                    $("#year_of_membership").val(data.year_of_membership)
                    $("#one_time_enrollment_fee").val(data.one_time_enrollment_fee)
                    $("#yearly_charges").val(data.yearly_charges)
                    $("#receipt_no").val(data.receipt_no)
                    $("#share_allocated").val(data.share_allocated)
                    $("#total_amount").val(data.total_amount)
                    $("#next_amount_due").val(data.next_amount_due)
                    $("#date_amount_paid").val(data.date_amount_paid)
                    $("#utr_no").val(data.utr_no)
                    $("#transaction_date").val(data.transaction_date)
                    $("#balance").val(data.balance)
                    $("#status").val(data.status)
                            
                    






                    let inputs = document.querySelectorAll("input")


                    inputs.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })
                    let selects = document.querySelectorAll("select")


                    selects.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })








                    console.log(data.receipt_no);



               
               
                    console.log();
               

                    

               
                }


            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.error(error);
            }
        });

    }
}


const getReciptDataAttr = (event) => {


    let membershipType = $("#membership_type").val()


    console.log(membershipType);





    $.get("../phpAJax/receiptAjax.php", { getReciptAttr: "getReciptAttr", membershipType: membershipType }, function (data) {

        console.log(data);
        console.log(data.data[0]);
        let recData = data.data[0]

        $("#year_of_membership").val(recData.year_of_membership)
        $("#one_time_enrollment").val(recData.one_time_enrollment)
        $("#yearly_charges").val(recData.yearly_charges)
        $("#share_allocated").val(recData.share_allocated)
        $("#total_amount").val(recData.total_amount)










        console.log("hellor");

    }, "JSON")


}





const setDataToMemebershiptAreaByname = () => {


    let getMemeberShipDataId = $("#membership_name").val()



    if (getMemeberShipDataId == " " || getMemeberShipDataId == null || getMemeberShipDataId == undefined) {


        alert("Pleasent enter a correct number ")
    } else {







        console.log(getMemeberShipDataId);





        let data = {
            getMemeberShipDataByname: "getMemeberShipDataByname",
            membershipNumber: getMemeberShipDataId
        }


        console.log(data);



        $.ajax({
            url: '../phpAJax/receiptAjax.php',
            method: 'GET',
            data: data,
            dataType: "JSON",
            success: function (response) {

                console.log(response);





                if (response.success) {


                    let data = response.data[0]
                    console.log(data);

                    $("#receipt_no").val(data.receipt_no)
                    $("#payment_method").val(data.payment_method)
                    $("#membership_type").val(data.membership_type)
                    $("#year_of_membership").val(data.year_of_membership)
                    $("#one_time_enrollment_fee").val(data.one_time_enrollment_fee)
                    $("#yearly_charges").val(data.yearly_charges)
                    $("#receipt_no").val(data.receipt_no)
                    $("#share_allocated").val(data.share_allocated)
                    $("#total_amount").val(data.total_amount)
                    $("#next_amount_due").val(data.next_amount_due)
                    $("#date_amount_paid").val(data.date_amount_paid)
                    $("#utr_no").val(data.utr_no)
                    $("#transaction_date").val(data.transaction_date)
                    $("#balance").val(data.balance)
                    $("#status").val(data.status)
                            






                    let inputs = document.querySelectorAll("input")


                    inputs.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })
                    let selects = document.querySelectorAll("select")


                    selects.forEach(Element => {
                        $(Element).slideDown(1000)
                        Element.disabled = true
                    })








                    console.log(data.receipt_no);



                    console.log();
                }

            },
            error: function (xhr, status, error) {
                alert('Your form was not sent successfully.');
                console.log(error);
            }
        });

    }
}

