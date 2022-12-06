<?php

function barbaprogram() {
  ?>
<style>
.superfrase {
    background-image: url(<?php echo plugin_dir_url( __FILE__ ).'img/svg/info.svg';?>);
}
</style>
<div class="separator-bs">
  <div id="bq-refresh"></div>
  <?php //Primera selección a elegir ?>
  <div class="bq-container round0" id="round0">
    <div id="bq-obra" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-obra.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Si tienes espacio, no te lo pienses</div></div><div class="barba-hl">Barbacoa de obra</div></div>
    <div id="bq-carbon" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-carbon.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Un clásico que nunca falla</div></div><div class="barba-hl">Barbacoa de carbón</div></div>
    <div id="bq-gas" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-gas.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Rápidas y eficientes</div></div><div class="barba-hl">Barbacoa de gas</div></div>
    <div id="bq-electrica" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-electrica.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Solo necesitas un enchufe</div></div><div class="barba-hl">Barbacoa eléctrica</div></div>
    <div id="bq-lena" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-lena.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Potencia el sabor de tus alimentos</div></div><div class="barba-hl">Barbacoa de leña</div></div>
    <div id="bq-piedra" class="barbabox justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-piedra.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Las preferidas de los cocineros</div></div><div class="barba-hl">Barbacoa de piedra</div></div>
  </div>

          <?php //Si bq Obra ?>

          <div class="bq-container round1 oculto" id="round1">
            <div id="bq-chime" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-obra.jpg';?>" alt="Barbacoa de obra con chimenea" class="im-barba"></div><div class="superfrase">Canalizan mejor el aire</div></div><div class="barba-hl">Con chimenea</div></div>
            <div id="bq-no-chime" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-obra-sin-chimenea.jpg';?>" alt="Barbacoa de obra sin chimenea" class="im-barba"></div><div class="superfrase">Mejor visión de los alimentos</div></div><div class="barba-hl">Sin chimenea</div></div>
          </div>
                                  <?php //Si bq Obra chime ?>
                                  <div class="bq-container round1-1 oculto" id="round1_1">
                                    <!-- selector de precio -->
<?php include 'precio.php';?>

                                  </div>

                                  <?php //Si bq Obra no chime ?>
                                  <div class="bq-container round1-2 oculto" id="round1_2">
                                    <!-- selector de precio -->
<?php include 'precio.php';?>
                                  </div>

            <?php //Si bq carbon ?>

            <div class="bq-container round2 oculto" id="round2">
              <div id="bq-carbon-tapa" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-carbon.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Mantiene mejor la temperatura</div></div><div class="barba-hl">Con tapa</div></div>
              <div id="bq-carbon-portatil" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-carbon-portatil.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Llévatela donde quieras</div></div><div class="barba-hl">Portatil</div></div>
              <div id="bq-carbon-no-smoke" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-carbon-sin-humo.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Cocina hasta en interior</div></div><div class="barba-hl">Sin humo</div></div>
            </div>

                                    <?php //Si bq carbon tapa. ?>
                                    <div class="bq-container round2-1 oculto" id="round2_1">
                                      <!-- selector de precio -->
<?php include 'precio.php';?>
                                    </div>

                                    <?php //Si bq Carbon portatil ?>
                                    <div class="bq-container round2-2 oculto" id="round2_2">
                                      <!-- selector de precio -->
<?php include 'precio.php';?>
                                    </div>

                                    <?php //Si bq Carbon no smoke ?>
                                    <div class="bq-container round2-3 oculto" id="round2_3">
                                      <!-- selector de precio -->
<?php include 'precio.php';?>
                                    </div>

                <?php //Si bq gas ?>

                <div class="bq-container round3 oculto" id="round3">
                  <div id="bq-gas-patas" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-gas.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Perfectas para exterior</div></div><div class="barba-hl">Con patas</div></div>
                  <div id="bq-gas-legless" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-gas-sin-patas.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Colócala en cualquier superficie</div></div><div class="barba-hl">Sin patas</div></div>
                </div>

                                      <?php //Si bq gas patas ?>
                                      <div class="bq-container round3-1 oculto" id="round3_1">
                                        <!-- selector de precio -->
<?php include 'precio.php';?>
                                      </div>

                                      <?php //Si bq gas no patas ?>
                                      <div class="bq-container round3-2 oculto" id="round3_2">
                                        <!-- selector de precio -->
<?php include 'precio.php';?>
                                      </div>

                  <?php //Si bq electrica ?>

                  <div class="bq-container round4 oculto" id="round4">
                    <div id="bq-elec-exterior" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-electrica.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">La mejor aliada para tu terraza</div></div><div class="barba-hl">Exterior</div></div>
                    <div id="bq-elec-tapa" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-electrica-tapa.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Mantiene mejor la temperatura</div></div><div class="barba-hl">Con tapa</div></div>
                    <div id="bq-elec-portatil" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-electrica-portatil.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Llévatela donde quieras</div></div><div class="barba-hl">Portatil</div></div>

                  </div>



                                        <?php //Si bq electrica exterior ?>
                                        <div class="bq-container round4-2 oculto" id="round4_2">
                                          <!-- selector de precio -->
<?php include 'precio.php';?>
                                        </div>
                                        <?php //Si bq electrica tapa ?>
                                        <div class="bq-container round4-3 oculto" id="round4_3">
                                          <!-- selector de precio -->
<?php include 'precio.php';?>
                                        </div>
                                        <?php //Si bq electrica portatil ?>
                                        <div class="bq-container round4-1 oculto" id="round4_1">
                                          <!-- selector de precio -->
<?php include 'precio.php';?>
                                        </div>

                    <?php //Si bq leña ?>

                    <div class="bq-container round5 oculto" id="round5">
                      <div id="bq-lena-portatil" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-lena-portatil.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Llévatela donde quieras</div></div><div class="barba-hl">Portatil</div></div>
                      <div id="bq-lena-exterior" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-lena.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">La mejor aliada para tu terraza</div></div><div class="barba-hl">Exterior</div></div>
                      <div id="bq-lena-tapa" class="justest"><div class="recuadrocrla"><div class="barbapic"><img src="<?php echo plugin_dir_url( __FILE__ ).'img/barbacoa-de-lena-con-tapa.jpg';?>" alt="" class="im-barba"></div><div class="superfrase">Mantiene mejor la temperatura</div></div><div class="barba-hl">Con tapa</div></div>
                    </div>

                                          <?php //Si bq leña portatil ?>
                                          <div class="bq-container round5-1 oculto" id="round5_1">
                                            <!-- selector de precio -->
<?php include 'precio.php';?>
                                          </div>

                                          <?php //Si bq leña exterior ?>
                                          <div class="bq-container round5-2 oculto" id="round5_2">
                                            <!-- selector de precio -->
<?php include 'precio.php';?>
                                          </div>

                                          <?php //Si bq leña tapa ?>
                                          <div class="bq-container round5-2 oculto" id="round5_3">
                                            <!-- selector de precio -->
<?php include 'precio.php';?>
                                          </div>

                    <?php //Si bq piedra ?>
                    <div class="bq-container round6 oculto" id="round6">
                      <!-- selector de precio -->
<?php include 'precio.php';?>
                    </div>

</div>
<?php
;}



add_shortcode('SELECTOR_BARBACOAS', 'barbaprogram');
?>
