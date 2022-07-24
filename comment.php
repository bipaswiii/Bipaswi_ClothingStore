<style>

@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

html,
body {
    height: 100%
}

body {
    display: grid;
   place-items: center;
    font-family: 'Manrope', sans-serif;
   background-image:url(images/clothing3.jpg);
    
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 20px;
    width: 450px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 6px;
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}

.comment-box{
    
    padding:10px;
}



.comment-area textarea{
   resize: none; 
        border: 1px solid #ad9f9f;
}
.form-control{
    margin-left:50px;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff;
    outline: 0;
    box-shadow: 0 0 0 1px rgb(255, 0, 0) !important;
   
}

.send {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000;
}

.send:hover {
    color: #fff;
    background-color: #f50202;
    border-color: #f50202;
}

.pull-left{

margin-top:15px;


}

.pull-right{
margin-top:13px;
}




.rating {
 display: flex;
        margin-top: -10px;
    flex-direction: row-reverse;
    margin-left: -4px;
        float: left;
}

.rating>input {
    display: none
}

.rating>label {
        position: relative;
    width: 19px;
    font-size: 25px;
    color: #ff0000;
    cursor: pointer;
}

.rating>label::before {
    content: "\2605";
    position: absolute;
    opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
    opacity: 1 !important
}

.rating>input:checked~label:before {
    opacity: 1
}

.rating:hover>input:checked~label:before {
    opacity: 0.4
}
.comment_img{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    padding: 20px;
    width: 420px;
    align: center;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 6px;
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}
</style>


<?php
 session_start();
if(!$_SESSION['ticket']) {
    header('location:login.php');
}
    $id =$_GET['clothesid'];
    include('database.php');
    $query="select * from clothes where id='$id'";
    $result =$conn ->query($query);
    $data = $result ->fetch_assoc(); 

    $cloth=$_SESSION['userid'];
    $query="select * from customer where id='$cloth'";
    $result=$conn->query($query);
    $dataUser=$result->fetch_assoc();
    ?>
    <form action="action.php" method="post">
              <input type="hidden"  name="id" value="<?php echo $data['id']?>">
              <input type="hidden" name="cosid" value="<?php echo $dataUser['id']?>">
              <input type="hidden" name="username" value="<?php echo $dataUser['username']?>">
<div class="comment-box ml-2">
<p><img src="uploads/<?php echo $data['picture']; ?>" class="img-thumbnail comment_img" /></p>
</div>
<div class="card">
               
              
                  
                  <div class="col-10">
                    
                      <?php
                    //   $clothesid=$data['id'];
                       $cloth=$_SESSION['userid'];
                      $display="select * from comment where clothesid='$id'";
                      $output=$conn->query($display);
                      while($comments=$output->fetch_assoc()){
                      ?>
                      <div class="comment-box ml-2">
                      <div class="d-flex justify-content-between"><?php echo $comments['username'];?></div>
                      
                     <?php
                        $num=$comments['rating'];
                        
                     for($i=0;$i<$num;$i++){

                     ?>
                      <div class="rating"> 
                              <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            </div>
                            
                            <?php
                     }
                        ?>
                            <br>
                      <div class="d-flex justify-content-between"><?php echo $comments['usercomment'];?></div>
                      <hr>
                      <?php
                      }?>
                          <p><?php echo Date('y-m-d'); ?></p>
                          <h4>Add a comment</h4>
                          
                          
                          
                          
                          <div class="rating"> 
                              <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                              <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                              <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                              <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                              <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                          </div>
                          
                          <div class="comment-area">
                              
                              <textarea class="form-control" name="usercomment" placeholder="what is your view?" rows="4"></textarea>
                          
                          </div>
                          
                          <div class="comment-btns mt-2">
                              
                              <div class="row">
                                  
                                  <div class="col-6">
                                      
                                      <div class="pull-left">
                                      
                                      <button class="btn btn-success btn-sm" name="cancel" href="comment.png">Cancel</button>      
                                          
                                      </div>
                                  
                                  </div>
                                  
                                  <div class="col-6">
                                      
                                      <div class="pull-right">
                                      
                                      <input type="submit" class="btn btn-success send btn-sm" name="comment"> <i class="fa fa-long-arrow-right ml-1"></i></button>      
                                          
                                      </div>
                                  
                                  </div>
                              
                              </div>
                          
                          </div>
                      
                      
                      </div>
                  
                  </div>
              
              
              </div>
    
          </div>
          
          </form>

