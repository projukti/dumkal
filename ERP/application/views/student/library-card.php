<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Card Print</title>
    <style>
        html, body {padding: 0; margin: 0; font-family: Arial,sans-serif;}
        .page {height: 297mm; width: 210mm; padding: 7mm}
        .page, .page * {-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;}

        .card {border: 1mm solid darkblue; width: 94mm; height: 90mm; padding: 1mm; margin-right: 4mm; display: table; float: left; margin-bottom: 4mm; position: relative}
        .card {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e4efc0+0,6cc93a+100 */
            background: #e4efc0 url(img/bg.png); /* Old browsers */
            background: url(img/bg.png), -moz-linear-gradient(135deg,  #e4efc0 30%, #6cc93a 100%); /* FF3.6-15 */
            background: url(img/bg.png), -webkit-linear-gradient(135deg,  #e4efc0 30%,#6cc93a 100%); /* Chrome10-25,Safari5.1-6 */
            background: url(img/bg.png), linear-gradient(135deg,  #e4efc0 30%,#6cc93a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e4efc0', endColorstr='#6cc93a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .card:nth-child(2n) {margin-right: 0}

        .student-id {font-weight: bold; font-size: 11px; color: blue; position: absolute; top: 1mm; left: 1mm}
        .logo {float: right; width: 50px; position: absolute; right: 1mm; top: 1mm}
        .institute {text-align: center; font-size: 16px; font-weight: bold; padding-left: 13mm; margin-top: -0.5mm; color: blue}
        .photo {border: 1mm solid darkblue; width: 26mm; height: 28mm; position: absolute; top: 6mm; left: 1mm; display: table}
        .card-type {text-align: center; font-size: 16px; font-weight: bold; color: white; background: maroon; margin-left: 29mm; width: 46mm; padding: 1mm}
        .card:nth-child(2n) .card-type {background: blue}
        .year {margin-left: 29mm; margin-top: 2mm; width: 20mm; color: blue; font-size: 12px; font-weight: bold;}
        .roll {margin-left: 49mm; margin-top: -3.5mm; width: 20mm; color: maroon; font-size: 12px; font-weight: bold;}
        .course {margin-left: 29mm; margin-top: 1mm; width: 50mm; color: maroon; font-size: 14px; font-weight: bold;}
        .subjects {margin-left: 29mm; margin-top: 1mm; width: 50mm; color: maroon; font-size: 12px; font-weight: bold;}
        table {clear: both; font-size: 12px; margin-top: 2mm; color: blue}
        table tr > td:nth-child(2) {font-weight: bold; color: darkblue}
        table tr:first-child > td:last-child {color: red}
        .barcode {position: absolute; padding: 2mm; background: white; top: 50mm; right: 1mm;}
        .date-issue {font-size: 12px; font-weight: bold; margin-top: 1mm; color: maroon}
        .date-valid {font-size: 12px; font-weight: bold; margin-top: -3.8mm; margin-left: 46mm; color: maroon}
        .sig-cont {width: 100%; margin-top: 2mm; position: relative; display: table}
        .sig-cont .sig-box-right {width: 45%; float: right; text-align: center}
        .sig-cont .sig-box-left {width: 45%; float: left; text-align: center}
        .sig-cont .img {width: 80%; height: 12mm; background: transparent; border-bottom: 1px solid black; background-size: contain; display: inline-block}
        .sig-cont .sig-box-right .sig-type {font-size: 11px; font-weight: bold; color: blue}
        .sig-cont .sig-box-left .sig-type {font-size: 11px; font-weight: bold; color: maroon}
    </style>
</head>
<body>
<div class="page">
<?php foreach($profile as $card) { 
$stream = $this->db->query('SELECT * FROM td_student_stream WHERE stream_id ='.$card['stream'])->result_array();
    ?>
    <div class="card">

        <img src="<?php echo base_url();?>assets/employee/img/logo.png" alt="" class="logo">
        <div class="student-id">Student ID <?php echo $card['student_id'];?></div>
        <div class="institute">
            Dumkal College, Basantapur<br>Dumkal, Murshidabad
        </div>
        <img <?php if($card['student_image'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $card['student_image'];?>" <?php } ?> class="photo">
        <!-- <img src="img/passport-sample.jpg" alt="" class="photo"> -->
        <div class="card-type">Library Lending Card</div>
        <div class="year"><?php echo $card['year'];?><?php if($card['year'] == 1) echo 'st'; elseif($card['year'] == 1) echo 'nd'; else echo 'rd';?> Year</div>
        <div class="roll">Roll No <?php echo $card['roll'];?></div>
        <div class="course"><?php echo $stream[0]['stream_name'];?></div>
        <div class="subjects"><?php echo $card['subject1'];?> &nbsp;&nbsp;&nbsp; <?php echo $card['subject2'];?> &nbsp;&nbsp;&nbsp; <?php echo $card['subject3'];?></div>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $card['name'];?></td>
            </tr>
            <tr>
                <td>S/O</td>
                <td><?php echo $card['father_name'];?></td>
            </tr>
            <tr>
                <td>Vill</td>
                <td><?php echo $card['vill'];?></td>
            </tr>
            <tr>
                <td>P.O.</td>
                <td><?php echo $card['po'];?></td>
            </tr>
            <tr>
                <td>P.S.</td>
                <td><?php echo $card['ps'];?></td>
            </tr>
            <tr>
                <td>Dist.</td>
                <td><?php echo $card['dist'];?></td>
            </tr>
        </table>


        <img src="<?php echo base_url();?>index.php/main/show_barcode/<?php echo $card['student_id'];?>" alt="" class="barcode">
        <div class="date-issue">Date of Issue: <?php echo date('m-d-Y');?></div>
        <div class="date-valid">Valid Upto: 30-Jun-2016</div>
        <div class="sig-cont">
            <div class="sig-box-right">
                <div class="img" style="background: url(#) center center;"></div>
                <div class="sig-type">Signature of the<br>issuing Authority</div>
            </div>
            <div class="sig-box-left">
                <div class="img" style="background: url(#) center center;"></div>
                <div class="sig-type">Signature of Student</div>
            </div>
        </div>
    </div>
     <div class="card">

        <img src="<?php echo base_url();?>assets/employee/img/logo.png" alt="" class="logo">
        <div class="student-id">Student ID <?php echo $card['student_id'];?></div>
        <div class="institute">
            Dumkal College, Basantapur<br>Dumkal, Murshidabad
        </div>
        <img <?php if($card['student_image'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $card['student_image'];?>" <?php } ?> class="photo">
        <!-- <img src="img/passport-sample.jpg" alt="" class="photo"> -->
        <div class="card-type">Library Reading Card</div>
        <div class="year"><?php echo $card['year'];?>st Year</div>
        <div class="roll">Roll No <?php echo $card['roll'];?></div>
        <div class="course"><?php echo $stream[0]['stream_name'];?></div>
        <div class="subjects"><?php echo $card['subject1'];?> &nbsp;&nbsp;&nbsp; <?php echo $card['subject2'];?> &nbsp;&nbsp;&nbsp; <?php echo $card['subject3'];?></div>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $card['name'];?></td>
            </tr>
            <tr>
                <td>S/O</td>
                <td>MASADUL HOSSAIN</td>
            </tr>
            <tr>
                <td>Vill</td>
                <td><?php echo $card['vill'];?></td>
            </tr>
            <tr>
                <td>P.O.</td>
                <td><?php echo $card['po'];?></td>
            </tr>
            <tr>
                <td>P.S.</td>
                <td><?php echo $card['ps'];?></td>
            </tr>
            <tr>
                <td>Dist.</td>
                <td><?php echo $card['dist'];?></td>
            </tr>
        </table>
        <img src="<?php echo base_url();?>index.php/main/show_barcode/<?php echo $card['student_id'];?>" alt="" class="barcode">
        <div class="date-issue">Date of Issue: <?php echo date('m-d-Y');?></div>
        <div class="date-valid">Valid Upto: 30-Jun-2016</div>
        <div class="sig-cont">
            <div class="sig-box-right">
                <div class="img" style="background: url(#) center center;"></div>
                <div class="sig-type">Signature of the<br>issuing Authority</div>
            </div>
            <div class="sig-box-left">
                <div class="img" style="background: url(#) center center;"></div>
                <div class="sig-type">Signature of Student</div>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
</body>
</html>