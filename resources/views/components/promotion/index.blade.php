{{-- @props(['img_path','title', 'btn_color','bg_color'])

<div class="promotion" style="background-color:{{$bg_color}}">
    <div class="content">
        <div class="title">{{ $title }}</div>
        <button class="button" style="background-color:{{$btn_color}}; color: white;">
            <span  style="margin-right: 2px; font-size: 15px;">Shop now</span>
            <i class="fa-solid fa-arrow-right" style="font-size: 12px;"></i>
        </button>
    </div>
    <div class="image"><img src="{{asset($img_path)}}" alt="{{$img_path}}"></div>
</div>

 --}}

 @props(['img_path','title', 'btn_color','bg_color'])

<div class="promotion" style="background-color: {{$bg_color}}; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="content" style="padding: 20px;">
        <div class="title" style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">{{ $title }}</div>
        <button class="button" style="background-color: {{ $btn_color }}; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
            <span style="margin-right: 5px; font-size: 16px;">Shop Now</span>
            <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
        </button>
    </div>
    <div class="image" style="overflow: hidden;">
        <img src="{{ asset($img_path) }}" alt="{{ $title }}" style="width: 100%; height: auto; display: block;">
    </div>
</div>
