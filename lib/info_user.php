
<?php
require_once'connection.php';

session_start();
$username = $_SESSION['username'];

$cursus = implode(" ",cursus_sum($username,$conn));
$usernom = etu_nom($username,$conn);
$userprenom = etu_prenom($username,$conn);
$credit_sum = cursus_credit_sum($username,$conn);
$credit_cs = cursus_credit_cs($username,$conn);
$credit_tm = cursus_credit_tm($username,$conn);
$credit_ec = cursus_credit_ec($username,$conn);
$credit_st = cursus_credit_st($username,$conn);
$prog = etudiant_prog($username,$conn);
$semestre = etudiant_semestre($username,$conn);
$mail = etudiant_mail($username,$conn);


print <<<EOT
            <html>
            <head>
            <link rel="stylesheet" type="text/css" href="../css/info_user.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
            </head>
            <body class="w3-light-grey">
            <script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js"></script>
            <div class="page">
	            <header class="w3-container w3-center w3-padding-32"> 
					  <h1 class="w3-animate-top"><b>MY CURSUS</b></h1>
					  <p>Welcome to the site&nbsp<span class="w3-tag">$username</span></p>
				</header>
                <div class="w3-card-2 w3-margin">
	                <div class="w3-dropdown-hover w3-hide-small w3-light-grey">
				      <button class="w3-padding-large w3-button" title="More"><i class="fa fa-bars"></i>&nbsp; MORE <i class="fa fa-caret-down"></i></button>     
				      <div class="w3-dropdown-content w3-bar-block w3-card-4">
				        <a class="w3-bar-item w3-button" href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
				        <a class="w3-bar-item w3-button" href="#"><i class="fa fa-envelope-open  fa-fw" aria-hidden="true"></i>&nbsp; Email</a>
				        <a class="w3-bar-item w3-button" href="#"><i class="fa fa-table fa-fw" aria-hidden="true"></i>&nbsp; Cursus</a>
				        <a class="w3-bar-item w3-button" href="#"><i class="fa fa-ravelry fa-fw" aria-hidden="true"></i>&nbsp; About</a>
				      </div>
				    </div>
		            <h3><b>&nbsp; &nbsp; M.&nbsp;$userprenom &nbsp;$usernom&nbsp;</b></h3>	
		            <h6 style="font-family:Raleway">&nbsp; &nbsp; &nbsp; &nbsp; $prog$semestre $mail</h6>
		            <div>
					<ul>
					    <li>Nombre de credit:&nbsp;$credit_sum</li>
					    <li>NPML:&nbsp; Non</li>
					    <li>Liste des modules:&nbsp; $cursus</li>
					    	<p></p>
					    	<div class="w3-card-2 w3-margin">
					    	<img src="../source/jiangch1.png">
					    	<p>&nbsp; Légende &nbsp;<i class="fa fa-circle-o-notch" aria-hidden="true">&nbsp;:&nbsp;Tronc commun&nbsp;
					    	</i><i class="fa fa-circle-o" aria-hidden="true">&nbsp;:&nbsp;Tronc commun de branche&nbsp;</i>
					    	<i class="fa fa-circle" aria-hidden="true">&nbsp;:&nbsp;Filière&nbsp;</i>
					    	<i class="fa fa-info-circle" aria-hidden="true">&nbsp;:&nbsp;Hors profil&nbsp;</i>
					    	<i class="fa fa-times" aria-hidden="true">&nbsp;:&nbsp;En attente d'affectation&nbsp;</i>
					    	<i class="fa fa-check" aria-hidden="true">&nbsp;:&nbsp;Profil minimum&nbsp;</i></p>	
					    	<table>	
						    	<tr>
						    	   <th></th>
						    	   <th>CS</th>
						    	   <th>TM</th>
						    	   <th>ST</th>
						    	   <th>EC</th>
						    	   <th>ME</th>
						    	   <th>CT</th>
						    	   <th>HP</th>
						    	   <th>NPML</th>
						    	</tr>
						    	<tr>
						    	   <td><b>Automne 2016</b></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	</tr>
						    	<tr>
						    	   <td>Total semestre</td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	</tr>
						    	<tr>
						    	   <td><b>Printemps 2017</b></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	</tr>
						    	<tr>
						    	   <td>Total semestre</td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	   <td></td>
						    	</tr>
					    	</table>
					    	<p></p>				  
						    <table>
								<tr>	
								    <th></th>
									<th>CS</th>
									<th>TM</th>
									<th>EC</th>
									<th>ST</th>
									<th>ME</th>
									<th>CT</th>
									<th>HP</th>
									<th>NPML</th>
								</tr>
								<tr>
								    <td><b>TCBR</b></td>
									<td>$credit_cs/30</td>
									<td>$credit_tm/30</td>
									<td>$credit_ec/12</td>
									<td>$credit_st/60</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
								    <td><b>FIL</b></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								</tr>
								<tr>
								    <td><b>TCBR+FIL</b></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								</tr>
                                <tr>
								    <td><b>Global</b></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								    <td></td>
								</tr>
						    </table>
						    </div>	
			       </ul>
			       <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
					  <i class="fa fa-facebook-official w3-hover-opacity"></i>
					  <i class="fa fa-instagram w3-hover-opacity"></i>
					  <i class="fa fa-snapchat w3-hover-opacity"></i>
					  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
					  <i class="fa fa-twitter w3-hover-opacity"></i>
					  <i class="fa fa-linkedin w3-hover-opacity"></i>
					  <p class="w3-medium">Author@leavesdrift&nbsp<a href="https://github.com/leavesdrift" target="_blank">GitHub</a></p>
				   </footer>
		   </div>
           </body>
           </html>
