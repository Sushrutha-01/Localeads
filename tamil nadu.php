<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamil Nadu</title>
    <link rel="stylesheet" href="tdp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" sizes="32*32" href="logo.jpg">
</head>
<body class="body1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row">
                        <div class="justify-content-center">
                            <h1 class="h">Tamil Nadu Tourist Places</h1>
                        </div>
                        <div class="justify-content-end ml-auto pb-5">
                            <nav class="navbar bg-body-tertiary">
                                <div class="container-fluid">
                                    <div class="d-flex" role="search" id="tamil">
                                        <input id="searchInput" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                                        <button id="searchButton" class="btn btn-outline-primary" type="submit">Search</button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div id="8" name="berijam lake" class="contain pb-5">
                        <h1 style="color:black">Berijam Lake</h1>
                        <div class="d-flex flex-row p-4">
                            <img src="berijam lake.webp" height=400px  alt="Image not found" class="image">
                            <img src="guna cave.jpg"  height="400px" width="500px" alt="Image not found" class="image"><br>
                        </div>
                        <pre>                               Berijam Lake                                                                                       Guna Cave
                        </pre>
                        <!-- <pre>         Local markets around Charminar</pre> -->
                        <br><p><b><i>Berijam Lake</i></b> nestled in the scenic town of Kodaikanal, is a serene reservoir that complements the natural beauty of the region. Surrounded by lush landscapes, it stands in harmony with attractions like Kodaikanal Lake, Silent Valley Lake, and Guna Cave. Mannavanur Lake adds to the charm, creating a picturesque haven. Each locale offers a unique blend of tranquility, making Kodaikanal a haven for nature enthusiasts seeking solace amidst breathtaking surroundings.</p>
                        <h4>Nearby Attractions:</h4>
                        <p>       1.Kodaikanal Lake <br>       2.Silent Valley View <br>      3.Guna Cave <br>     4.Mannavanur Lake</p>
                        <pre><button class="btn btn-primary"><a href="https://en.wikipedia.org/wiki/Berijam_Lake" role="button" class="btn btn-primary">Know more</a></button>                             <button class="btn btn-outline-primary"><a href="https://www.google.com/maps/dir//Berijam+Lake,+Tamil+Nadu+624101/@10.1868238,77.3874802,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3b076ff39741e32b:0x31b3d33f8051205a!2m2!1d77.3959592!2d10.1841444?authuser=0&entry=ttu">Navigate to the location</a></button></pre>
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Guide 1</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Raju</h1>
                                                <p>Email : Raju@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Guide 2</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Ram</h1>
                                                <p>Email : Ram@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Select guide</button>
                        <!-- Button trigger modal -->
                        <div class="d-flex flex-column mt-3">
                            <h5>Reviews by the visitors</h5>
                            <button style="width:128px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="submit_review.php" method="post" class="d-flex flex-column">
                                                <label for="name">Your Name:</label>
                                                <input type="text" name="name" required>
                                                <input type="hidden" name="place_id" value="9">

                                                <label for="comment">Comment:</label>
                                                <textarea name="comment" required></textarea>
                                                

                                                <input class="btn btn-primary mt-2" role="button" type="submit" value="Submit Review">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('display_reviews.php');
                            $place_id_to_display = 9; // Change this to the desired place_id
                            displayReviews($place_id_to_display); ?>
                        </div>
                    </div>
                    <div id="9" name="thanjavur" class="contain">
                        <h1 style="color:black;">Thanjavur</h1>
                        <div class="d-flex flex-row p-4">
                            <img src="thanjavur.jpg" alt="No image" height="400px" class="image">
                            <img src="thanjavur 2.jpg" alt="No image" height="400px" width="500px" class="image">
                        </div><br>
                        <pre>                          Thanjavur                                                                   Thanjavur Maratha Palace                       </pre>
                        <br><p><b><i>Thanjavur</i></b>, Also known as Tanjore or the city of temples, Thanjavur has a lot of cultural value and is known for its famous Tanjore paintings, antiques and handicrafts, textiles and saris , its Carnatic music and musical instruments and of course the temples.The cuisine of Thanjavur is a mix of traditional Brahmin, Mukkulathor and Maratha cuisines, drawing from the communities that have lived in and around the area. The Maratha dynasty which ruled from 1674 -1855 AD had heavily influenced the cuisine of this region.
                        </p>
                        <h4>Nearby Attractions:</h4>
                        <p>       1.Brihadeeswara Temple  <br>       2.Saraswathi Mahal Library <br>       3.Thanjavur Maratha Palace <br>     4.Thanjavur Palace<br>      5.Karaivetti Bird Sanctuary</p>
                        <pre><button class="btn btn-primary"><a href="https://en.wikipedia.org/wiki/Thanjavur" role="button" class="btn btn-primary">Know more</a></button>                    <button class="btn btn-outline-primary"><a href="https://www.google.com/maps/dir//Thanjavur,+Tamil+Nadu/@10.7529777,79.0490465,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3baab89cea453039:0xe113da9b1f632be6!2m2!1d79.1378274!2d10.7869994?authuser=0&entry=ttu">Navigate to the location</a></button></pre>
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Guide 1</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Raju</h1>
                                                <p>Email : Raju@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Guide 2</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Ram</h1>
                                                <p>Email : Ram@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Select guide</button>
                        <!-- Button trigger modal -->
                        <div class="d-flex flex-column mt-3">
                            <h5>Reviews by the visitors</h5>
                            <button style="width:128px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="submit_review.php" method="post" class="d-flex flex-column">
                                                <label for="name">Your Name:</label>
                                                <input type="text" name="name" required>
                                                <input type="hidden" name="place_id" value="10">

                                                <label for="comment">Comment:</label>
                                                <textarea name="comment" required></textarea>
                                                

                                                <input class="btn btn-primary mt-2" role="button" type="submit" value="Submit Review">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('display_reviews.php');
                            $place_id_to_display = 10; // Change this to the desired place_id
                            displayReviews($place_id_to_display); ?>
                        </div>
                    </div>
                    <div id="10" name="thiruvalluvar statue" class="contain">
                        <h1 style="color:black">Thiruvalluvar Statue</h1>
                        <div class="d-flex flex-row p-4">
                            <img src="thiruvalluvar-statue.jpg" alt="No image" height="400px" class="image">
                            <img src="thiruvalluvar-statue-2.webp" alt="No image" height="400px" width="600px" class="image">
                        </div>
                        <pre>                                     Thiruvalluvar Statue                                                                   </pre>
                        <br><p> The waves around remind the words of his poems; high and low tides full of varied emotions, so profound and elegant. The <b><i>Thiruvallur Statue </i></b>  in Kanniyakumari is not just a splendid work of art, it is a masterpiece for generations.It’s a sight to behold – the majesty of the Thiruvalluvar Statue that can be seen from a long distance. It stands tall at 41 metres, with the deep blue sky and resplendent sea in the backdrop. Located on a rock, right next to the Vivekananda Rock Memorial in Kanniyakumari, the breathtaking statue of Thiruvalluvar was created by the Indian sculptor V. Ganapathi Sthapathi and was dedicated to the people of Tamil Nadu on January 1, 2000 by the then Chief Minister of Tamil Nadu M. Karunanidhi.
                        <h4>Nearby Attractions:</h4>
                        <p>       1.Vivekananda Rock Memorial <br>       2.Kanyakumari beach <br>      3.Bhagavathy Amman Temple <br>     4.Vattikotai Fort <br>     5.Padmanabhapuram Palace</p>
                        <pre><button class="btn btn-primary"><a href="https://en.wikipedia.org/wiki/Thiruvalluvar_Statue" role="button" class="btn btn-primary">Know more</a></button>                             <button class="btn btn-outline-primary"><a href="https://www.google.com/maps/dir//Thiruvalluvar+Statue,+Kanyakumari,+Tamil+Nadu/@8.0778127,77.5514608,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3b04ed29248e505b:0xa9250292482cd3a7!2m2!1d77.5540357!2d8.0778074?authuser=0&entry=ttu">Navigate to the location</a></button></pre>
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Guide 1</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Raju</h1>
                                                <p>Email : Raju@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Guide 2</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Ram</h1>
                                                <p>Email : Ram@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Select guide</button>
                        <!-- Button trigger modal -->
                        <div class="d-flex flex-column mt-3">
                            <h5>Reviews by the visitors</h5>
                            <button style="width:128px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="submit_review.php" method="post" class="d-flex flex-column">
                                                <label for="name">Your Name:</label>
                                                <input type="text" name="name" required>
                                                <input type="hidden" name="place_id" value="11">

                                                <label for="comment">Comment:</label>
                                                <textarea name="comment" required></textarea>
                                                

                                                <input class="btn btn-primary mt-2" role="button" type="submit" value="Submit Review">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('display_reviews.php');
                            $place_id_to_display = 11; // Change this to the desired place_id
                            displayReviews($place_id_to_display); ?>
                        </div>
                    </div>
                    <div id="11" name="pichavaram mangrove forest" class="contain">
                        <h1 style="color:black">Pichavaram Mangrove Forest</h1>
                        <div class="d-flex flex-row p-4">
                            <img src="pichavaram-mangrove-forest.jpg" alt="Image not found" height="400px" class="image">
                            <img src="pichavaram-bridge.jpg" alt="No image" height="400px" width="500px" class="image">
                        </div>
                        <pre>                                     Pichavaram Mangrove Forest                                                              Pichavaram Bridge </pre><br>
                        <p>,<b><i>Pichavaram Mangrove Forest,</i></b> located in Tamil Nadu, India, is a unique ecosystem renowned for its labyrinthine network of waterways. Spanning over 1,100 hectares, it harbors diverse flora and fauna, including rare species like saltwater crocodiles and spot-billed pelicans. The intertwining roots of mangrove trees create a picturesque landscape, offering a haven for migratory birds and supporting local fisheries. Recognized as one of the world's largest mangrove forests, Pichavaram is a crucial ecological treasure, vital for biodiversity conservation and sustainable resource management.
                        </p>
                        <h4>Nearby Attractions:</h4>
                        <p>       1.Chidambaram Nataraja Temple<br>       2.Annamalai University <br>      3.Learn Kayak, StandupPaddle & Camp outdoors <br></p>
                        <pre><button class="btn btn-primary"><a class="btn btn-primary" href="https://en.wikipedia.org/wiki/Pichavaram">Know more</a></button>                              <button class="btn btn-outline-primary"><a href="https://www.google.com/maps/dir//CQJJ%2BQC3+Pichavaram+Mangrove+Forest,+Chidambaram,+Killai,+Post,+Pichavaram,+Tamil+Nadu+608102/@11.4318872,79.7784719,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a54e964d205e2bf:0x65d8bfb6973fbab5!2m2!1d79.7810468!2d11.431882?authuser=0&entry=ttu">Navigate to the location</a></button></pre>
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Guide 1</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Raju</h1>
                                                <p>Email : Raju@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Guide 2</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <img src="guide icon.jpg" height=200px >
                                            </div>
                                            <div class="col-6">
                                                <h1>Ram</h1>
                                                <p>Email : Ram@gmail.com</p>
                                                <p>Phone number: 9999999999</p>
                                                <p>Languages Known-Telugu,Urdu,English,Hindi</p>
                                            </div>
                                            
                                        </div>  
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Select guide</button>
                        <!-- Button trigger modal -->
                        <div class="d-flex flex-column mt-3">
                            <h5>Reviews by the visitors</h5>
                            <button style="width:128px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="submit_review.php" method="post" class="d-flex flex-column">
                                                <label for="name">Your Name:</label>
                                                <input type="text" name="name" required>
                                                <input type="hidden" name="place_id" value="12">

                                                <label for="comment">Comment:</label>
                                                <textarea name="comment" required></textarea>
                                                

                                                <input class="btn btn-primary mt-2" role="button" type="submit" value="Submit Review">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('display_reviews.php');
                            $place_id_to_display = 12; // Change this to the desired place_id
                            displayReviews($place_id_to_display); ?>
                        </div>

                    </div>
                </div>
            </div>  
        </div>
    </div>
    <a role="button" class="btn btn-primary" href="main.php" style="width:128px;" >Back</a>
    <script src="search.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
</body>
    </html>
</body>
</html>