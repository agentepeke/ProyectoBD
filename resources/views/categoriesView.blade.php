@include('templates/header')
<div class="container">
    <div class="row">
        @if(count($products)>0 and count($categories)>0)
        @foreach($categories as $categorie)
        <h3>{{$categorie->categorie_name}}</h3>
        <hr />
        <div class="owl-carousel products-carousel owl-theme">
            @foreach ($products as $product)
            @if($product->id_categorie==$categorie->id_categorie)
            <div class="card " style="width: 18rem;">
                <img src="/storage/products/{{$product->route}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->product_name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Disponibilidad: {{$product->existencia}} en existencia</li>
                    <li class="list-group-item">Precio: Q{{$product->price}}</li>
                </ul>
                <div class="card-body">
                    <a href="https://wa.me/50255797528" class="card-link">Whatsapp</a>
                    <a href="https://www.instagram.com/lacoloniacafe/" class="card-link">Instagram</a>
                </div>
            </div>

            @endif
            @endforeach
        </div>
        
        @endforeach
        @endif
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.products-carousel').owlCarousel({
            loop: true,
            margin: 5,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1300: {
                    items: 4
                }

            }
        });
    });
</script>
@include('templates/footer-responsive')