@extends('layouts.master')


@section('content')
<section class="tf-section tf-shop-details">
    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <div class="form-review wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">                
                    <form action="parents.store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="fx flex-wrap">
                            <fieldset class="text">
                                <input type="text" placeholder="Наслов" required="" id="text" name="title">
                            </fieldset>
                           
                            <fieldset class="message" >                                   
                                 <textarea placeholder="Текст обавештенја" rows="15" tabindex="4" id="messagewr" name="body"></textarea>
                            </fieldset>
                            <button type="submit" class="fl-btn st-6"><span class="inner">Креирај</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection