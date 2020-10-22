<?php 



function album($photo, $titre){
    echo "<img src=$photo width='214' height='204'>";
    echo "<h2>La totale</h2>
    <table>";

    for($col=1;$col<=4;$col++){
        if($col==1){
        echo "<tr class='premier'>.";
        }
        if($col==2){
            echo "<tr>.";
            echo "<td>".$titre."</td>";
        }  
        if($col==3){
            echo "<tr>";
            echo "<td>".$titre."</td>";
        }  

    }



    echo "</tr>";    
    echo "</table>";

}


function panier(){

    $photo = 'CodeGame.jpg';
    $titre = "Marc";
           

        echo "<img src=$photo width='214' height='204'>";
        echo "<h2>La totale</h2>
        <table>";
        for($ligne=1;$ligne<=4;$ligne++){
            if($ligne==1){
                echo "<tr class='premier'>.";
            }else{
                if($ligne%2 == 0)
                    echo "<tr class='pair'>";
                else
                    echo "<tr class='impair'>";
            }
    
            for($col=1;$col<=4;$col++){
                if($col==1){
                    echo "<td class='premier'>"."*"."</td>";
                }else{
                    if($ligne==1 && $col==2) {
                    echo "<td>".$titre."</td>";
                    } else{
                        if($ligne==3 && $col==2) {
                            echo "<td>".$titre."</td>";
                        } else{
                            echo "<td></td>";
                        }
                    }
                }  
            }
            
            echo "</tr>";    
            
        }
        echo "</table>";
    
    }

    function affich($photo, $titre){
        echo "<div col-sm-6 class=mgimg>";
        album($photo, $titre);
        echo "</div>";
    }
    

//    function testId($id){
//        if ($id == 0){
//            echo "<h4>Il faut sélectionner un nom</h4>";
//            return false;
//        }else{
//            return true;
//        }
    
//    }
    

?>