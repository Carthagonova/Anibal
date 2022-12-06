    document.getElementById("bq-obra").onclick = function() {bq_obra()};
    document.getElementById("bq-carbon").onclick = function() {bq_carbon()};
    document.getElementById("bq-gas").onclick = function() {bq_gas()};
    document.getElementById("bq-electrica").onclick = function() {bq_elec()};
    document.getElementById("bq-lena").onclick = function() {bq_lena()};
    document.getElementById("bq-piedra").onclick = function() {bq_piedra()};
    document.getElementById("bq-refresh").onclick = function() {bq_refresh()};
//hace un backback con elementbyclass

//Si selecciona obra
function bq_obra() {
document.getElementById("round0").className += " oculto";
document.getElementById("round1").className =document.getElementById("round1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
}

//Una vez ha seleccionado obra
    document.getElementById("bq-chime").onclick = function() {bq_chime()};
      function bq_chime() {
      document.getElementById("round1").className += " oculto";
      document.getElementById("round1_1").className =document.getElementById("round1_1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                  //Obra con chimenea
                                  var x = document.getElementsByClassName("20_50");
                                  var i;
                                  for (i = 0; i < x.length; i++) {
                                    x[i].className += " oculto";
                                  }
                                  var x = document.getElementsByClassName("50_100");
                                  var i;
                                  for (i = 0; i < x.length; i++) {
                                    x[i].className += " oculto";
                                  }
                                  var x = document.getElementsByClassName("100_200");
                                  var i;
                                  for (i = 0; i < x.length; i++) {
                                    x[i].className += " oculto";
                                  }

                                    var x = document.getElementsByClassName("200_500");
                                    var i;
                                    for (i = 0; i < x.length; i++) {
                                     x[i].onclick = function() {high_price()}
                                    function high_price(){
                                     window.location='https://www.amazon.es/s?k=barbacoa%20de%20obra%20con%20chimenea&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626682046&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_6&utm_source=BarbacoasdeObra&utm_medium=conChimenea';
                                   }}

                                   var x = document.getElementsByClassName("500");
                                   var i;
                                   for (i = 0; i < x.length; i++) {
                                    x[i].onclick = function() {vhigh_price()}
                                   function vhigh_price(){
                                    window.location='https://www.amazon.es/s?k=barbacoa%20de%20obra%20con%20chimenea&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626681925&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_5&utm_source=BarbacoasdeObra&utm_medium=conChimenea';
                                  }}
      }

    document.getElementById("bq-no-chime").onclick = function() {bq_no_chime()};
      function bq_no_chime() {
      document.getElementById("round1").className += " oculto";
      document.getElementById("round1_2").className =document.getElementById("round1_2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );

                                      //Obra sin chimenea
                                      var x = document.getElementsByClassName("20_50");
                                      var i;
                                      for (i = 0; i < x.length; i++) {
                                        x[i].className += " oculto";
                                      }
                                      var x = document.getElementsByClassName("50_100");
                                      var i;
                                      for (i = 0; i < x.length; i++) {
                                        x[i].className += " oculto";
                                      }
                                      var x = document.getElementsByClassName("100_200");
                                      var i;
                                      for (i = 0; i < x.length; i++) {
                                        x[i].className += " oculto";
                                      }

                                        var x = document.getElementsByClassName("200_500");
                                        var i;
                                        for (i = 0; i < x.length; i++) {
                                         x[i].onclick = function() {high_price()}
                                        function high_price(){
                                         window.location='https://www.amazon.es/s?k=barbacoa%20de%20obra%20sin%20chimenea&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626682561&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_4&utm_source=BarbacoasdeObra&utm_medium=sinChimenea';
                                       }}

                                       var x = document.getElementsByClassName("500");
                                       var i;
                                       for (i = 0; i < x.length; i++) {
                                        x[i].onclick = function() {vhigh_price()}
                                       function vhigh_price(){
                                        window.location='https://www.amazon.es/s?k=barbacoa+de+obra+sin+chimenea&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626682699&rnid=2493681031&tag=barbacoas0f-21&utm_medium=sinChimenea&utm_source=BarbacoasdeObra&ref=sr_nr_p_36_5';
                                      }}
    }


function bq_carbon() {
document.getElementById("round0").className += " oculto";
document.getElementById("round2").className =document.getElementById("round2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
}

      document.getElementById("bq-carbon-tapa").onclick = function() {carbon_tapa()};
        function carbon_tapa() {
        document.getElementById("round2").className += " oculto";
        document.getElementById("round2_1").className =document.getElementById("round2_1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );

                                          //carbon con tapa
                                          /*document.getElementById("20_50").onclick = function() {low_price()}
                                            function low_price(){
                                              window.location='https://www.amazon.es/s?k=barbacoa%20de%20carbon%20con%20tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626690234&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_2&utm_source=BarbacoasdeCarbon&utm_medium=conTapa';
                                            }*/

                                                  var x = document.getElementsByClassName("20_50");
                                                  var i;
                                                  for (i = 0; i < x.length; i++) {
                                                   x[i].onclick = function() {low_price()}
                                                  function low_price(){
                                                   window.location='https://www.amazon.es/s?k=barbacoa%20de%20carbon%20con%20tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626690234&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_2&utm_source=BarbacoasdeCarbon&utm_medium=conTapa';
                                                  }
                                                  }


                                                  var x = document.getElementsByClassName("50_100");
                                                  var i;
                                                  for (i = 0; i < x.length; i++) {
                                                   x[i].onclick = function() {mlow_price()}
                                                  function mlow_price(){
                                                   window.location='https://www.amazon.es/s?k=barbacoa+de+carbon+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691784&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_2';
                                            } }

                                                  var x = document.getElementsByClassName("100_200");
                                                  var i;
                                                  for (i = 0; i < x.length; i++) {
                                                   x[i].onclick = function() {medium_price()}
                                                  function medium_price(){
                                                   window.location='https://www.amazon.es/s?k=barbacoa+de+carbon+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691808&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_4';
                                                 }}
                                                 var x = document.getElementsByClassName("200_500");
                                                 var i;
                                                 for (i = 0; i < x.length; i++) {
                                                  x[i].onclick = function() {high_price()}
                                                 function high_price(){
                                                  window.location='https://www.amazon.es/s?k=barbacoa+de+carbon+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691822&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_5';
                                                }}
                                                var x = document.getElementsByClassName("500");
                                                var i;
                                                for (i = 0; i < x.length; i++) {
                                                 x[i].onclick = function() {vhigh_price()}
                                                function vhigh_price(){
                                                 window.location='https://www.amazon.es/s?k=barbacoa+de+carbon+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691843&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_6';
                                               }}

                                          }

      document.getElementById("bq-carbon-portatil").onclick = function() {carbon_portatil()};
        function carbon_portatil() {
        document.getElementById("round2").className += " oculto";
        document.getElementById("round2_2").className =document.getElementById("round2_2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
        //carbon portatil

                                                var x = document.getElementsByClassName("20_50");
                                                var i;
                                                for (i = 0; i < x.length; i++) {
                                                 x[i].onclick = function() {low_price()}
                                                function low_price(){
                                                 window.location='https://www.amazon.es/s?k=barbacoa%20de%20carb%C3%B3n%20portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691891&rnid=2493681031&tag=barbacoas0f-21&ref=a9_sc_1&utm_source=BarbacoasdeCarbon&utm_medium=Portatiles';
                                               }}

                                               var x = document.getElementsByClassName("50_100");
                                               var i;
                                               for (i = 0; i < x.length; i++) {
                                                x[i].onclick = function() {mlow_price()}
                                               function mlow_price(){
                                                window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691974&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_2';
                                              }}

                                              var x = document.getElementsByClassName("100_200");
                                              var i;
                                              for (i = 0; i < x.length; i++) {
                                               x[i].onclick = function() {medium_price()}
                                              function medium_price(){
                                               window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626691992&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_4';
                                             }}

                                             var x = document.getElementsByClassName("200_500");
                                             var i;
                                             for (i = 0; i < x.length; i++) {
                                              x[i].onclick = function() {high_price()}
                                             function high_price(){
                                              window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692008&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_4';
                                            }}

                                            var x = document.getElementsByClassName("500");
                                            var i;
                                            for (i = 0; i < x.length; i++) {
                                             x[i].onclick = function() {vhigh_price()}
                                            function vhigh_price(){
                                             window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692020&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_6';
                                           }}

                                                }

      document.getElementById("bq-carbon-no-smoke").onclick = function() {carbon_nohumo()};
        function carbon_nohumo() {
        document.getElementById("round2").className += " oculto";
        document.getElementById("round2_3").className =document.getElementById("round2_3").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
        //carbon no humo
                                                var x = document.getElementsByClassName("20_50");
                                                var i;
                                                for (i = 0; i < x.length; i++) {
                                                 x[i].onclick = function() {low_price()}
                                                function low_price(){
                                                 window.location='https://www.amazon.es/s?k=barbacoa%20de%20carb%C3%B3n%20sin%20humo&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZG64KBF8GJDI&qid=1626692157&rnid=2493681031&sprefix=barbacoa%20de%20carb%C3%B3n%20sin%20%2Clawngarden%2C200&tag=barbacoas0f-21&ref=sr_nr_p_36_2&utm_source=BarbacoasdeCarbon&utm_medium=SinHumo';
                                               }}

                                               var x = document.getElementsByClassName("50_100");
                                               var i;
                                               for (i = 0; i < x.length; i++) {
                                                x[i].onclick = function() {mlow_price()}
                                               function mlow_price(){
                                                window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+sin+humo&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZG64KBF8GJDI&qid=1626692229&rnid=2493681031&sprefix=barbacoa+de+carb%C3%B3n+sin+%2Clawngarden%2C200&tag=barbacoas0f-21&utm_medium=SinHumo&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_3';
                                              }}

                                              var x = document.getElementsByClassName("100_200");
                                              var i;
                                              for (i = 0; i < x.length; i++) {
                                               x[i].onclick = function() {medium_price()}
                                              function medium_price(){
                                               window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+sin+humo&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZG64KBF8GJDI&qid=1626692255&rnid=2493681031&sprefix=barbacoa+de+carb%C3%B3n+sin+%2Clawngarden%2C200&tag=barbacoas0f-21&utm_medium=SinHumo&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_4';
                                             }}

                                             var x = document.getElementsByClassName("200_500");
                                             var i;
                                             for (i = 0; i < x.length; i++) {
                                              x[i].onclick = function() {high_price()}
                                             function high_price(){
                                              window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+sin+humo&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZG64KBF8GJDI&qid=1626692267&rnid=2493681031&sprefix=barbacoa+de+carb%C3%B3n+sin+%2Clawngarden%2C200&tag=barbacoas0f-21&utm_medium=SinHumo&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_5';
                                            }}

                                            var x = document.getElementsByClassName("500");
                                            var i;
                                            for (i = 0; i < x.length; i++) {
                                             x[i].onclick = function() {vhigh_price()}
                                            function vhigh_price(){
                                             window.location='https://www.amazon.es/s?k=barbacoa+de+carb%C3%B3n+sin+humo&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZG64KBF8GJDI&qid=1626692276&rnid=2493681031&sprefix=barbacoa+de+carb%C3%B3n+sin+%2Clawngarden%2C200&tag=barbacoas0f-21&utm_medium=SinHumo&utm_source=BarbacoasdeCarbon&ref=sr_nr_p_36_6';
                                           }}

                                                }


function bq_gas() {
document.getElementById("round0").className += " oculto";
document.getElementById("round3").className =document.getElementById("round3").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
}
          document.getElementById("bq-gas-patas").onclick = function() {gas_patas()};
            function gas_patas() {
            document.getElementById("round3").className += " oculto";
            document.getElementById("round3_1").className =document.getElementById("round3_1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                      //Gas con patas
                                                      var x = document.getElementsByClassName("20_50");
                                                      var i;
                                                      for (i = 0; i < x.length; i++) {
                                                       x[i].onclick = function() {low_price()}
                                                      function low_price(){
                                                       window.location='https://www.amazon.es/s?k=barbacoa%20de%20gas%20con%20patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692642&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_2&utm_source=BarbacoasdeGas&utm_medium=conPatas';
                                                     }}
                                                     var x = document.getElementsByClassName("50_100");
                                                     var i;
                                                     for (i = 0; i < x.length; i++) {
                                                      x[i].onclick = function() {mlow_price()}
                                                     function mlow_price(){
                                                      window.location='https://www.amazon.es/s?k=barbacoa+de+gas+con+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692727&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_2';
                                                    }}

                                                    var x = document.getElementsByClassName("100_200");
                                                    var i;
                                                    for (i = 0; i < x.length; i++) {
                                                     x[i].onclick = function() {medium_price()}
                                                    function medium_price(){
                                                     window.location='https://www.amazon.es/s?k=barbacoa+de+gas+con+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692739&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_3';
                                                   }}

                                                   var x = document.getElementsByClassName("200_500");
                                                   var i;
                                                   for (i = 0; i < x.length; i++) {
                                                    x[i].onclick = function() {high_price()}
                                                   function high_price(){
                                                    window.location='https://www.amazon.es/s?k=barbacoa+de+gas+con+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692749&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_5';
                                                  }}

                                                  var x = document.getElementsByClassName("500");
                                                  var i;
                                                  for (i = 0; i < x.length; i++) {
                                                   x[i].onclick = function() {vhigh_price()}
                                                  function vhigh_price(){
                                                   window.location='https://www.amazon.es/s?k=barbacoa+de+gas+con+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692760&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_5';
                                                 }}

                                                              }
              document.getElementById("bq-gas-legless").onclick = function() {gas_nopatas()};
                function gas_nopatas() {
                document.getElementById("round3").className += " oculto";
                document.getElementById("round3_2").className =document.getElementById("round3_2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                          //gas sin patas
                                                          var x = document.getElementsByClassName("20_50");
                                                          var i;
                                                          for (i = 0; i < x.length; i++) {
                                                           x[i].onclick = function() {low_price()}
                                                          function low_price(){
                                                           window.location='https://www.amazon.es/s?k=barbacoa%20de%20gas%20sin%20patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc=&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692778&rnid=2493681031&tag=barbacoas0f-21&ref=sr_nr_p_36_2&utm_source=BarbacoasdeGas&utm_medium=sinPatas';
                                                         }}
                                                         var x = document.getElementsByClassName("50_100");
                                                         var i;
                                                         for (i = 0; i < x.length; i++) {
                                                          x[i].onclick = function() {mlow_price()}
                                                         function mlow_price(){
                                                          window.location='https://www.amazon.es/s?k=barbacoa+de+gas+sin+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692846&rnid=2493681031&tag=barbacoas0f-21&utm_medium=sinPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_2';
                                                        }}

                                                        var x = document.getElementsByClassName("100_200");
                                                        var i;
                                                        for (i = 0; i < x.length; i++) {
                                                         x[i].onclick = function() {medium_price()}
                                                        function medium_price(){
                                                         window.location='https://www.amazon.es/s?k=barbacoa+de+gas+sin+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692860&rnid=2493681031&tag=barbacoas0f-21&utm_medium=sinPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_3';
                                                       }}

                                                       var x = document.getElementsByClassName("200_500");
                                                       var i;
                                                       for (i = 0; i < x.length; i++) {
                                                        x[i].onclick = function() {high_price()}
                                                       function high_price(){
                                                        window.location='https://www.amazon.es/s?k=barbacoa+de+gas+sin+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692873&rnid=2493681031&tag=barbacoas0f-21&utm_medium=sinPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_4';
                                                      }}

                                                      var x = document.getElementsByClassName("500");
                                                      var i;
                                                      for (i = 0; i < x.length; i++) {
                                                       x[i].onclick = function() {vhigh_price()}
                                                      function vhigh_price(){
                                                       window.location='https://www.amazon.es/s?k=barbacoa+de+gas+sin+patas&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626692882&rnid=2493681031&tag=barbacoas0f-21&utm_medium=sinPatas&utm_source=BarbacoasdeGas&ref=sr_nr_p_36_6';
                                                     }}

                                                          }


function bq_elec() {
document.getElementById("round0").className += " oculto";
document.getElementById("round4").className =document.getElementById("round4").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
}
                    document.getElementById("bq-elec-portatil").onclick = function() {ele_port()};
                      function ele_port() {
                      document.getElementById("round4").className += " oculto";
                      document.getElementById("round4_1").className =document.getElementById("round4_1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                            //electrica portatil
                                                            var x = document.getElementsByClassName("20_50");
                                                            var i;
                                                            for (i = 0; i < x.length; i++) {
                                                             x[i].onclick = function() {low_price()}
                                                            function low_price(){
                                                             window.location='https://www.amazon.es/s?k=barbacoa+electrica+portatil&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693260&rnid=2493681031&tag=barbacoas0f-21&utm_medium=portatiles&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                           }}
                                                           var x = document.getElementsByClassName("50_100");
                                                           var i;
                                                           for (i = 0; i < x.length; i++) {
                                                            x[i].onclick = function() {mlow_price()}
                                                           function mlow_price(){
                                                            window.location='https://www.amazon.es/s?k=barbacoa+electrica+portatil&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693309&rnid=2493681031&tag=barbacoas0f-21&utm_medium=portatiles&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                          }}

                                                          var x = document.getElementsByClassName("100_200");
                                                          var i;
                                                          for (i = 0; i < x.length; i++) {
                                                           x[i].onclick = function() {medium_price()}
                                                          function medium_price(){
                                                           window.location='https://www.amazon.es/s?k=barbacoa+electrica+portatil&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693319&rnid=2493681031&tag=barbacoas0f-21&utm_medium=portatiles&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_4';
                                                         }}

                                                         var x = document.getElementsByClassName("200_500");
                                                         var i;
                                                         for (i = 0; i < x.length; i++) {
                                                          x[i].onclick = function() {high_price()}
                                                         function high_price(){
                                                          window.location='https://www.amazon.es/s?k=barbacoa+electrica+portatil&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693329&rnid=2493681031&tag=barbacoas0f-21&utm_medium=portatiles&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_5';
                                                        }}
                                                        var x = document.getElementsByClassName("500");
                                                        var i;
                                                        for (i = 0; i < x.length; i++) {
                                                         x[i].onclick = function() {vhigh_price()}
                                                        function vhigh_price(){
                                                         window.location='https://www.amazon.es/s?k=barbacoa+electrica+portatil&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693340&rnid=2493681031&tag=barbacoas0f-21&utm_medium=portatiles&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_6';
                                                       }}

                                                              }
                    document.getElementById("bq-elec-exterior").onclick = function() {ele_ext()};
                      function ele_ext() {
                      document.getElementById("round4").className += " oculto";
                      document.getElementById("round4_2").className =document.getElementById("round4_2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                              //electrica exterior
                                                              var x = document.getElementsByClassName("20_50");
                                                              var i;
                                                              for (i = 0; i < x.length; i++) {
                                                               x[i].onclick = function() {low_price()}
                                                              function low_price(){
                                                               window.location='https://www.amazon.es/s?k=barbacoa+electrica+de+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693360&rnid=2493681031&tag=barbacoas0f-21&utm_medium=deExterior&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                             }}

                                                             var x = document.getElementsByClassName("50_100");
                                                             var i;
                                                             for (i = 0; i < x.length; i++) {
                                                              x[i].onclick = function() {mlow_price()}
                                                             function mlow_price(){
                                                              window.location='https://www.amazon.es/s?k=barbacoa+electrica+de+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693410&rnid=2493681031&tag=barbacoas0f-21&utm_medium=deExterior&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                            }}
                                                            var x = document.getElementsByClassName("100_200");
                                                            var i;
                                                            for (i = 0; i < x.length; i++) {
                                                             x[i].onclick = function() {medium_price()}
                                                            function medium_price(){
                                                             window.location='https://www.amazon.es/s?k=barbacoa+electrica+de+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693419&rnid=2493681031&tag=barbacoas0f-21&utm_medium=deExterior&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_4';
                                                           }}

                                                           var x = document.getElementsByClassName("200_500");
                                                           var i;
                                                           for (i = 0; i < x.length; i++) {
                                                            x[i].onclick = function() {high_price()}
                                                           function high_price(){
                                                            window.location='https://www.amazon.es/s?k=barbacoa+electrica+de+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693429&rnid=2493681031&tag=barbacoas0f-21&utm_medium=deExterior&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_5';
                                                          }}

                                                          var x = document.getElementsByClassName("500");
                                                          var i;
                                                          for (i = 0; i < x.length; i++) {
                                                           x[i].onclick = function() {vhigh_price()}
                                                          function vhigh_price(){
                                                           window.location='https://www.amazon.es/s?k=barbacoa+electrica+de+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693438&rnid=2493681031&tag=barbacoas0f-21&utm_medium=deExterior&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_6';
                                                         }}

                                                              }
        document.getElementById("bq-elec-tapa").onclick = function() {ele_ext()};
          function ele_tapa() {
          document.getElementById("round4").className += " oculto";
          document.getElementById("round4_3").className =document.getElementById("round4_3").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                            //electrica con tapa
                                                            var x = document.getElementsByClassName("20_50");
                                                            var i;
                                                            for (i = 0; i < x.length; i++) {
                                                             x[i].onclick = function() {low_price()}
                                                            function low_price(){
                                                             window.location='https://www.amazon.es/s?k=barbacoa+electrica+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693131&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                           }}

                                                           var x = document.getElementsByClassName("50_100");
                                                           var i;
                                                           for (i = 0; i < x.length; i++) {
                                                            x[i].onclick = function() {mlow_price()}
                                                           function mlow_price(){
                                                            window.location='https://www.amazon.es/s?k=barbacoa+electrica+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693193&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_2';
                                                          }}

                                                          var x = document.getElementsByClassName("100_200");
                                                          var i;
                                                          for (i = 0; i < x.length; i++) {
                                                           x[i].onclick = function() {medium_price()}
                                                          function medium_price(){
                                                           window.location='https://www.amazon.es/s?k=barbacoa+electrica+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693203&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_4';
                                                         }}

                                                         var x = document.getElementsByClassName("200_500");
                                                         var i;
                                                         for (i = 0; i < x.length; i++) {
                                                          x[i].onclick = function() {high_price()}
                                                         function high_price(){
                                                          window.location='https://www.amazon.es/s?k=barbacoa+electrica+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693213&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_5';
                                                        }}

                                                        var x = document.getElementsByClassName("500");
                                                        var i;
                                                        for (i = 0; i < x.length; i++) {
                                                         x[i].onclick = function() {vhigh_price()}
                                                        function vhigh_price(){
                                                         window.location='https://www.amazon.es/s?k=barbacoa+electrica+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693225&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasElectricas&ref=sr_nr_p_36_6';
                                                       }}

                                                            }

function bq_lena() {
document.getElementById("round0").className += " oculto";
document.getElementById("round5").className =document.getElementById("round5").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
}

        document.getElementById("bq-lena-portatil").onclick = function() {len_port()};
          function len_port() {
          document.getElementById("round5").className += " oculto";
          document.getElementById("round5_1").className =document.getElementById("round5_1").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                              //leña portatil
                                                              var x = document.getElementsByClassName("20_50");
                                                              var i;
                                                              for (i = 0; i < x.length; i++) {
                                                               x[i].onclick = function() {low_price()}
                                                              function low_price(){
                                                               window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693864&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_2';
                                                             }}

                                                             var x = document.getElementsByClassName("50_100");
                                                             var i;
                                                             for (i = 0; i < x.length; i++) {
                                                              x[i].onclick = function() {mlow_price()}
                                                             function mlow_price(){
                                                              window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693930&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_3';
                                                            }}

                                                            var x = document.getElementsByClassName("100_200");
                                                            var i;
                                                            for (i = 0; i < x.length; i++) {
                                                             x[i].onclick = function() {medium_price()}
                                                            function medium_price(){
                                                             window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693942&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_4';
                                                           }}

                                                           var x = document.getElementsByClassName("200_500");
                                                           var i;
                                                           for (i = 0; i < x.length; i++) {
                                                            x[i].onclick = function() {high_price()}
                                                           function high_price(){
                                                            window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693962&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_5';
                                                          }}

                                                          var x = document.getElementsByClassName("500");
                                                          var i;
                                                          for (i = 0; i < x.length; i++) {
                                                           x[i].onclick = function() {vhigh_price()}
                                                          function vhigh_price(){
                                                           window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+portatiles&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693974&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Portatiles&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_6';
                                                         }}

                                                              }
      document.getElementById("bq-lena-exterior").onclick = function() {len_ext()};
        function len_ext() {
        document.getElementById("round5").className += " oculto";
        document.getElementById("round5_2").className =document.getElementById("round5_2").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                                //leña exterior
                                                                var x = document.getElementsByClassName("20_50");
                                                                var i;
                                                                for (i = 0; i < x.length; i++) {
                                                                 x[i].onclick = function() {low_price()}
                                                                function low_price(){
                                                                 window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693991&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Exterior&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_2';
                                                               }}

                                                               var x = document.getElementsByClassName("50_100");
                                                               var i;
                                                               for (i = 0; i < x.length; i++) {
                                                                x[i].onclick = function() {mlow_price()}
                                                               function mlow_price(){
                                                                window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694061&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Exterior&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_3';
                                                              }}

                                                              var x = document.getElementsByClassName("100_200");
                                                              var i;
                                                              for (i = 0; i < x.length; i++) {
                                                               x[i].onclick = function() {medium_price()}
                                                              function medium_price(){
                                                               window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694071&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Exterior&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_4';
                                                             }}

                                                             var x = document.getElementsByClassName("200_500");
                                                             var i;
                                                             for (i = 0; i < x.length; i++) {
                                                              x[i].onclick = function() {high_price()}
                                                             function high_price(){
                                                              window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694083&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Exterior&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_5';
                                                            }}
                                                            var x = document.getElementsByClassName("500");
                                                            var i;
                                                            for (i = 0; i < x.length; i++) {
                                                             x[i].onclick = function() {vhigh_price()}
                                                            function vhigh_price(){
                                                             window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+exterior&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694094&rnid=2493681031&tag=barbacoas0f-21&utm_medium=Exterior&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_6';
                                                           }}

                                                                }
      document.getElementById("bq-lena-tapa").onclick = function() {len_extt()};
        function len_extt() {
        document.getElementById("round5").className += " oculto";
        document.getElementById("round5_3").className =document.getElementById("round5_3").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                                  //leña tapa
                                                                  var x = document.getElementsByClassName("20_50");
                                                                  var i;
                                                                  for (i = 0; i < x.length; i++) {
                                                                   x[i].onclick = function() {low_price()}
                                                                  function low_price(){
                                                                   window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493683031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693734&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_2';
                                                                 }}

                                                                 var x = document.getElementsByClassName("50_100");
                                                                 var i;
                                                                 for (i = 0; i < x.length; i++) {
                                                                  x[i].onclick = function() {mlow_price()}
                                                                 function mlow_price(){
                                                                  window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493684031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693799&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_2';
                                                                }}

                                                                var x = document.getElementsByClassName("100_200");
                                                                var i;
                                                                for (i = 0; i < x.length; i++) {
                                                                 x[i].onclick = function() {medium_price()}
                                                                function medium_price(){
                                                                 window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693821&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_4';
                                                               }}

                                                               var x = document.getElementsByClassName("200_500");
                                                               var i;
                                                               for (i = 0; i < x.length; i++) {
                                                                x[i].onclick = function() {high_price()}
                                                               function high_price(){
                                                                window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693833&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_5';
                                                              }}

                                                              var x = document.getElementsByClassName("500");
                                                              var i;
                                                              for (i = 0; i < x.length; i++) {
                                                               x[i].onclick = function() {vhigh_price()}
                                                              function vhigh_price(){
                                                               window.location='https://www.amazon.es/s?k=barbacoa+de+le%C3%B1a+con+tapa&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626693843&rnid=2493681031&tag=barbacoas0f-21&utm_medium=conTapa&utm_source=BarbacoasdeLena&ref=sr_nr_p_36_6';
                                                             }}

                                                                  }

function bq_piedra() {
document.getElementById("round0").className += " oculto";
document.getElementById("round6").className =document.getElementById("round6").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );
                                                                //Piedra
                                                                var x = document.getElementsByClassName("20_50");
                                                                var i;
                                                                for (i = 0; i < x.length; i++) {
                                                                  x[i].className += " oculto";
                                                                }
                                                                var x = document.getElementsByClassName("50_100");
                                                                var i;
                                                                for (i = 0; i < x.length; i++) {
                                                                  x[i].className += " oculto";
                                                                }
                                                                  
                                                                  var x = document.getElementsByClassName("100_200");
                                                                  var i;
                                                                  for (i = 0; i < x.length; i++) {
                                                                   x[i].onclick = function() {medium_price()}
                                                                  function medium_price(){
                                                                   window.location='https://www.amazon.es/s?k=barbacoa+de+piedra+volc%C3%A1nica&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493685031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694278&rnid=2493681031&tag=barbacoas0f-21&utm_source=BarbacoasdePiedraVolcanica&ref=sr_nr_p_36_3';
                                                                 }}

                                                                 var x = document.getElementsByClassName("200_500");
                                                                 var i;
                                                                 for (i = 0; i < x.length; i++) {
                                                                  x[i].onclick = function() {high_price()}
                                                                 function high_price(){
                                                                  window.location='https://www.amazon.es/s?k=barbacoa+de+piedra+volc%C3%A1nica&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493686031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694308&rnid=2493681031&tag=barbacoas0f-21&utm_source=BarbacoasdePiedraVolcanica&ref=sr_nr_p_36_3';
                                                                }}

                                                                var x = document.getElementsByClassName("500");
                                                                var i;
                                                                for (i = 0; i < x.length; i++) {
                                                                 x[i].onclick = function() {vhigh_price()}
                                                                function vhigh_price(){
                                                                 window.location='https://www.amazon.es/s?k=barbacoa+de+piedra+volc%C3%A1nica&i=lawngarden&rh=n%3A1571259031%2Cp_36%3A2493687031&dc&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&qid=1626694319&rnid=2493681031&tag=barbacoas0f-21&utm_source=BarbacoasdePiedraVolcanica&ref=sr_nr_p_36_5';
                                                               }}

                                                                }




//Pendiente de arreglar, ya que muestra abajo los salientes
function bq_refresh() {
  window.location.reload();

  /*
  var x = document.getElementsByClassName("example");
  var i;
  for (i = 0; i < x.length; i++) {

    x[i].classList.add('oculto');
  }

//document.getElementsByClassName("bq-container").className += " oculto";
document.getElementById("round0").className =document.getElementById("round0").className.replace( /(?:^|\s)oculto(?!\S)/g , '' );*/


}
