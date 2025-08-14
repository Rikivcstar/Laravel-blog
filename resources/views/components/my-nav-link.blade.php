@props(['href', 'current' => false, 'ariacurrent' => false])

 @php

    if($current){
        $classes = "bg-[#296e11] text-white";
        $ariacurrent = "page";
    }else {
        $classes =  "text-gray-900 hover:bg-[#b4fb9a] hover:text-slate-900";
    }
     
 @endphp

 <a href="{{ $href }}"
     {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes, 'aria-current' => $ariacurrent]) }} >
    {{ $slot }}
 </a>