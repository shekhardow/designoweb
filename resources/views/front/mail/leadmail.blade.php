<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>

<body>
    <h1>Contact Details</h1>
    <table style="border:1px solid black">
        <thead>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Contact No</th>
        </thead>
        <tbody>
            <td><?php echo !empty($contact_details->first_name)?ucfirst($contact_details->first_name.$contact_details->last_name) :"" ?></td>
            <td><?php echo !empty($contact_details->company_name)?$contact_details->company_name:"" ?></td>
            <td><?php echo !empty($contact_details->work_email)?$contact_details->work_email:"" ?></td>
            <td><?php echo !empty($contact_details->contact_no)?$contact_details->contact_no:"" ?></td>
        </tbody>
    </table>
    <h1>Preferable Skilks</h1>
    <table style="border:1px solid black">
        <thead>
            <th>Technology Name</th>
            <th>Image</th>
        </thead>
        <?php if(($skillinfo->isNotEmpty())){ foreach ($skillinfo as $value) { ?>
            <tbody>
                <td><?php echo !empty($value->name)?$value->name:"" ?></td>
                <td><img src="<?php echo url('public/front/images/scalie/').'/'.$value->image_url; ?>" alt="Icon" class="img-fluid"></td>
            </tbody>
        <?php } } ?>
        <?php if(!empty($otherskillsinfo)){ foreach ($otherskillsinfo as $otherskills) { ?>
            <tbody>
                <td><?php echo !empty($otherskills->other_tech)?$otherskills->other_tech:"" ?></td>
                <td><?php echo !empty($otherskills->image_url)?url('public/front/images/scalie/').'/'.$otherskills->image_url:"" ?></td>
            </tbody>
        <?php } } ?>
    </table>
</body>

</html>