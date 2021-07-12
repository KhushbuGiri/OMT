<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<div class="footer "style  ="background-image:url('images/lp.jpg');">
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
		                <ul>
		                   <li><a href="index.php">Home</a></li>
			  		   <li><a href="movies_events.php">Movies</a></li>
			  		   <li><a href="login.php">Login</a></li>
						 <li><a href="login.php">Feedback</a></li>
		                   </ul>
		              </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p>Theatre Assistance<br>
						Theatre 3D Movie's<br>
						Contact No: 9798979899<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3">Call Us Toll Free:</p>
						<p class="txt_5">1 800 234 23456</p>
						<p class="txt_3">Enjoy Movie</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class=social>
		
						<a href="#"><i class="fa fa-facebook fa-2x" style="color:3b5998;margin:10px;" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram fa-2x" style="color:#e1306c;margin:10px;" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter fa-2x" style="color:0099e5;margin:10px;" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-whatsapp fa-2x" style="color:#25d366;margin:10px;" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-github fa-2x" style="color:#333;margin:10px;" aria-hidden="true"></i></a>
					
						

						
						
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>

<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:500px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
}
#button111:hover  {
                background-color:#fafafa;
                color:#207cca;
}


</style>

<script src="js/auto-complete.js"></script>
 <link rel="stylesheet" href="css/auto-complete.css">
    <script>
        var demo1 = new autoComplete({
            selector: '#search111',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                <?php
						$qry2=mysqli_query($con,"select * from tbl_movie");
						?>
               var string="";
                <?php $string="";
                while($ss=mysqli_fetch_array($qry2))
                {
                
                $string .="'".strtoupper($ss['movie_name'])."'".",";
                //$string=implode(',',$string);
                
              
                }
                ?>
                //alert("<?php echo $string;?>");
              var choices=[<?php echo $string;?>];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    </script>