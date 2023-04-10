<!DOCTYPE html>
<html>

<head>
    <style>
        body {
          font-family: sans-serif;
        }
        a {
          color: #3787e3;
        }
        .container {
          max-width: 700px;
          margin: 50px 0;
          padding: 50px;
          padding: 0px;
          border-radius: 10px;
          border: 1px solid #0003;
          border: none;
        }
        .activate-btn {
          padding: 12px 16px;
          background-color: #3787e3;
          border-radius: 6px;
          text-decoration: none;
          color: #fff;
        }
        .ii a[href] {
          color: white !important;
        }
        .passengersListItem{
            padding: 20px 0px;
            /*border-bottom: 1px solid #ccc;*/
            float: left;
            width: 100%;
        }
        .passengersListItem:last-child{
            border-bottom: none;
        }
        .passengersListItem .detailHeading{
            margin-bottom: 20px;
            float: left;
            width: 100%;
            color: #333;
            color:  #feca02;
        }
        .passengersListItem p{
            margin-top: 0;
            margin-bottom: 15px;
            color: #333;
            font-size: 15px;
        }
        .passengersListItem p:last-child{
            margin-bottom: 0;
        }
        .boxs{
            width: 100%;
            float: left;
        }
        .passengersLists{
            margin-bottom: 30px;
        }
        .passengersListItem p b{
            
        }
        .passengerListTable{
            padding-bottom: 30px;
        }
        .passengerListTable table{
            border-collapse: collapse;
            border-spacing: 0;
        }
        .passengerListTable th,
        .passengerListTable td{
            text-align: left;
            border: 1px solid #ddd;
            padding: 5px 10px;
            font-size: 14px;
            color: #333;
        }
        .footer {
          margin-top: 40px;
        }
        .footer p {
          margin: 0 0 2px;
          text-align: center;
          font-size: 12px;
        }
        .regardsSection span{
            font-size: 14px;
            color: #333;
        }
        body{
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div>
          <!-- <img src="" height="50" /> -->
        </div>

        <p style="margin-top: 10px">Hello,</p>
        <p style="margin-top: 10px"><?php echo $message; ?></p>
    
        <div class="passengerListTable boxs">
            <span style="margin-bottom: 20px; color: #333" class="boxs"><b>Client Details:</b></span>
            <table class="" style="width: 100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Budget</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo !empty($name) ? @$name : '-'; ?></td>
                        <td><?php echo !empty($phone) ? @$phone : '-'; ?></td>
                        <td><?php echo !empty($budget) ? @$budget : '-'; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <p style="margin-top: 50px" class="regardsSection">
            <span class="boxs" style="margin-bottom: 5px">Regards,</span>
            <span><?php echo !empty($name) ? @$name : '-'; ?> <br /></span>
        </p>
    
    </div>
</body>

</html>