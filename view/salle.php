<?php
 include("entete.php"); 
include("../nav/nav.php"); 
 require("../controllers/calender.php");
?>

<script type="text/javascript" src="../js/script.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link href="../styles/fullcalendar.css" rel="stylesheet" />
<link href="../styles/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="../js/moment.min.js"></script>
<script src="../js/fullcalendar.js"></script>

<div class="container-fluid" id="olp">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron card card-block">
<!-- add calander in this div -->
<div class="container">
  <div class="row">
<div id="calendar"></div>

</div>
</div>
</div>
</div>
            </div>
</div>


<!-- Modal -->
<div id="createEventModal" class="modal" >
  

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close_two" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajoutez un évènement</h4>
      </div>
      <div class="modal-body">
            <div class="control-group">
                <label class="control-label" for="inputPatient">Evenement:</label>
                <div class="field desc">
                    <input class="form-control" id="title" name="title" placeholder="Event" type="text" value="">
                </div>
            </div>
          <div class="control-group">
                <label class="control-label" for="inputPatient">Lieu:</label>
                <div class="field desc">
                    <input class="form-control" id="title" name="title" placeholder="Lieu" type="text" value="">
                </div>
            </div>
            
            <input type="hidden" id="startTime"/>
            <input type="hidden" id="endTime"/>
            
            
       
        <div class="control-group">
            <label class="control-label" for="when">When:</label>
            <div class="controls controls-row" id="when" style="margin-top:5px;">
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
    </div>
    </div>

  
</div>


<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Event Details</h4>
        </div>
        <div id="modalBody" class="modal-body">
        <h4 id="modalTitle" class="modal-title"></h4>
        <div id="modalWhen" style="margin-top:5px;"></div>
        </div>
        <input type="hidden" id="eventID"/>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
        </div>
    </div>
</div>
</div>
<!--Modal-->


<div style='margin-left: auto;margin-right: auto;text-align: center;'>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21769945-4', 'auto');
  ga('send', 'pageview');

</script>

 


<?php

include("footer.php"); 
?>

