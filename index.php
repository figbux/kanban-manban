<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project Dashboard</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/style-ie7-8.css" />
	<![endif]-->
</head>
<body>
	<!-- Modal -->
<div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">HELP</h3>
  </div>
  <div class="modal-body">
    <h4>Tips on how to use the dashboard</h4>
    <ul>
    	<li><strong>Create new project</strong>: Use "n" or click the icon in the top navigation</li>
    	<li><strong>Save a project</strong>: Press enter or click "save"</li>
    	<li><strong>Discard changes</strong>: Click "cancel", click anywhere outside the editing box or press "esc"</li>
    	<li><strong>Change order</strong>: Easy: just drag the project to a new position</li>
    </ul>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>




	<div id="wrapper">
		<navigation class="top">
			<ul>
				<li><i class="icon-plus"></i><a href="#" id="new">Yeni</a></li>
				<li><i class="icon-question-sign"></i><a href= "#helpModal"  role="button" class="btn" data-toggle="modal">Yardım et</a></li>
			</ul>
		</navigation>
		<div id="board">

		</div>
		<div class="clear"></div>

		<div id="navigation" class="navigation">
			<h5>Etiketler</h5>
		</div>
	</div>

<!-- Button to trigger modal -->

 <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.dragsort-0.5.1.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/settings.js" ></script>
<script type="text/javascript" src="js/core.min.js" ></script>

</body>
</html>
