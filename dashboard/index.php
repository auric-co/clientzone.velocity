<?php
include_once dirname(__FILE__)."/System/header.php";
?>
             <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span> <?php
                             echo $company['name'];
                            
                            ?></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Leaderboard (Top 5)</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            
                                            <?php
                                            
                                            $request = json_encode(array('token' => $sys->getUserToken()));
                                            $curl = curl_init();
                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => "http://api.velocityhealth.co.za/api/client/members/points/leaderboard",
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => "",
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 30,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => "POST",
                                                CURLOPT_POSTFIELDS => $request,
                                                CURLOPT_HTTPHEADER => array(
                                                    "content-type: application/json",
                                                ),
                                            ));

                                            $response = curl_exec($curl);
                                            $err = curl_error($curl);
                                            $data = json_decode($response, true);
                                            
                                            curl_close($curl);
                                            if ($err){

                                            }else{
                                                if ($data['success']) {
                                                    foreach($data['leaderboard'] as $key){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $key['name']." ".$key['surname']; ?></td>
                                                            <td><?php echo $key['points']; ?></td>
                                                        </tr>
                                                                                                               
                                                        
                                                        <?php
                                                    }
                                                }
                                            }
                                            
                                            
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Members</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2 table-bordered" id="members">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Member #</th>
                                            <th>Age</th>
                                            <th>Weight</th>
                                            <th>BMI</th>
                                            <th>Points</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $request = json_encode(array('token' => $sys->getUserToken()));
                                        $curl = curl_init();
                                        curl_setopt_array($curl, array(
                                            CURLOPT_URL => "http://api.velocityhealth.co.za/api/client/members",
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_ENCODING => "",
                                            CURLOPT_MAXREDIRS => 10,
                                            CURLOPT_TIMEOUT => 30,
                                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                            CURLOPT_CUSTOMREQUEST => "POST",
                                            CURLOPT_POSTFIELDS => $request,
                                            CURLOPT_HTTPHEADER => array(
                                                "content-type: application/json",
                                            ),
                                        ));

                                        $response = curl_exec($curl);
                                        $err = curl_error($curl);
                                        $data = json_decode($response, true);
                                        curl_close($curl);
                                        if ($err){

                                        }else{
                                            if ($data['success']){
                                                foreach ($data['members'] as $key){
                                                    ?>
                                                    <tr class="tr-shadow">
                                                        <td> <?php echo $key['name']." ".$key['surname']; ?> </td>
                                                        <td><span class="block-email"><?php echo $key['email'] ?></span></td>
                                                        <td><?php echo $key['msisdn'] ?></td>
                                                        <td class="desc"><?php echo  $key['member_number']; ?></td>
                                                        <td><?php echo $key['age']; ?> years</td>
                                                        <td><?php echo $key['weight']; ?> kg</td>
                                                        <td><?php echo $key['bmi'] ?></td>
                                                        <td><?php echo $key['points'] ?></td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                            }
                                        }


                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Velocity Health © <?php echo date('Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>




<?php

include_once dirname(__FILE__)."/System/footer.php";


?>