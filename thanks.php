<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Juxt Shopping|Thank You</title>
<link rel="stylesheet" type="text/css" href="../survey/assets/css/style.css">
</head>
<body>

<div class="parent_main">
    <div class="header">
      <div class="" style="float: left; width: 20%;padding-top:20px;">
        <img src="https://juxt360.com/Baseline/images/logo.png">
      </div>
        <div style="clear:both"></div>
    </div>
<div class="content_thank">

<p>Thank you for taking time off to participate in the Survey.</p>

<?php if($_REQUEST['rfr']=='amu' && $_REQUEST['SessionId']!= '' && $_REQUEST['subId']!=''){ ?>
<script type="text/javascript">
document.write(unescape("%3Cscript src='http://www.amulyam.in/incent/onlineShopSurvey.jsp?subId=<?php echo $_REQUEST['subId']; ?>' type='text/javascript'%3E%3C/script%3E"));
</script>

<?php } ?>
</div>
</div>
</body>
</html>
