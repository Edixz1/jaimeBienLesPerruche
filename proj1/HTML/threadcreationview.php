<div class="container border">
  <h3 class="my-4">Create thread </h3>
  <form method = "post" action = "./DOMAINLOGIC/threadcreate.dom.php">
      <div class="form-group">
          <input type="text" class="form-control" name="threadcreation" id="threadcreation" placeholder="Title" required><br>
          <div class="valid-feedback">Valid.</div>
      </div>
      <button class="btn btn-success btn-lg mb-4" type="submit">Create Thread</button>
  </form>

</div>

<div class="container border"  style="background-color:Red; margin-top:3em;">
  <h3 class="my-4" style="color:white">ATTENTION PUB!!!!</h3>
  <form>
      <div class="form-group">   
        <?php
        arsort($_COOKIE);
        $compteur = 0; 
        $tAfficher = new Thread();

       
        foreach($_COOKIE as $x=>$value){
         
           if (is_numeric($x) && $compteur < 5)
          {
           $tAfficher->load_thread_by_id($x);
           $tAfficher->display_thread();
           $compteur++;
          }
        }
        ?>
      </div>
  </form>
</div>
