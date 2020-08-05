<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php
              
              $host = "localhost";
              $user = "root";
              $password = "";
              $database = "amigossolidarios";

              if ($conexao = new mysqli($host, $user, $password, $database)) {
              $sql = "SELECT * FROM SLIDE";
              $dados = $conexao ->query($sql);
              $conexao->close();

              if ($rows = mysqli_num_rows($dados)> 0 ){
                  while ($inf = mysqli_fetch_assoc($dados)){

                      $id = $inf['ID'];
                      echo " <div class='carousel-item " . $inf['ATIVO'] . "'>"
                      ."<img  src='/final_de_curso_senac/adm/img/" . $inf['FOTO'] . "'>"
                      ."<div class='carousel-caption'>" 
                      ."<h5 style='color: black; text-align: center;'>" . $inf['DESCRICAO'] . "</h5>"
                      ."<p> <a href='#'><button class='btn col-25' type='submit' style=' color: white; background: #f7663e;  width: 450px; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); margin-left: 25px; color: black;'>" .$inf['LEGENDA'] . "</button></a></p>"
                      ."</div>"
                      ."</div>";
                  }
              }
              }
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
     
