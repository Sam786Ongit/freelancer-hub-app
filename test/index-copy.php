<?php 
include('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Email Campaign</title>
        <!-- styles -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" -->
        <link rel="stylesheet" href="assets/bootswatch.material.min.css" >
        
        <!-- styles -->
    </head>

    <body>
    <!-- navbar -->
    <?php require_once('includes/navbar.php') ?>
    <!-- navbar -->
        <!-- create subscription form -->
        <div class="container">
            <div class="row">
                <!-- subscribers -->
                <div class="col-6">
                    <h1>Create Subscribers</h1>
                    <form method="post" action="actions/save_subscribers.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone Number">
                        </div>
                        <input type="hidden" class="form-control" name="subscription_status" value="subscribed" id="">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <!-- subscribers end -->
                <!-- campaigns -->
                <div class="col-6">
                    <h1>Create Campaign</h1>
                    <form method="post" action="actions/save_campaigns.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" name="description" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Start Date</label>
                            <input type="date" class="form-control" name="start_date" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Choose Start Date">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">End Date</label>
                            <input type="date" class="form-control" name="end_date" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Choose End Date">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

                <!-- campaigns end -->
                <!--send email  -->
                <div class="col-6">
                    <h1>Send Email</h1>
                    <form method="post" action="actions/save_campaigns.php">
                    <div class="form-group">
                        <?php $campaigns= $conn->getDataFromTable('campaigns',['id','name']);?>
                        
                        <label for="sel1">Select list:</label>
                        <select class="form-control" name="campaign_id">
                       <?php foreach($campaigns as $campaign){ ?>
                            <option value="<?php echo $campaign['id'] ?>"><?php echo $campaign['name'] ?></option>
                       <?php }?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">subject</label>
                            <input type="text" class="form-control" name="subject" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Subject">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>

                        <div class="form-group">
                            <label for="comment">Message:</label>
                            <textarea class="form-control" rows="5" name="message" id="comment"></textarea>
                        </div>

                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

                <!-- send email end -->


            </div>
        </div>



        <!--  end  -->



    </body>
    <footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </footer>

</html>