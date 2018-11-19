<?php
   if($_POST["0_0"]!="")
   {
       file_put_contents("userdata.txt",file_get_contents("userdata.txt").
   "Start Time (Clicked Start): ".$_POST['0_0']."\n".
   "Begin Task 1: ".$_POST['1_0']."\n".
   "The user clicked: ".$_POST['1_3']."\n".
   "Begin Task 2: ".$_POST['2_0']."\n".
   "The user clicked: ".$_POST['2_3']."\n".
   "Begin Task 3: ".$_POST['3_0']."\n".
   "The user clicked: ".$_POST['3_3']."\n".
   "Begin Task 4: ".$_POST['4_0']."\n".
   "The user clicked: ".$_POST['4_3']."\n".
   "Begin Task 5: ".$_POST['5_0']."\n".
   "The user clicked: ".$_POST['5_3']."\n".
   "Begin Task 6: ".$_POST['6_0']."\n".
   "The user clicked: ".$_POST['6_3']."\n\n");
   echo "Thanks for your participation!";
   die();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head id="head">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">
    <title>BACS383 Project</title>
</head>
<body>

<button style="width:200px; height:50px; font-size:30pt; cursor:pointer;" onclick="newFunction()">Begin</button>
<!-- eventsThing(0,'nothing') -->

<temp1 id="mine" style="display:none;">
    <!-- Template of each item below -->
            <!--<div id="1" style="margin-left:10px; margin-bottom:10px; width:150px; height:150px; display:inline-block;">
                <img id="1.1" style="width:150px; height:75px;" alt="asdf-pic" src="asdf">
                <div id="1.2" style="width:150px; height:75px; font-size:30pt; text-align:center;" alt="asdf-text">Edit</div>
            </div> -->  

        <form action="/bacs383/index.php" method="POST" id="hiddenForm" style="display:none;">
            <input id="9.9" name="9_9" type="text" value="0">
            <input id="0.0" name="0_0" type="text" value="NULL">
            <input id="1.0" name="1_0" type="text" value="NULL">
            <input id="1.3" name="1_3" type="text" value="NULL">
            <input id="2.0" name="2_0" type="text" value="NULL">
            <input id="2.3" name="2_3" type="text" value="NULL">
            <input id="3.0" name="3_0" type="text" value="NULL">
            <input id="3.3" name="3_3" type="text" value="NULL">
            <input id="4.0" name="4_0" type="text" value="NULL">
            <input id="4.3" name="4_3" type="text" value="NULL">
            <input id="5.0" name="5_0" type="text" value="NULL">
            <input id="5.3" name="5_3" type="text" value="NULL">
            <input id="6.0" name="6_0" type="text" value="NULL">
            <input id="6.3" name="6_3" type="text" value="NULL">
        </form>
<script>
function start1()
{
    // Set all CSS Files
    var newA = document.createElement("link");
    newA.setAttribute("href","./Blog Template for Bootstrap_files/bootstrap.min.css");
    newA.setAttribute("rel","stylesheet");
    document.getElementById("head").appendChild(newA);

    var newB = document.createElement("link");
    newB.setAttribute("href","./Blog Template for Bootstrap_files/css");
    newB.setAttribute("rel","stylesheet");
    document.getElementById("head").appendChild(newB);

    var newC = document.createElement("link");
    newC.setAttribute("href","./Blog Template for Bootstrap_files/blog.css");
    newC.setAttribute("rel","stylesheet");
    document.getElementById("head").appendChild(newC);
}

function start2()
{
    //Set all CSS Files
    var newA = document.createElement("link");
    newA.setAttribute("href","./Checkout example for Bootstrap_files/bootstrap.min.css");
    newA.setAttribute("rel","stylesheet");
    document.getElementById("head").appendChild(newA);

    var newB = document.createElement("link");
    newB.setAttribute("href","./Checkout example for Bootstrap_files/form-validation.css");
    newB.setAttribute("rel","stylesheet");
    document.getElementById("head").appendChild(newB);
}


function someUpdate(template_number)
{
    finalElement = document.createElement("body");
    if(template_number == "something2")
        finalElement.setAttribute("class","bg-light");
    finalElement.innerHTML = document.getElementById(template_number).innerHTML;
    finalElement.appendChild(document.getElementById("mine"));
    finalElement.appendChild(document.getElementById("something1"));
    finalElement.appendChild(document.getElementById("something2"));
    document.body = finalElement;
}

function newFunction(thenewvar)
{
   
   somethingNew = "";
   check1 = "";
   
   if(document.getElementById("9.9").value!=0)
   {
     somethingNew = Number(document.getElementById("9.9").value);
     temp22 = document.getElementById((Number(document.getElementById("9.9").value)-1)+".0").value.substring(document.getElementById((Number(document.getElementById("9.9").value)-1)+".0").value.lastIndexOf(":")+1).substring(0,2);
     check1 =  Number(temp22);
   }
   

    if(somethingNew == 0)
    {
        //Save Time Stamp
        start1();
        document.getElementById("0.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("9.9").setAttribute("value",1);
        someUpdate("something1");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","newFunction(this)"); }
    }

    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 1)
    {
        //Save Time Stamp
        document.getElementById("1.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("1.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
        alert(thenewvar.getAttribute("ElementNumber"));
        //document.getElementById("9.9").setAttribute("value",2);
        someUpdate("something1");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","alert("+i+")"); }
    }   
    
    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 2)
    {
        //Save Time Stamp
        document.getElementById("2.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("2.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
       // document.getElementById("9.9").setAttribute("value",3);
        someUpdate("something1");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","alert("+i+")"); }
    }     
    
    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 3)
    {
        start2();
        document.getElementById("3.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("3.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
        //document.getElementById("9.9").setAttribute("value",4);
        someUpdate("something2");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","alert("+i+")"); }
    }
    
    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 4)
    {
        document.getElementById("4.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("4.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
        //document.getElementById("9.9").setAttribute("value",5);
        someUpdate("something2");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","alert("+i+")"); }
    }
    
    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 5)
    {
        document.getElementById("5.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("5.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
        //document.getElementById("9.9").setAttribute("value",6);
        someUpdate("something2");
        
        //Assign # for every element
        allElements = document.body.getElementsByTagName("*");
        for(i=0; i < allElements.length; i++){ allElements[i].setAttribute("ElementNumber",i); allElements[i].setAttribute("onclick","alert("+i+")"); }
    }
    
    else if(new Date().getSeconds()-check1 > 3 && somethingNew == 6)
    {
        document.getElementById("6.0").setAttribute("value",new Date().toLocaleTimeString());
        document.getElementById("6.3").setAttribute("value",thenewvar.getAttribute("ElementNumber"));
        document.getElementById("hiddenForm").submit();
    }
}


    // [  [img alt text],[img src],[display text],[display text alt]  
    //    [img alt text(1)],[img src(1)],[display text(1)],[display text alt(1)] etc...
    // ]
var allValues = [
        ['drawing-pic','https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/brush-pencil-512.png','drawing','drawing-text'],
        ['play-pic','https://cdn4.iconfinder.com/data/icons/general-office/91/General_Office_65-512.png','play','play-text']
        ];
</script>    
</temp1>

<temp1 id="something1" style="display:none; width:0px; height:0px;" alt="blog-data">  <!--Blog Template text and picture-->
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">World</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">U.S.</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Technology</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Design</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Culture</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Business</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Politics</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Opinion</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Science</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Health</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Style</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Travel</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f4e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f4e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f50%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f50%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Daylight Savings Time</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>Daylight saving time (DST), also daylight savings time (United States), also summer time (United Kingdom and others), is the practice of advancing clocks during summer months so that evening daylight lasts longer, while sacrificing normal sunrise times. Typically, regions that use daylight saving time adjust clocks forward one hour close to the start of spring and adjust them backward in the autumn to standard time. In effect, DST causes a lost hour of sleep in the spring and an extra hour of sleep in the fall.

              George Hudson proposed the idea of daylight saving in 1895. The German Empire and Austria-Hungary organized the first nationwide implementation, starting on April 30, 1916. Many countries have used it at various times since then, particularly since the energy crisis of the 1970s.
              
              DST is generally not observed near the equator, where sunrise times do not vary enough to justify it. Some countries observe it only in some regions; for example, southern Brazil observes it while equatorial Brazil does not. Only a minority of the world's population uses DST, because Asia and Africa generally do not observe it.
              
              DST clock shifts sometimes complicate timekeeping and can disrupt travel, billing, record keeping, medical devices, heavy equipment, and sleep patterns. Computer software often adjusts clocks automatically, but policy changes by various jurisdictions of DST dates and timings may be confusing.
              </p>
            
                 <!--Edit button can go here-->
            <hr>
          </div><!-- /.blog-post -->
          <a class="btn btn-secondary float-right" href="#"><img src="pen.png" alt="pen"/>Edit</a>
        </div><!-- /.blog-main -->

        </div><!--  -->

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">March 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">February 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">January 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">December 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">November 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">October 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">September 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">August 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">July 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">June 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">May 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">GitHub</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Twitter</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Bootstrap</a> by <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">@mdo</a>.</p>
      <p>
        <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Blog Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Blog Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</temp1>

<temp1 id="something2" style="display:none; width:0px; height:0px;" alt="blog-data">  <!--Blog Template picture-->
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">World</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">U.S.</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Technology</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Design</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Culture</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Business</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Politics</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Opinion</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Science</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Health</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Style</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Travel</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f4e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f4e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f50%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f50%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          <a class="btn btn-secondary float-right" href="#"><img src="pen.png" alt="pen"/></a>
          <div class="blog-post">
            <h2 class="blog-post-title">Daylight Savings Time</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>Daylight saving time (DST), also daylight savings time (United States), also summer time (United Kingdom and others), is the practice of advancing clocks during summer months so that evening daylight lasts longer, while sacrificing normal sunrise times. Typically, regions that use daylight saving time adjust clocks forward one hour close to the start of spring and adjust them backward in the autumn to standard time. In effect, DST causes a lost hour of sleep in the spring and an extra hour of sleep in the fall.

              George Hudson proposed the idea of daylight saving in 1895. The German Empire and Austria-Hungary organized the first nationwide implementation, starting on April 30, 1916. Many countries have used it at various times since then, particularly since the energy crisis of the 1970s.
              
              DST is generally not observed near the equator, where sunrise times do not vary enough to justify it. Some countries observe it only in some regions; for example, southern Brazil observes it while equatorial Brazil does not. Only a minority of the world's population uses DST, because Asia and Africa generally do not observe it.
              
              DST clock shifts sometimes complicate timekeeping and can disrupt travel, billing, record keeping, medical devices, heavy equipment, and sleep patterns. Computer software often adjusts clocks automatically, but policy changes by various jurisdictions of DST dates and timings may be confusing.
              </p>
            
                 <!--Edit button can go here-->
            <hr>
          </div><!-- /.blog-post -->
          
        </div><!-- /.blog-main -->

        </div><!--  -->

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">March 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">February 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">January 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">December 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">November 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">October 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">September 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">August 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">July 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">June 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">May 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">GitHub</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Twitter</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Bootstrap</a> by <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">@mdo</a>.</p>
      <p>
        <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Blog Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Blog Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</temp1>

<temp1 id="something3" style="display:none; width:0px; height:0px;" alt="blog-data">  <!--Blog Template text-->
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Subscribe</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">World</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">U.S.</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Technology</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Design</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Culture</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Business</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Politics</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Opinion</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Science</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Health</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Style</a>
          <a class="p-2 text-muted" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Travel</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f4e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f4e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16721103f50%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16721103f50%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          
          <div class="blog-post">
            <h2 class="blog-post-title">Daylight Savings Time</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>Daylight saving time (DST), also daylight savings time (United States), also summer time (United Kingdom and others), is the practice of advancing clocks during summer months so that evening daylight lasts longer, while sacrificing normal sunrise times. Typically, regions that use daylight saving time adjust clocks forward one hour close to the start of spring and adjust them backward in the autumn to standard time. In effect, DST causes a lost hour of sleep in the spring and an extra hour of sleep in the fall.

              George Hudson proposed the idea of daylight saving in 1895. The German Empire and Austria-Hungary organized the first nationwide implementation, starting on April 30, 1916. Many countries have used it at various times since then, particularly since the energy crisis of the 1970s.
              
              DST is generally not observed near the equator, where sunrise times do not vary enough to justify it. Some countries observe it only in some regions; for example, southern Brazil observes it while equatorial Brazil does not. Only a minority of the world's population uses DST, because Asia and Africa generally do not observe it.
              
              DST clock shifts sometimes complicate timekeeping and can disrupt travel, billing, record keeping, medical devices, heavy equipment, and sleep patterns. Computer software often adjusts clocks automatically, but policy changes by various jurisdictions of DST dates and timings may be confusing.
              </p>
            
                 <!--Edit button can go here-->
            <hr>
          </div><!-- /.blog-post -->
          <a class="btn btn-secondary" href="#">Edit</a>
        </div><!-- /.blog-main -->

        </div><!--  -->

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">March 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">February 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">January 2014</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">December 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">November 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">October 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">September 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">August 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">July 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">June 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">May 2013</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">GitHub</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Twitter</a></li>
              <li><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Bootstrap</a> by <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">@mdo</a>.</p>
      <p>
        <a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Blog Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Blog Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Blog Template for Bootstrap_files/holder.min.js.download"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</temp1>

<temp1 id="something4" style="display:none; width:0px; height:0px;" alt="checkout-data">     <!--Checkout Template text and picture-->
<!-- <body class="bg-light"> -->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./Checkout example for Bootstrap_files/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <a class="btn btn-secondary float-right" href="#"><img src="pen.png" alt="pen"/>edit</a>


        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Bob" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Smith" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block">Continue to checkout</button>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Privacy</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Terms</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Support</a></li>
        </ul>
      </footer>
    </div>
</temp1>

<temp1 id="something5" style="display:none; width:0px; height:0px;" alt="checkout-data">     <!--Checkout Template picture-->
<!-- <body class="bg-light"> -->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./Checkout example for Bootstrap_files/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Bob" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Smith" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>

              <a class="btn btn-secondary float-right" href="#"><img src="pen.png" alt="pen"/></a>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block">Continue to checkout</button>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Privacy</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Terms</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Support</a></li>
        </ul>
      </footer>
    </div>
</temp1>

<temp1 id="something6" style="display:none; width:0px; height:0px;" alt="checkout-data">     <!--Checkout Template picture-->
<!-- <body class="bg-light"> -->
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./Checkout example for Bootstrap_files/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <a class="btn btn-secondary float-right" href="#">Edit</a>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Bob" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Smith" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>

              
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block">Continue to checkout</button>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Privacy</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Terms</a></li>
          <li class="list-inline-item"><a onclick="alert('hi')" style="color:blue;" onmouseover="this.style='color:blue; text-decoration:underline; cursor:pointer'" onmouseout="this.style='color:blue;'">Support</a></li>
        </ul>
      </footer>
    </div>
</temp1>
</body>
</html>




