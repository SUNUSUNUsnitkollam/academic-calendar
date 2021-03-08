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
                /*var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>first/insert",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }*/
            },
            editable:true,
        });
    });
             
    </script>


</head>
  <body>
        <br />
        <h2 align="center"><a>ORISYS ACADEMY- ACADEMIC CALENDAR</a></h2>
        <br />
        <div class="container">
            <div id="calendar"></div>
        </div>
    </body>
</div>
<div class="col-8">
<head>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
</head>
<style>
.bi{
  background-size:cover;
  height:500px;
  width:1420px;
  }

  td,tr,th{
  	
  	border:2px solid;
  }
.menubar{
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:100px;
      width: 1420px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:5px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;
      font-size:18px;
      font-stretch:expanded; 
      font-weight:bold; 
      font-family: "Times New Roman", Times, serif;
  
}
.menubar ul li{
       padding:10px; 
       
}

.submenu{
      display:none;  
     border-radius:10px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-25px;
         padding:10px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
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
	<div><h2 class="text-primary text-center"> TODAY'S TIME TABLE</h2>
</div>
  <div class="container-fluid">
        <a class="navbar-brand" href="#">
  
    </div>
</nav>
<section class="bi">
	<form class="py-5" method="get" >
	<table>
		<tr>
                <th>Batch Name</th>
                <th>Date</th>
                <th>First Period</th>
                <th>Second Period</th>
                <th>Third Period</th>
                <th>Fourth Period</th>
                <th>Fifth Period</th>
                <th>Sixth Period</th>
                <th>Seventh Period</th>
                <th>Eighth Period</th>
			

			
		</tr>
	</thead>
	
		<?php 
		if($n->num_rows()>0)
		{
			foreach ($n->result() as $row)
			 {
				
		?>
				<tr>		<td><?php echo $row->bname?></td>
                            <td><?php echo $row->date?></td>
                            <td><?php echo $row->first?></td>
                            <td><?php echo $row->second;?></td>
                            <td><?php echo $row->third?></td>
                            <td><?php echo $row->fourth?></td>
                            <td><?php echo $row->fifth;?></td>
                            <td><?php echo $row->sixth?></td>
                            <td><?php echo $row->seventh?></td>
                            <td><?php echo $row->eighth?></td>
					<input type="hidden" value="<?php echo $row->t_id;?>" name="id">
					

				</tr>
					<?php
		
		}
	}
		
		?>
	

		</table>
		</form>
		
		</section>

		

</body>
</div>
</html>