@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV2FDFHiDS08NdRgvShySBLL2Tc5Jxq0CI6y4v66jT1ggefKECcf2jbSo0evCSAGuQMrk&usqp=CAU" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <h1>
                            {{ $user->username }}
                        </h1>
                    </div>

                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>23k</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>23k</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">title</div>
                <div>Description</div>
                <div><a href="#">N/A</a></div>
            </div>
        </div>

        <div class="row pt-5">

            <div class="col-4 pb-4">
                <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV2FDFHiDS08NdRgvShySBLL2Tc5Jxq0CI6y4v66jT1ggefKECcf2jbSo0evCSAGuQMrk&usqp=CAU" class="w-100">
                </a>
            </div>
            <div class="col-4 pb-4">
                <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV2FDFHiDS08NdRgvShySBLL2Tc5Jxq0CI6y4v66jT1ggefKECcf2jbSo0evCSAGuQMrk&usqp=CAU" class="w-100">
                </a>
            </div>
            <div class="col-4 pb-4">
                <a href="#">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV2FDFHiDS08NdRgvShySBLL2Tc5Jxq0CI6y4v66jT1ggefKECcf2jbSo0evCSAGuQMrk&usqp=CAU" class="w-100">
                </a>
            </div>

        </div>
    </div>
@endsection
