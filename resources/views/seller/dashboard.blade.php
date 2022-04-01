@extends('seller.layout.master')

@section('style')
@endSection

@section('main')
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Dashboard</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item-dropdown">
                 <a href="#" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fas fa-user me-2"></i>
                     <?php if(session()->has('user.sessiondata')): ?>
                        {{session()->get('user.sessiondata')->email}}
                     <?php endif; ?>
                 </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li class="dropdown-item" href="#">Profile</li>
                     <li class="dropdown-item" href="#">Settings</li>
                     <li class="dropdown-item" href="#">Logout</li>
                 </ul>
             </li>
         </ul>
     </div>
</nav>

<div class="container-fluid px-4">
    
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">200</h3>
                    <p class="fs-5">Products</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">300</h3>
                    <p class="fs-5">Sales</p>
                </div>
                <i class="fas fa-hand-holding fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">400</h3>
                    <p class="fs-5">Delivery</p>
                </div>
                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%30</h3>
                    <p class="fs-5">Increase</p>
                </div>
                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Order</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cake 1</td>
                        <td>Ansari</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cake 2</td>
                        <td>mere babu ka cake</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cake 3</td>
                        <td>Ansari</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Cake 1</td>
                        <td>Ansari</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Cake 2</td>
                        <td>mere babu ka cake</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Cake 3</td>
                        <td>Ansari</td>
                        <td>250</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection