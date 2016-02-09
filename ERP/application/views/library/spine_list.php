<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        html, body {padding: 0; margin: 0}
        .container {
            display: block;
            float: left;
            width: 210mm; height: 297mm;
            padding-left: 0mm;
            padding-right: 0.5mm;
            padding-top: 3mm;
            padding-bottom: 35mm;
            /*outline: 1px solid red;*/
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .block {
            display: block;
            height: 21mm;
            width: 38mm;
            /*outline: 1px dotted;*/
            float: left;
            margin-right: 2mm;
			-webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
			padding:3mm 5mm 5mm 15mm;
			
        }
        .block:nth-child(5n) {
            margin-right: 0;
        }
    </style>
</head>
<body>
<div class="container">
<?php if (empty($spine)){?>                     
                        	<div align="center">No data found</div>                            
						<?php }else {?>
        <?php foreach ($spine as $spine){?>
    <div class="block"><?php echo $spine->classification_no."<br>".$spine->author_mark."<br>".$spine->acc_no; ?></div>
<?php }}?>    
</div>
</body>
</html>