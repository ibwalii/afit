<!DOCTYPE HTML>
<html>
<head>
<title>AFIT FMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="AFIT Kaduna" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../css/afit.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/jquery-editable-select.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>AFIT FMS</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Hello</p>
													<span>Staff</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu"> 
											<li> <a href="request/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2>Current Incoming Files</h2>
    	<div class="col-md-12 mailbox-content  tab-content tab-content-in">
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        
                        <div class="btn btn_1 btn-default mrg5R" data-toggle="modal" data-target="#newdoc">
				           <i class="fa fa-plus"> </i> New Doc
				        </div>   
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">File info: </span>
	                            <div class="search-box">
									<form name="" id="">
										<input type="text" placeholder="Search..." name="" id="" required>	
										<input type="submit" value="">					
									</form>
								</div>
	                            	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
                    <!-- new doc Modal start -->
                   <div id="newdoc" class="modal fade" role="dialog">
  					<div class="modal-dialog">
    				<!-- Modal content-->
    				<div class="modal-content">
      					<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Add New File Details</h4>
      					</div>
      					<div class="modal-body">
                  			<form method="POST" action="" name="newdoc" id="newdoc">
                            	<div class="form-group">
                                 <label for="f_id">FILE NUMBER</label>
                                 <input type="text" required name="f_id" id="f_id" class="form-control" disabled>
                                </div>
                                <div class="form-group">
                                 <label for="f_subject">FILE SUBJECT</label>
                                 <select name="f_subject" id="f_subject" class="form-control">
                                   <option value="powerhouse">PowerHouse </option>
                                   <option value="studentresult">Student Result </option>
                                   <option value="supply and store">Supply and Store </option>
                                 </select>
                                </div>
                                <button type="submit" name="newdocbtn" id="newdocbtn" class="btn btn-primary">
                                <i class="fa fa-save"> Save</i>
                                </button>
                               
                            </form>   
          				</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
        			</div>
      				</div>
    				</div>
                    <!-- end of new document modal -->
	                <table class="table tab-border" id="paging">
                    	<thead>
                        	<tr>
                            	<th>FILE NO</th>
                                <th>FILE SUBJECT</th>
                                <th>FILE DESCRIPTION</th>
                                <th>DOCUMENT TITLE</th>
                                <th>FROM</th>
                                <th>DATE</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
	                    <tbody id="result">
	                        
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                            	
	                            </td>
	                            <td class="hidden-xs">
	                               
	                            </td>
	                            <td class="hidden-xs">
	                                
	                            </td>
	                            <td>
	                                
	                            </td>
	                            <td>
									hrs
	                            </td>
	                            <td>
	                                N 
	                            </td>
                                <td>
                                	N 
                                </td>
	                        </tr>
                           
	                    </tbody>
	                </table>
	               </div>   
               </div>
            </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 AFIT KADUNA.  </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="#"><i class="fa fa-cloud-download"></i><span>Incoming files</span></a></li>
		      </ul>
              <ul id="menu" >
		        <li id="menu-home" ><a href="#"><i class="fa fa-cloud-upload"></i><span>Outgoing files</span></a></li>
		      </ul>
              <ul id="menu" >
		        <li id="menu-home" ><a href="#"><i class="fa fa-archive"></i><span>File Archive</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="../js/jquery.nicescroll.js"></script>
		<script src="../js/scripts.js"></script>
		<!--//scrolling js-->
<script src="../js/bootstrap.js"> </script>
<script src="../js/jquery-ui.js"> </script>
<script src="../js/jquery-editable-select.js"> </script>
<script src="../js/paging.js"> </script>
<script src="../js/afitfms.js"> </script>
<!-- mother grid end here-->
<script>
 $(document).ready(function() {
                $('#paging').paging({limit:5});
				
				$("#f_subject").editableSelect({
  					onSelect: function (element) {
  					}	
				  });
				$('#f_subject').on("change, focusout", function(){
					$('#f_id').val('AFIT/EEED/1211');
				});
				
 });
</script>
</body>
</html>