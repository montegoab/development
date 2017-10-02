<?php 
print "Hello world";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Development</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.4.2/b-html5-1.4.2/r-2.2.0/sl-1.2.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/b-1.4.2/b-html5-1.4.2/r-2.2.0/sl-1.2.3/datatables.min.js"></script>

</head>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();



    var isiPad = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i) != null;
var event = (isiPad) ? 'touchstart touchmove touchend':'click';
var device = event;
$("#device").html(device);

if(device=="touchstart"){
    $('.inboxSupplier').css('color','blue');
}

$(document).on('touchstart touchend touchmove click','td',function(event) {
   
    if ($(this).find('input[type=checkbox]').length>0) {
        return true;
    } else if ($(this).parent().attr('data-url')) {
        var url = $(this).parent().attr('data-url');
        if(device!="click"){
            console.log(event.target);
            switch (event.type) {
                case "touchstart": 
                  touchObj = url;
                  break;
                case "touchmove":
                  touchObj = null;
                  break;
                case "touchend": 
                  if(touchObj === url){

                    touchObj = null;
                    alert(url);
                    // location.href=url;
                  }
                  break;
              }

        }
        else{
            alert("mouseclick");
            // location.href=$(this).parent().attr('data-url');

        }
    }
});
} );
</script>
</script>
<body>
	<div>
        <span id="device"></span>
		<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr data-url="test1">
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr data-url="test2">
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr data-url="test3">
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr data-url="test4">
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            
        </tbody>
    </table>
	</div>

</body>
</html>