EOT;

function etu_nom($username,$conn){
	$sql = "SELECT e.etu_nom,e.etu_prenom FROM user AS u,etudiant AS e  
	WHERE u.user_id = e.etu_id AND u.user_name = '$username'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
    return $row['etu_nom'];  
}

function etu_prenom($username,$conn){
	$sql = "SELECT e.etu_nom,e.etu_prenom FROM user AS u,etudiant AS e  
	WHERE u.user_id = e.etu_id AND u.user_name = '$username'";
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($res);
    return $row['etu_prenom'];  
}

function cursus_sum($username,$conn){
	$sql = "SELECT c.sigle FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id = v.etu_id AND v.uv_id = c.uv_id";
    $res=mysqli_query($conn,$sql);
    $list = array();
   while($row=mysqli_fetch_assoc($res)){
   	 $list[]=$row;
   }
    $curs = array();    
    foreach ($list as $key => $value) {
    	foreach ($value as $k => $v) {	
    		$curs[]=$v;
    	}	
    }
    return $curs;
}

 function cursus_credit_sum($username,$conn){
     $sql="SELECT sum(c.credit) AS sum FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id=v.etu_id AND v.uv_id=c.uv_id AND v.uv_res != 'null'";
     $res=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($res);
     return $row['sum'];
 }


function cursus_credit_cs($username,$conn){
	$sql="SELECT sum(c.credit) AS sum FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id=v.etu_id AND v.uv_id=c.uv_id AND c.cat='CS' AND v.uv_res!='null'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    return $row['sum'];
}


function cursus_credit_tm($username,$conn){
	$sql="SELECT sum(c.credit) AS sum FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id=v.etu_id AND v.uv_id=c.uv_id AND c.cat='TM' AND v.uv_res!='null'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    return $row['sum'];
}


function cursus_credit_ec($username,$conn){
	$sql="SELECT sum(c.credit) AS sum FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id=v.etu_id AND v.uv_id=c.uv_id AND c.cat='EC' AND v.uv_res!='null'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    return $row['sum'];
}


function cursus_credit_st($username,$conn){
	$sql="SELECT sum(c.credit) AS sum FROM user AS u,cursus AS c,uv AS v WHERE u.user_name='$username' AND u.user_id=v.etu_id AND v.uv_id=c.uv_id AND c.cat='st' AND v.uv_res!='null'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    return $row['sum'];
}

function etudiant_prog($username,$conn){
	$sql="SELECT e.etu_prog AS prog FROM user AS u,etudiant AS e WHERE u.user_name='$username' AND u.user_id=e.etu_id";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row['prog'];
}

function etudiant_semestre($username,$conn){
	$sql="SELECT e.prog_semestre AS semestre FROM user AS u,etudiant AS e WHERE u.user_name='$username' AND u.user_id=e.etu_id";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row['semestre'];
}

function etudiant_mail($username,$conn){
    $sql="SELECT e.etu_mail AS mail FROM user AS u,etudiant AS e WHERE u.user_name='$username' AND u.user_id=e.etu_id";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row['mail'];
}

?>