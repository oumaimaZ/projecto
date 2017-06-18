 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                   
<?php

                    
       

        if(isset($_SESSION['id_maison'])){
            $bd=  new PDO('mysql:host=localhost;dbname=domotique_data;charset=utf8', 'root', '');
            $sql='select role from maison_user where id_maison=? and username=?';
            $req=$bd->prepare($sql);
            $req->execute(array($_SESSION['id_maison'],$_SESSION['username']));
            while($ligne=$req->fetch()){
                $_SESSION['admin']=$ligne['role'];
            }
            if($_SESSION['admin']==1){
           ?>
        <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Tableau de bord</a>
                    </li>
        <li>
                        <a href="gestion_maison.php"><i class="fa fa-fw fa-home"></i> Maison</a>
                    </li>

<li>
                        <a href="scenario.php"><i class="fa fa-fw fa-calendar-o"></i>Scénario</a>
                    </li>
<li>
                        <a href="user.php"><i class="fa fa-fw fa-user"></i> Collaborateur</a>
                    </li>
                      <li>
                        <a href="historique.php"><i class="fa fa-fw fa-history"></i> Historique </a>
                    </li>
                    
<?php
                    }else{
                ?>
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Tableau de bord</a>
                    </li>
                        <li>
                        <a href="historique.php"><i class="fa fa-fw fa-history"></i> Historique </a>
                    </li>
                    <?php
            }
           

        
        }else if(!isset($_SESSION['id_maison'])){
           ?>
             <li>
                        <a href="Confpage.php"><i class="fa fa-fw fa-wrench"></i> Configuration de la  maison</a>
                    </li>
           
            <?php
        }
    

      ?>                
                   

                   
                    
                   
                   <!--  <li>
                        <a href="dash.php"><i class="fa fa-fw fa-user"></i> dash</a>
                    </li>
                   
                   <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>

                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>  -->
 
              
                 
                    
                    
                
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        