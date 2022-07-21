<?php
include 'config.inc.php';
$titulo = '';
$asideinterna = false;
$compartilhar = false;
$maisvisitados = false;
include BASE_URL . '/includes/header.inc.php';
// include BASE_URL .'/includes/imagem-topo.inc.php'; 
?>
<main id="desincompatibilizacao" class="">
   <h2>Desincompatibilização e afastamentos</h2>
   <div class="main__conteudo">
      <div class="main__linha">
         <section class="conteudo">
            <div class="imagem-principal">
               <img src="assets/imagens/paginas/desincompatibilizacao/desincompatibilizacao-e-afastamentos.png"
               alt="Desincompatibilização e afastamentos">
            </div>
            <p>Sed non urna elit. Duis dapibus lobortis fringilla. Sed nec turpis id lacus tempor faucibus. Pellentesque
            habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed scelerisque ante id
            malesuada rutrum. Nunc lobortis condimentum turpis a ultrices. Phasellus accumsan, eros eu ultrices volutpat,
            nibh magna aliquet sem, ut vehicula metus odio eget nibh. Quisque gravida, magna non facilisis vestibulum,
            enim sem auctor mi, sit amet eleifend est nulla sit amet enim.</p>
            <div class="cargos">
               <form>
                  <div class="main__linha">
                     <div class="form-group cargo-ocupado">
                        <label for="cargo-ocupado" class="label">Cargo ocupado</label>
                        <select class="form-control" id="cargo-ocupado">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </div>
                  </div>
                  <div class="main__linha">
                     <div class="form-group cargo-pretendido">
                        <label for="cargo-pretendido" class="label">Cargo pretendido</label>
                        <select class="form-control" id="cargo-pretendido">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </div>
                     <div class="form-group buscar">
                        <button type="submit" class="btn"><span class="esconder">Submit</span></button>
                     </div>
                  </div>
               </form>
            </div>
         </section>
         <aside class="aside-links">
            Links
         </aside>
      </div>
   </div>
</main>
<?php include BASE_URL . '/includes/footer.inc.php';?>