<x-layout>
    {{-- category: featured --}}
    <x-menu title='Featured Categories'></x-menu>

    {{-- menu --}}
    <div class="menu-container" style="display:flex; align-items:center; justify-content:space-between">
        @foreach ($categories as $category)
            {{-- <x-menu.index img_path='{{"storage/assets/".$category->img}}' name='{{$category->name}}' n_of_products='{{$category->n_of_product}}' bg_color='{{$category->color}}'></x-menu.index> --}}
            <x-category img_path='{{"storage/assets/".$category->img}}' name='{{$category->name}}' n_of_products='{{$category->n_of_product}}' bg_color='{{$category->color}}'></x-category>
        @endforeach
    </div>

    {{-- category: popular products  --}}
    <x-menu title='Popular Products'></x-menu>

    {{-- promotion --}}
    <div class="promotion_container" style="display: grid; grid-template-columns: repeat(3,1fr); gap: 24px;">
        @foreach ($promotions as $promotion)

            <x-promotion title='{{$promotion->title}}' bg_color='{{$promotion->bg_color}}'  btn_color='{{$promotion->btn_color}}' img_path='storage/assets/{{$promotion->image}}' > </x-promotion>
        @endforeach

    </div>

    <div class="product_container" style="display: grid; grid-template-columns: repeat(5,1fr); gap: 24px; margin-top:50px">
        @foreach ($products as $product)
            <x-product title='{{$product->name}}' category='{{$product->category->name}}' rating='{{$product->rating}}' weight='{{$product->weight}}' dis_pricing='{{$product->discount_pricing}}' pricing='{{$product->pricing}}' tag='{{$product->specail_offer}}'  tag_color='{{$product->tag_color}}' img_path='storage/assets/{{$product->image}}' > </x-product>
        @endforeach

    </div>

</x-layout>
