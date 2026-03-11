@props(['ls'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" 
        src="{{$ls->logo ? asset('storage/' . $ls->logo) : asset('/images/no-image.png')}}"
            alt={{$ls->company}}/>
    <div>
        <h3 class="text-2xl">
            <a href="/listings/{{$ls->id}}">{{$ls->title}}</a>
        </h3>
                            <div class="text-xl font-bold mb-4">Acme Corp</div>
                            
                <x-listing-tag :tagsCsv="$ls->tags" />

                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$ls->location}}
                            </div>
                        </div>
    </div>
</x-card>