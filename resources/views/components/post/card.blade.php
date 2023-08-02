<x-card>
    <x-card-body>
        <div class="mb-2"> 
            <h5>
                <a href="{{ route('blog.show', $post->id) }}">
                    {{$post->title}}
                </a>
            </h5>
            <div class="small text-muted">
                {{ now()->format('d.m.Y H:i:s') }}
            </div> 
        </div>
    </x-card-body>
</x-card>