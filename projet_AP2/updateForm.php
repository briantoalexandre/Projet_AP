<?php
require_once("header.html");
$id = $_GET["id"];
?>
 <!-- formulaire de contact-->
        <div class="col-md-7 my-5">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <form
                id="contact-form"
                method="post"
                action="update.php?id<?=$id?>"
                style="max-width: 500px"
                class="mx-auto">
                <h2 class="mb-3">Contactez Nous</h2>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="name" class="form-label">Nom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      required/>
                  </div>
                  <div class="col-md-6">
                    <label for="surname" class="form-label">Prénom</label>
                    <input
                      type="text"
                      class="form-control"
                      id="surname"
                      name="surname"
                      required/>
                  </div>
                  <div class="col-md-6">
                    <label for="birth" class="form-label">Date Naissance</label>
                    <input
                      type="date"
                      class="form-control"
                      id="birth"
                      name="birth"
                      required/>
                  </div>
                  <div class="col-md-6">
                    <label for="job" class="form-label">Date embauche</label>
                    <input
                      type="date"
                      class="form-control"
                      id="job"
                      name="job"
                      required/>
                  </div>
                  <div class="col-md-6">
                    <label for="salaire" class="form-label">Salaire</label>
                    <input
                      type="number"
                      class="form-control"
                      id="salaire"
                      name="salaire"
                      required/>
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <label for="service">service:</label>
                        <select class="form-control" id="service" name="service" required>
                            <option value="">--Please choose an option--</option>
                            <option value="cuisine">cuisine</option>
                            <option value="commercial">commercial</option>
                            <option value="comptable">comptable</option>
                            <option value="entretien">entretien</option>
                        </select>
                     </div> 
                  </div>
                  <div class="col-12">
                    <div class="row justify-content-md-end">
                      <div class="col-md-6">
                        <button type="submit" class="btn btn-dark w-100 fw-bold">Envoyer</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    

<?php
require_once("footer.html")
?>