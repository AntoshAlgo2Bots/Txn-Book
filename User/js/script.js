









const getUSerDataByUserName = () => {

    let username = $("#user_name").val()



    console.log(username)



    data = {
        username: username
        , getUSerDataByUserName: "getUSerDataByUserName"
    }



    $.get("../phpAJax/userAjax.php", data, function (data) {
        console.log(data)



        if (data.success) {

            let userdata = data.data[0]


            $("#description").val(userdata.description)
            $("#emai_id").val(userdata.emai_id)
            $("#description").val(userdata.description)
            $("#mobile_no").val(userdata.mobile_no)
            $("#password").val(userdata.password)
            $("#password").val(userdata.password)
            $("#effective_from_date").val(userdata.effective_from_date)
            $("#effective_to_date").val(userdata.effective_to_date)
            $("#days").val(userdata.days)





            if (userdata.user_creation) {
                $("#user_creation").prop("checked", true)
            } else {
                $("#user_creation").prop("checked", false)
            }

            if (userdata.user_search) {
                $("#user_search").prop("checked", true)
            } else {
                $("#user_search").prop("checked", false)
            }

            if (userdata.user_report) {
                $("#user_report").prop("checked", true)
            } else {
                $("#user_report").prop("checked", false)
            }

            if (userdata.transaction_creation) {
                $("#transaction_creation").prop("checked", true)
            } else {
                $("#transaction_creation").prop("checked", false)
            }
            
            if (userdata.transaction_search) {
                $("#transaction_search").prop("checked", true)
            } else {
                $("#transaction_search").prop("checked", false)
 
            }
 
            if (userdata.transaction_report) {
                $("#transaction_report").prop("checked", true)
            } else {
                $("#transaction_report").prop("checked", false)
 
            }




















            // console.log(userdata.description)




            console.log(userdata)


        }









    }, "JSON").fail(error => {
        console.log(error)
    })


}