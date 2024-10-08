<?php
include("../db.php");



if ($_SERVER['REQUEST_METHOD'] == 'GET') {




    if (isset($_GET['getMemeberShipData'])) {



        $membership_id = $_GET['membershipNumber'];






        $sql = "SELECT * FROM membership_project.member_table a JOIN receipt_details b ON a.membership_no=b.member_id  where  a.membership_no = $membership_id;";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }


    if (isset($_GET['getMemeberShipDataByname'])) {



        $membership_id = $_GET['membershipNumber'];






        $sql = "SELECT * FROM membership_project.member_table a JOIN receipt_details b ON a.membership_no=b.member_id  where  a.company_name = '$membership_id';";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }

    if (isset($_GET['getAllUsersData'])) {



        $sql = "SELECT company_name FROM membership_project.member_table ";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }






    if (isset($_GET['getReciptAttr'])) {



        $membershipType = $_GET['membershipType'];



        $sql = "SELECT * FROM membership_project.financial_year_fees where membership_type=  '$membershipType' ;";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;



            }
            ;



            $response['success'] = true;
            $response['data'] = $data;




        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);



    }





    if (isset($_GET['updateSubmitData'])) {




        $rowIds = $_GET['checkedRowId'];




        foreach ($rowIds as $key => $value) {



            $sql = "UPDATE `membership_project`.`receipt_details` SET `recieipt_form_status` = 'SUBMIT' WHERE (`id` = '$value');";




            $result = mysqli_query($conn, $sql);

            if ($result) {

                $response['success'] = true;
                $response['message'] = "SUbmitted  success fully ";

            } else {
                $response["success"] = false;
                $response["message"] = mysqli_error($conn);

            }


            
            

            

        }

        

        
        
        
        
        
        
        
        
        echo json_encode($response);
        
        

        

        
        
        
        
        
    }




    



}




?>