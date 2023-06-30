@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="rcl-md-12">
        <div class="card">
            <div class="card-header">
               <h4>Category
                <a href="" class="btn btn-primary  float-end">Add category</a>

               </h4>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>