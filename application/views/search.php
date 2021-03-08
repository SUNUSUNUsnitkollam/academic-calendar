<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <div class="row">
        <div class="col-4">
    <script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>first/load",
            selectable:true,
            selectHelper:true,
            select:function(start, end, allDay)
            {
                 var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss" );
                    var end = $.fullCalendar.formatDate(end,"HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>main/insert",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable:true,
        });
    });
             
    </script>


</head>
  <body>
        <br />
        <h2  align="center" >ORISYS ACADEMY- ACADEMIC CALENDAR ADD EVENT</h2><br>
  
        <br />
        <div class="container">
            <div id="calendar"></div>
        </div>
    </body>
</div>
<div class="col-8">
<head>
<meta charset=utf-8>
           
</head>
<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:10px;
		margin:20px;
	}
	*{
  padding:0px;
  margin:0px;
}
.bi{
  background-image:url(../image/f1.png);
  background-size:cover;
  height:500px;
  }
  td,tr{
  	padding:10px;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:75px;
}

.menubar ul li{
       padding:10px; 
       
}

  
.bgcolor
{
  color:#B22222;
}
.navbar-brand img
{
  height: 50px;
  padding-left:30px;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}

</style>
<body>
	<nav class="menubar navbar navbar-expand-lg navbar-light">
		<div>
			<h3 class="text-white"> CHOOSE DATE FOR REQUIRED TIMETABLE</h3>
		</div>
  <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        
    </div>
</nav>
<section class="py-5 bi">
	
 

	<form method="post" action="<?php echo base_url()?>main/searchaction">
		<center><table class="h-10">
			<tr>
				<td>DATE</td>	
		<td><input type="date" name="dat" placeholder="DATE FOR TIME TABLE"></td>
			</tr>
			<tr><td>
				BATCH:</td><td><select name="bname" class="form-select">
					<?php
					if($n->num_rows()>0)
					{
						foreach ($n->result() as $row) 
						{
							# code...
						
					?>
					<option value="<?php echo $row->id;?>"><?php echo $row->bname;?></option> 
					
					<?php
				}
				}
				?>
				</select>
				</td></tr>
		
		<tr>
		<td><input type="submit" name="submit" value="ok"></td>
		</tr>
		</table>
	</form>
	</section>
</body>
</div>

</html>