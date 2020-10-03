<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<title>CV dynamique </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width",initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content = "ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
      
</style>
<body class="w3-light-grey ">
<!--     <img src="https://www.silicon.fr/wp-content/uploads/2014/12/Code-binaire-%C2%A9-Julien-Eichinger-Fotolia.com_-684x250-684x250.jpg" style="background-image: " 
   body { background-image:url("https://www.silicon.fr/wp-content/uploads/2014/12/Code-binaire-%C2%A9-Julien-Eichinger-Fotolia.com_-684x250-684x250.jpg");}

>

<!-- Page Container -->

<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding ">
  
    <!-- Left Column -->
    <div class="w3-third ">
    
      <div class="w3-white w3-text-grey w3-card-4 w">
        <div class="w3-display-container">
          <img src="https://www.lepoint.fr/images/2019/09/18/19358791lpw-19358869-article-jpg_6690801_660x281.jpg" style="width:100%" alt="Avatar">
        
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Developpeur</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>AHFIR,BERKEN MAROC</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>rhafarazzeddine1999@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>+212 602115519</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-yellow"></i>Skills</b> 
            <a href="add.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-blue"></i></a></p>
                 <?php $sql='SELECT * FROM `skills`';
          $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)) {
  //  echo "id: " . $row["id"]. " - Name: " . $row["nonSK"]. " " . $row["levelSK"]. "<br>";
                 ?>
         <p> <?php echo $row["nonSK"] ;?> <a href="modifie.php?mod=<?php echo $row["id"] ;?> ">
            <i class="fa fa-edit fa-fw w3-right w3-large w3-text-orange"></i></a>
            <a href="CV.php?d=<?php echo $row["id"] ;?> ">
            <i class="fa fa-remove fa-fw w3-right w3-large w3-text-red"></i></a>
         </p>
          <div class="w3-light-grey w3-round-xlarge w3-small"> 
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:<?php echo $row["levelSK"] ;?>%"> <?php echo $row["levelSK"] ;?>%</div>  
          </div>
          <?php
              }
           if(isset($_GET['d'])){
            $dID=$_GET['d'];
            $sql="DELET FROM";
            $sql= "DELETE FROM `skills` WHERE id=$dID";
             if(mysqli_query($conn,$sql)){

               echo "<script>window.location='CV.php'; </script>";
                                         }
                              }
        ?>
    
          <br>
          <hr>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-yellow"></i>Languages</b>

           <a href="addLangue.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-blue"></i></a></p>
                 <?php $sql='SELECT * FROM `languages`';
                       $result = mysqli_query($conn, $sql);
                       while($row = mysqli_fetch_assoc($result)) {
                 ?>
          <p> <?php echo $row["langues"] ;?> <a href="modLangue.php?modl=<?php echo $row["id"] ;?> ">
             <i class="fa fa-edit fa-fw w3-right w3-large w3-text-orange"></i></a>
             <a href="CV.php?dl=<?php echo $row["id"] ;?> ">
             <i class="fa fa-remove fa-fw w3-right w3-large w3-text-red"></i></a>
         </p>
          <div class="w3-light-grey w3-round-xlarge w3-small"> 
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:<?php echo $row["niveau"] ;?>%"> <?php echo $row["niveau"] ;?>%</div>  
          </div>
           <?php 
                                                                 }
         if(isset($_GET['dl'])){
             $dIDl=$_GET['dl'];

             $sql= "DELETE FROM `languages` WHERE id=$dIDl";
            if(mysqli_query($conn,$sql)){

            echo "<script>window.location='CV.php'; </script>";
                                        }
                               }         
        ?>


          <br>

        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card  w3-margin-bottom">
        <h2 class="w3-text-blue w3-center text-overline w3-padding-16"><i class=""><strong>RHAFAR AZZDDINE<strong> </i></h2>

        
       
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-yellow"></i>Les informations Personnelles :
        <a href="addinfo.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-blue"></i></a></h2>

                 <?php $sql='SELECT * FROM `info_pesonnelle`';
          $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)) {
                 ?>
          <div class="w3-container">
            <p> <?php echo $row["info"] ;?> 
                <a href="modinfo.php?modinfo=<?php echo $row["id"] ;?> ">
                <i class="fa fa-edit fa-fw w3-right w3-large w3-text-orange"></i></a>
                <a href="CV.php?dinfo=<?php echo $row["id"] ;?> ">
                <i class="fa fa-remove fa-fw w3-right w3-large w3-text-red"></i></a>
           </p>
           <hr>
        </div>

        <?php 
         } // supprimer une information personnelle
             if(isset($_GET['dinfo'])){
  $IDinfo=$_GET['dinfo'];
  
  $sql= "DELETE FROM `info_pesonnelle` WHERE id=$IDinfo";
if(mysqli_query($conn,$sql)){

echo "<script>window.location='CV.php'; </script>";

}

}
         ?>
       
        <div class="w3-container">
          
        </div>
      </div>



           <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-yellow"></i>Work Experience<a href="addexp.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-blue"></i></a></h2>
              <?php $sql='SELECT * FROM `experience`';
          $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)) {
  ?>
        <div class="w3-container">
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["date"] ;?><a href="modexp.php?modexp=<?php echo $row["id"] ;?> ">
    <i class="fa fa-edit fa-fw w3-right w3-large w3-text-orange"></i></a>
    <a href="CV.php?suppexp=<?php echo $row["id"] ;?> ">
    <i class="fa fa-remove fa-fw w3-right w3-large w3-text-red"></i></a> </h6>
          <p><?php echo $row["experience"] ;?></p>
          <hr>
        </div>
        <?php 
         } //supprimer experience
         if(isset($_GET['suppexp'])){
  $supp=$_GET['suppexp'];
 
  $sql= "DELETE FROM `experience` WHERE id=$supp";
if(mysqli_query($conn,$sql)){

echo "<script>window.location='CV.php'; </script>";

}

} ?>
       
        </div>




      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-yellow"></i>Education<a href="addedu.php"><i class="fa fa-plus fa-fw w3-right w3-large w3-text-blue"></i></a></h2>
                <?php $sql='SELECT * FROM `education`';
          $result = mysqli_query($conn, $sql);
           while($row = mysqli_fetch_assoc($result)) {
  ?>
       

        <div class="w3-container">
          <h6 class="w3-text-blue"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["Date"] ;?><a href="modedu.php?modedu=<?php echo $row["id"] ;?> ">
    <i class="fa fa-edit fa-fw w3-right w3-large w3-text-orange"></i></a>
    <a href="CV.php?suppedu=<?php echo $row["id"] ;?> ">
    <i class="fa fa-remove fa-fw w3-right w3-large w3-text-red"></i></a> </h6>
          <p><?php echo $row["education"] ;?></p>
          <hr>
        </div>
        <?php 
         } // supprimer educatuion
         if(isset($_GET['suppedu'])){
  $suppe=$_GET['suppedu'];
  
  $sql= "DELETE FROM `education` WHERE id=$suppe";
if(mysqli_query($conn,$sql)){

echo "<script>window.location='CV.php'; </script>";

}

} ?>





      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container  w3-blue w3-center w3-margin-bottom">
  <p>Find me on social media.</p>
 <a href="https://www.linkedin.com/in/azzaddine-rhafar-25b294188/">  <i class="fa fa-linkedin w3-hover-opacity"></i>   </a>
 <a href="https://www.facebook.com/profile.php?id=100008372623623"> <i class="fa fa-facebook-official w3-hover-opacity"></i> </a>
  <a href="https://www.instagram.com/?hl=fr"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
  <i class="fa fa-twitter w3-hover-opacity"></i>

  <p>Designe par <strong>RHAFAR AZZDDINE<strong> </p>
</footer>

</body>
</html>
