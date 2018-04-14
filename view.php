<?php
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <script>
        fetch('https://api.github.com/users/<?php echo $id;?>')
        .then((res) => res.json())
        .then((data) => {
            // console.log(data.avatar_url);
            let name='';
            if(data.name === null){
                name = data.login;
            }
            else{
                name = data.name;
            }
            let location = data.location;
            document.getElementById('headimg').innerHTML = `<img src = ${data.avatar_url}>`;
            document.getElementById('name').innerHTML = name;
            document.getElementById('location').innerHTML = location;
            document.getElementById('link').innerHTML = `<a class="alink" href="${data.html_url}">Go to Profile</a>`;
        });
        fetch('https://api.github.com/users/<?php echo $id;?>/repos')
        .then((res) => res.json())
        .then((data) => {
            let output ='';
            data.forEach(function(repos){
                let desc;
                if(repos.description === null){
                    desc = repos.name;
                }
                else {
                    desc = repos.description;
                }
                download = repos.svn_url + '/archive/master.zip';
                output += `
                    <div class="cardh col-lg-3 col-md-3 col-sm-3 col-xs-12 center-xs">
                        <div class="card">
                            <h2>${repos.name}</h2>
                            <p>${desc}</p>
                            <a href="${download}"><button><i class="fas fa-download"></i></button></a>
                        </div>
                    </div>
                `;
            });
            document.getElementById('cardhold').innerHTML = output;
        });
    </script>
    <title>Welcome <?php echo $id;?></title>
</head>
<body>
    <div class="cover">
    <div class="row middle-xs" id="head">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 center-xs" id="headimg">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 center-sm center-xs start-md start-lg">
            <h1 id="name"></h1>
            <p id="location"></p>
            <p id="link"></p>
        </div>
    </div>
    <section id>
        <div class="container">
            <div class="row center-xs middle-xs" id="cardhold">
            </div>
        </div>
    </section>
    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>
</body>
</html>