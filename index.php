    <?php include 'include/db.php' ?>
    <?php include 'include/header.php' ?>

<body>

    <!-- Navigation -->
    <?php include 'include/navigation.php' ?>
  

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                <?php  $query = "SELECT *FROM posts";
                       $select_query_all_posts= mysqli_query($db_connect,$query);
                    
                        while($row= mysqli_fetch_assoc($select_query_all_posts))
                        {
                            $post_tittle  =$row['post_tittle'];
                            $post_auther  =$row['post_auther'];
                            $post_date  =$row['post_date'];
                            $post_image  =$row['post_image'];
                            $post_content  =$row['post_content'];
                            
                       ?>     
                           
                            
                             <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_tittle ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_auther ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                            
                            
                            
                            
                            
                                    
                   <?php } ?>

               

              

               

            </div>

            <!-- Blog Sidebar Widgets Column -->
        
        <?php include 'include/sidebar.php'  ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      
      <?php include 'include/footer.php' ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
