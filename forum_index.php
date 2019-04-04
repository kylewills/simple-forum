<?php include"database.php" ?>
<?php //include "includes/chat.php"; ?> // this is included in the ajax found on chat_headed.php
<?php include"chat_header.php" ?>

    <!-- Navigation -->
   
<?php //include"chat_navigation.php"  ?>
    
   

    <!-- Page Content -->
    <div class="container">
        
        <h1 class="page-header" style="text-align:center;">
                    <p><b>Welcome to my Forum</b></p>
                    <p><small><span class="">Start a conversation and chat.</span></small></p>
                </h1>
   </div>
        

            <!-- Forum chat Entries Column -->
            
      
       
  <div class="container col-md-offset-3 col-md-6">       
        
  <div class="well">
    <div id="chat_box"></div>
    <div  id="chat"></div>
  </div>   
        
  
  
  <form method="post" action="">
  
  <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
  
  <div class="form-group">
    <textarea class="form-control" name="msg"  placeholder="Start Chatting.... Enter message" rows="3"></textarea>
    </div>
    
  <div class="form-group" style="text-align:center;">
      <button type="submit" name="submit" class="btn btn-danger btn-lg">Send It !</button>
  </div>
</form> 
    
</div>  
    
       
    
    
     
        <?php 
            if(isset($_POST['submit'])){
                
                 //echo $_POST['name'];
                //whitelist
                $name = $_POST['name'];
                $msg = $_POST['msg'];               

                
           $stmt = $connection->prepare("INSERT INTO chat (name,msg) VALUES(?,?)");
           $stmt->bind_param("ss", $name, $msg);
           $stmt->execute();
                
                //$run = $connection->query($query);
            
                /*if($run){
    "<embed loop='false' src='blopchat.wav' hidden='true' autoplay='true'</embed>";
                }*/
               
            }
           ?>
           
    <br>   
    <br> 
            

            <!-- Blog Sidebar Widgets Column -->

       
        <!-- /.row -->

     
        <!-- footer -->

  <?php  include"footer.php" ?>     
