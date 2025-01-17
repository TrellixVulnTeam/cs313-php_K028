<?php include 'common/header.php';
//phpinfo()
?>

<h1>My family</h1>
<img class="img-thumbnail img-responsive img-pic" src="images/family-pic.jpg" alt="Family Picture">


<div class="wrapper">
    <div>
        <ul id="familyList">
            <li class="thumb">Aron - Married for 17 years<span><img src="images/Aron.jpg" alt="Aron"></span></li>
            <li class="thumb">Samantha - 15 and driving!<span><img src="images/sam.jpg" alt="Sam"></span></li>
            <li class="thumb">Ashley - 13 and a ballerina<span><img src="images/ashley.jpg" alt="Ashley"></span></li>
            <li class="thumb">Bryce - 12 and a basketballer<span><img src="images/bryce.jpg" alt="Bryce"></span></li>
            <li class="thumb">Huckleberry - 5 yr old dog who is half lab, half chihuahua<span><img src="images/huck.jpg" alt="Huck"></span></li>
            <li class="thumb">Penny - 1yr old Tortoise shell cat<span><img src="images/penny.jpg" alt="Penny"></span></li>
            <li class="thumb">Gus - 6 month orange Tabby <span><img src="images/gus.jpg" alt="Gus"></span></li>
        </ul>
    </div>
    <div><button class="btn btn-dark" id="hobby" data-toggle="tooltip" data-placement="top" title="Click for Hobby List" onclick="dropDown()"> Hobbies</button>

        <div>
            <ul class="card" id="hobbyList">
                <li> Knitting</li>
                <li> Crochetting</li>
                <li> Cross-Stitching</li>
                <li> Reading</li>
                <li> Hand Lettering</li>
                <li> Graphic Design</li>
                <li> Puzzles</li>
                <li> Games</li>
            </ul>
        </div>
    </div>
</div>
<script src="js/scripts.js"></script>
<?php include 'common/footer.php'; ?>