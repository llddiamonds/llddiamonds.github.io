<div id="content">
            <?php
            session_start();
			error_reporting(0);
			include 'connect.php';
			$str_out_users="SELECT * FROM `users_reg` WHERE id='".$_SESSION['user']['id']."';";
			$run_out_user=mysqli_query($connect,$str_out_users);
			$num_rows=mysqli_num_rows($run_out_user);
			while ($out=mysqli_fetch_array($run_out_user)){
            echo "<h1>Welcome, $out[username]!</h1>";
            }
            ?>
            <br>
                <div class="info">
                    <p>
                    Founded in 1996 by renowned diamantaire, businessman, and philanthropist Lev Leviev, LLD Diamonds USA is the world's largest privately held diamond manufacturer and cutting group - entirely independent of external suppliers, having its own widespread sources of rough goods through ownerships in mines around the world.
                    </p>
                </div>
<div class="container-fluid">
<div class="row">	
<div class="img-wrap">		
<img src="assets/img/phon.jpg" class="img-responsive" style="width: 100%; height: 450px;" >
<h2>Our Expertise</h2>
<p>
LLD diamond’s source of rough straight from the mines, provides access to top quality rough. Our industry largest in-house cutting and polishing capabilities empower us to distribute finest diamonds and produce exquisite jewelry to the high-end jewelry manufacturers and retailers.<br>
LLD Diamonds, recognized as an international diamond industry leader, has been awarded multiple industry achievements and accolades, including Israel’s “Outstanding Exporter” government award.
</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">	
<div class="img-wrap-2_in">		
<img src="assets/img/phon2.jpg" class="img-responsive" style="width: 100%; height: 450px;" >
<h2>Our Operations</h2>
<p>
At LLD diamonds, we manufacture superior quality polished diamonds and are a source of high-level polished stones for clients worldwide. Our diamond industry knowledge together with our widespread market intelligence enables us to identify changing trends in different countries regarding cut, color and clarity and enabling us to provide customers with a range of goods. Our highly skilled and experienced craftsmen know how to bring out a diamond's clarity and show the maximum fire and brilliance that a diamond possesses. We aim to consistently supply high-quality polished diamonds on time and precisely as requested. With our main sales office in the heart of the Diamond District at 580 Fifth Avenue, New York among other strategic locations worldwide, LLD is your “Natural Choice” of partner, no matter your size or needs. 
</p>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row-2">	
<div class="img-wrap-3">		
    <img src="assets/img/pht.jpg" class="img-responsive" style="width: 70%; height: 425px;" >
    <h2>The King of Diamonds</h2>
    <h3>Lev Leviev, Founder</h3>
    <p>
       Known as the "King of Diamonds", Lev Leviev fittingly owns a substantial diamond outfit that operates around the world. Leviev made his name undercutting the De Beers diamond cartel, striking his own deals with diamond-producing countries like Russia and Angola. He owns high-end diamond jewelry boutiques around the world, and large jewelry chains in Europe. Leviev is also the controlling shareholder of Africa Israel Investments, a real estate and construction company with headquarters in Israel.  
    </p>
</div>
</div>
</div>			  		
            
</div>