<?php


      echo '<br> 1. sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.<br>';
      $masyvas = [];
      for($i = 0; $i < 30; $i++) {
          $masyvas[] = rand(20, 40);
          
      }echo '<pre>';
          print_r($masyvas);
      echo '<hr>';


       echo '<br> 1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais. <br>';

       for($i = 0; $i < count($masyvas); $i++){
           echo $masyvas[$i] . ' ';
       }
       echo '<hr>';



 
        echo '<br> 2. sukurkite masyvą su 10 skaičių nuo 0 iki 9 <br>'; 

        $masyvas1 = [];
        for ($i=0; $i < 10; $i++) { 
            $masyvas1[] = $i;
            
        }print_r($masyvas1);


        echo '<hr>';


        echo '<br> 2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 19 echo <br>';
        $arr = [];
        for($i = 10; $i < 20; $i++) {
            $arr[] = $i;
        }
        print_r($arr);


        echo '<hr>';
        
        
        echo '<br> 2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo. 
        t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių. echo <br>'; 
        $minSk = 0;
        $maxSk = count($arr) - 1;

        

        for ($i=0; $i < 100; $i++) {
            $randSkaicius = rand($minSk, $maxSk); 
            $randNum = $arr[$randSkaicius];
            echo $randNum . ' ';
        }
        

        // for($i = 0; $i < 100; $i++) {
        //     $arr2[] = rand(10, 19);
        // }print_r($arr2);


        echo '<hr>';


         echo '<br> 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
        reikšmės - skaičiai nuo 0 iki 9. <br>'; 
        for ($i=0; $i < 10 ; $i++) { 
            $arr3 = [];
            for ($j=0; $j < 10; $j++) { 
                $arr3[$i][] = rand(0, 9);
                
            }print_r($arr3);
        }


        echo '<hr>';


        echo '<br>  3b. atspausdinkite duomenis. (gausis skaičių stačiakampis). <br>';
        
        echo '<hr>';

        echo '<br>  3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu <br>';

        
echo '<hr>';

         /* 
        4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
        raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
        vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
       */
        
         /* 
        5. sukurkite tris masyvus:
        $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
        $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
        $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
        aprašus sugalvokite patys. jų reikia 10.
*/

         /* 
        5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
         iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
         masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
       */
         
          /* 
        5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.
*/

         /* 
        6. padarykite daugybos lentelę nuo 1 iki 9.
*/

         /* 
        =======================
        funkcijos
        =======================
*/

         /* 
        1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
*/

         /* 
        1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
         tas paduotas kintamasis
*/

          /* 
        1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius
        1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.
*/

         /* 
        1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
        bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
*/

         /* 
        1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
        bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
*/

         /* 
        1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
        ir atspausdina:
         apskritimo ilgis: (tai ka gražino funkcija 1f)
         apskritimo plotas: (tai ka gražino funkcija 1g)
*/