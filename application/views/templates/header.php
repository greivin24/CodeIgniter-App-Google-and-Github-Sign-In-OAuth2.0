<html>
    <head>
        <title>LAB1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
</html>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <div class="row">
            <div class="row">
                <div class="col">
                        <p class="text-info"><?php if($this->session->has_userdata('loginApp')){
                    echo $this->session->userdata('name');
                    }else{
                        echo "ERROR";
                    } ?></p>
                </div>
                <div class="col text-white">
                     <p><?php echo $email; ?></p>
                </div>
            </div>
            <div class="col">
            
            </div>
        </div>
        <div class="">
            
        </div>
        
        <img class="media-object dp img-circle" src="<?php echo $urlImg; ?>" style="width: 40px;height:40px;">
        <a class="btn btn-outline-success my-2 my-sm-0 ml-2" href="<?php echo site_url('news/out');?>">Cerrar session <?php echo $loginProvedor; ?></a>
    </form>
  </div>
</nav>


