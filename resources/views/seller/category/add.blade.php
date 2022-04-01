@extends('seller.layout.master')

@section('style')

@endSection

@section('main')
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me3" id="menu-toggle"></i>
        <h2 class="fs-2 m-0">Add Category</h2>
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
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Add Category</h3>
        @if(session()->has('status'))
            <h5>{{session()->get('status')}}</h5>
        @endif
        <div class="col">
            <form action="{{url('seller/category/create')}}" method="post">
            <table class="table bg-white rounded shadow-sm table-hover">
                <tbody>
                    <tr>
                        @csrf
                        <th>Enter Category Name:</th>
                        <td><input type="text" name="name" id="cake_name" class="form-control" placeholder="cake category name" required></td>
                        <td><input type="submit" value="Add" class="form-control btn btn-success"></td>
                    </tr>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Category List</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($cakes_list)>0)
                        @foreach($cakes_list as $cake)

                        <tr>
                        <th scope="row">{{$cake->id}}</th>
                        <td>{{$cake->name}}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                        </tr>
                        
                        @endforeach
                    @else
                        No Record Found
                    @endif
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection