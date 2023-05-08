<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <div class="container-fluid ms-color-header">
            <div class="container-header">
                <img src="" alt="">
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center ms-color-main position-relative">
            <div class="container row " >
                <div class="col-4 text-center  d-flex justify-content-center p-3 " v-for="(song,index) in info">
                <div class="card p-4 ms-color-card" style="width: 18rem;" @click="moreInfo(index)">
                    <img :src="song.poster" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{song.title}}</h5>
                    <p class="card-text">{{song.author}}</p>
                    <p><strong>
                         {{song.year}}
                    </strong></p>
                </div>
                </div>
                    
                </div>
            </div>
            <div class="ms-container position-absolute " v-show='show === true'>
                <div class="container-hight d-flex justify-content-center align-items-center">
                    <button @click='close()' class='position-absolute top-0 end-0'>
                    <i class="fa-solid fa-x"></i>
                    </button>
                <div class="card p-4 ms-color-card text-center" style="width: 18rem;">
                    <img :src="songInfo.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                    <h5 class="card-title">{{songInfo.title}}</h5>
                    <p class="card-text">{{songInfo.author}}</p>
                    <p><strong>
                    {{songInfo.year}}
                    </strong></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>