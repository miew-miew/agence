<div class="card">
    <div class="card-body">
        @if($property->image)
            <img src="{{ $property->imageUrl() }}"  alt="">
        @endif
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m<sup>2</sup> - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem;">
            {{number_format($property->price, thousands_separator: ' ')}} Ar
        </div>
    </div>
</div>