<!DOCTYPE html>
<html lang="en">
    <head>
        <title>pagina 1</title>
        <meta charset="UTF-8">
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
        <!-- viewport -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- handlebars -->
         <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- font awesome -->
       
        <link href="style.css" rel="stylesheet">
        <link href="img.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="barraNav">
                
                <ul class="menuPrincipale">
                    <li>
                         <a href="#">home</a>
                    </li>
                    <li>
                        <a href="register.html">Register</a>
                    </li>
                    <li>
                    <a href="logout.php">Logout</a>
                    </li>
                    <li>
                       <a href="#"> <button type="submit">press me</button></a>
                    </li>
                </ul>

            </div>

        </nav>
        <section id="jumbo" class="corpo">
            <div class="container">

                <div class="row">
  
                    <div class="col-lg-12">
  
                        <div class="parteSinistra col-xs-6 col-lg-6">

                          <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ducimus sint corrupti dignissimos! Doloremque, maiores commodi eius sint dicta assumenda a esse vitae molestias expedita excepturi ad, repellat odit similique.</h2>
                        </div>

  
                        <div class="parteDestra col-xs-6 col-lg-6">
                          <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae facere ipsa ea voluptates libero quos repellendus placeat culpa aperiam. Odio vitae temporibus voluptatem asperiores voluptatibus, libero placeat iste nobis earum.</h2>
                      </div>

  
                    </div>
  
                </div>
  
  
            </div>  
            


        </section>

        <section class="section2">

            <div class="container">
                <div class="row">
                    <div class="innovative">

                        <h3 id="inno"><b> INNOVATIVE BUSINESSES TRUST DIGITALOCEAN</b></h3>

                    </div>
                    <div class="loghini">

                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/docker-bab60eeb.png" alt="">

                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/gitlab-166e2067.png" alt="">

                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/slack-e20293da.png" alt="">

                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/hashicorp-4431df79.png" alt="">

                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/wework-be6eab32.png" alt="">

                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                            <img src="img/slack-e20293da.png" alt="">

                        </div>

                    </div>
                    <div class="col-lg-12">

                        <h3 id="see"><b> <a href="#">See business solutions <i class="fas fa-chevron-right"></i></a>  </b></h3>

                    </div>


                </div>

            </div>

        </section>

        <section class="gamba">

          <div class="container">

              <div class="row">

                  <div class="col-lg-12">

                      <div class="parteSinistra col-xs-6 col-lg-2">
                        <div class="filtro-photo">
                            <label>Filtro album per genere</label>
                            <select>
                                <option value="">all</option>
                                <option value="pop">pop</option>
                                <option value="rock">rock</option>
                                <option value="metal">metal</option>
                                <option value="jazz">jazz</option>
                                
                            </select>
                
                        </div>
                       
                      </div>
                

                      <div class="parteDestra col-xs-6 col-lg-10">

                          
                        <div class="cds-container container">
                        </div>     
                            
                        <script id="entry-template" type="text/x-handlebars-template">
                            
                
                            <div class="cd" data-genre="{{genre}}">
                                
                
                                <img src="{{poster}}" alt="">
                                <h3>{{title}}</h3>
                                <span class="author">{{author}}</span>
                                <span class="year">{{year}}</span>
                                <span class="genre">{{genre}}</span>
                
                            </div>
                          </script> 
                    </div>

                  </div>

              </div>


          </div>  

            
        </section>

        <footer>
            <h2>sono il footer</h2>
        </footer>


      <script src="main.js"></script> 
    </body>
</html>