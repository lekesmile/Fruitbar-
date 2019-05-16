<?php include("include/header.php"); ?>
<?php include("include/navigations.php"); ?>

<section id="palaute">
<div class="formcontainer">
  <form class="" action="palautelahetetty.php" method="post">
    <div class="row">
    <div class="col-25">
      <label for="">Otsiko</label>
    </div>
    <div class="col-75">
      <input type="text" name="title" value="" placeholder="ksiko">
    </div>
      </div>
      <div class="row">
      <div class="col-25">
        <label for="">Nimi</label>
      </div>
      <div class="col-75">
        <input type="text" name="etunimi" value="" placeholder="Nimesi">
      </div>
        </div>
        <div class="row">
        <div class="col-25">
          <label for="">Email</label>
        </div>
        <div class="col-75">
          <input type="text" name="email" value="" placeholder="Email@email.com">
        </div>
          </div>
          <div class="row">
          <div class="col-25">
            <label for="">Viesti</label>
          </div>
          <div class="col-75">
            <textarea name="message" placeholder="Viestisi" style="height:200px" ></textarea>
          </div>
            </div>
            <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</section>




<?php include("include/footer.php"); ?>
