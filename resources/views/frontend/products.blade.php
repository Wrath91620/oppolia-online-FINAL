@extends('layouts.Frontend.mainlayoutfrontend')

@section('title') المنتجات @endsection

@section('content')
<style>
    .green-title {
        color: #0A4740;
    }
</style>

<div class="banner-wrapper position-relative">
    <!-- Banner Image (Full Width) -->
    <div class="row">
        <div class="col-12 p-0">
            <img src="{{ asset('Frontend/assets/images/banners/Products.webp') }}" alt="Products Banner"
                class="img-fluid w-100">
        </div>
    </div>
    <!-- Centered Text Overlay -->
    <div class="about-text-overlay">
        <h1 class="about-text">المنتجات</h1>
    </div>
</div>
<div class="container p-4" dir="rtl">



    <!-- Optional: Sorting Dropdown -->

    <!-- Category Title (Only shows if category exists) -->
    <h2 class="mb-4 text-center green-title">
        @if(isset($category))
        @if(App::getLocale() == 'ar')
        {{ $category->title_ar ?? $category->title }}
        @else
        {{ $category->title }}
        @endif
        @else
        جميع المنتجات
        @endif
    </h2>
    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3">
        @forelse($products as $product)
        <div class="col">
            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none text-dark">
                <div class="designer-card p-4 text-center">
                    <img src="{{ asset($product->image ? 'storage/' . $product->image : 'storage/profile_images/ProfilePlaceholder.jpg') }}"
                        class="img-fluid rounded-4"
                        alt="Product Image">

                    <div class="designer-info mt-3" style="font-size: 16px !important;">
                        <h5>
                            @if(App::getLocale() == 'ar')
                            {{ $product->name_ar ?? $product->name }}
                            @else
                            {{ $product->name }}
                            @endif
                        </h5>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 text-center">
            <p>لا توجد منتجات متاحة حالياً.</p>
        </div>
        @endforelse
    </div>
</div>

@endsection