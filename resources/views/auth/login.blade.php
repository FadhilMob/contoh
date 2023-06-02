@extends('layouts.app')

@section('title')
    | LOGIN
@endsection
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block">
                                <p> <center>
                                <img src="https://th.bing.com/th/id/R.26a4fbb5b11507db98408e71938be5f3?rik=ir2%2b4ZudtSgIPg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-Xix68xvfQMo%2fUOJAT1FJmHI%2fAAAAAAAAEro%2fExw177elxwE%2fs1600%2fLogo%2bKota%2bBatu.jpg&ehk=T5aEpiKTdCdhiYfVSwse9if3TmuqAvybLNIEV80usRU%3d&risl=&pid=ImgRaw&r=0" 
                                width="400" height="370"> 
                            </p></center>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter NIP">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <a href="/dashboard" class="btn btn-success btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection