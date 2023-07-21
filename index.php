<!DOCTYPE html>
<head>
  <title> dynamic website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div  class="header">
    <div class="container">
      <nav>
        <h1 style="color: red
        ;">PORTFOLIO</h1>
       <!-- <img class="logo" src="../dynamic website/photos/channel-1.jpeg">
       --> <ul>
          <li>HOME</li>
          <a href="#service_container"><li>SERVICES</li></a>
          <a href="#mywork_container"><li>MY WORK</li></a>
           <a href="form.php"><li>RESERVATION</li></a>
        </ul>
      </nav>
     
    </div>

  </div>
  <div class="headerText">
  
    <h1>Hey huns! i'm <span style="color: red;"> muhisina</span> </h1>
    <br><p>Welcome to my dynamic website</p>

  </div>
  
  
  <div id="aboutMe">
    <div class="container2">
    <div class="img_aboutMe">
      <img src="photos/hijab.jpg">

    </div>
    <div class="text_aboutMe">
      <h1>About Me</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi odit dolores soluta repudiandae culpa architecto quidem, reprehenderit unde blanditiis asperiores quas maiores aliquam eum. Commodi dolores eos quaerat explicabo eius.</p>
    <div class="titles">
      <p class="Skills_title">Skills</p>
      <p class="edu_title" >Education</p>
      <p class="exp_title">Experience</p>
    </div>
    <div class="info" >
    <div class="Skills" >
      <ul >
        <li><span style="color: red;">app development</span><br> Android/ios apps</li>
        <li><span style="color: red;">web development</span><br> Web apps</li>         
        <li><span style="color: red;">UI/UX</span><br> web/ app interface designing</li>
      </ul>
    </div>
    <div class="Education">
      <ul >
        <li><span style="color: red;">2014</span><br>Baccalaureate with Mathematics,
          Physics and Chemistry (Karaikal, India)</li>
        <li><span style="color: red;">2018</span><br> B-Tech, Bachelors of technology in computer
          Science</li>         
        
      </ul>
    </div>
    <div class="Experience">
      <ul >        
        <li><span style="color: red;">2021</span><br> Client-server app development
          (an android app – Make orders)
          Front-end: Android studio (Java, XML)
          Backend: FireBase realtime DB. <li><span style="color: red;">2020</span><br> Internship in the digital marketing company.
            website creation, management of customer details,
            social media management, SEO.
            Eye online agency-paris (one month)
            2018 End-of-studies internship, B.TECH: development</li>         
        <li><span style="color: red;">App client</span><br> server (6 months), Development within
          of a Team of 4 people (optimal solution using a
          genetic algorithm)</li>
          <li><span style="color: red;">2018</span><br> Cyber-Criminalistic & Mobile Hacking, at
            Pondicherry College of Engineers (Workshops) &
            Android, at Uniq Technologies-India (15 days)</li>        
      </ul>
    </div>
    </div>    
  </div>
  </div>
  <div  id="service_container" class="service_container">
    <h1>My services</h1>
    <div class="service">
    <div><p>App development </p></div>
    <div><p>ux/ui design</p></div>
    <div><p> web development</p></div>
  </div>
  </div>
  <div id="mywork_container" class="mywork_container">
    <h1>My Work</h1>
    <div class="mywork">
    <div><img class=" work_img " src="photos/work1.webp">
      <p  class="work_text"> App development </p> 
    </div>
    <div>
      <img  class=" work_img " src="photos/uxjpg.jpg"> 
      <p class="work_text">ux/ui design</p>

    </div>
    <div>
      <img  class=" work_img " src="photos/work2.jpg">
      <p class="work_text"> Web development</p>

    </div>
    </div>
  

    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
    <a href="form.php">
  <button class="btn btn-danger me-md-2" type="button">Reserve</button>
  </a>
</div>

  <script src="script.js">

    
  </script>
</body>
</html>