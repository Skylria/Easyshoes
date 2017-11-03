<?php include "header.php"; ?>

        <section class="bg-primary" id="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">FALE CONOSCO </h2>
              </div>
            </div>
          </div>
        </section>
    
    	<div class="container mtb">
            <h4>Enviar Feedback</h4>
               <form role="form" action="bd/comment.php">
                    <label for="InputName1">Nome*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                    <label for="InputEmail1">Email*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                    <label for="message1">Messagem</label>
                    <textarea class="form-control" id="message1" rows="4"></textarea>
                    <button type="submit" class="btn btn-theme">Enviar</button>
                </form>
    	</div>
    </body>
</html>