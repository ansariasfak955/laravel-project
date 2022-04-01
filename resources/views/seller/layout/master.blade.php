<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{$title}}</title>
    <style>
        :root {
    --main-bg-color: #009d63;
    --main-text-color: #009d63;
    --second-text-color: #bbbec5;
    --second-bg-color: #c1efde;
}

.primary-text{
    color: var(--main-text-color);
}

.second-text{
    color: var(--second-text-color);
}

.promary-bg{
    background-color: var(--main-bg-color);
}

.secondary-bg{
    background-color: var(--second-bg-color);
}

.rounded-full{
    border-radius: 100%;
}

#wrapper{
    overflow-x: hidden;
    background-image: linear-gradient(
        to right,
        #baf3d7,
        #c2f5de,
        #cbf7e4,
        #d4f8ea,
        #ddfaef
    );
}

#sidebar-wrapper{
    min-height: 100vh;
    margin-left: -15rem;
    transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading{
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
}

#sidebar-wrapper .list-group{
    width: 15rem;
}

#page-content-wrapper{
    min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper{
    margin-left: 0;
}

#menu-toggle{
    cursor: pointer;
}

.list-group-item{
    border: none;
    padding: 20px 30px;
}

.list-group-item.active{
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
}

@media (min-width: 768px){
    #sidebar-wrapper{
        margin-left: 0;
    }
    #page-content-wrapper{
        min-width: 0;
        width: 100%;
    }
    #wrapper.toggled #sidebar-wrapper{
        margin-left: -15rem;
    }
}
    </style>
</head>
<body>
<div class="d-flex" id="wrapper">

        
        
        <!-- Sidebar starts here -->

        @include('seller.layout.menu')

        <!-- Sidebar ends here -->

       @yield('main')

    </div>


    <div id="footer">
        @include('seller.layout.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function(){
            el.classList.toggle("toggled")
        }
    </script>

</body>
</html>