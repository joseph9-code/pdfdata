<!-- Dark Gray Background (same as welcome page) -->
<div class="min-vh-100 d-flex flex-column" style="background-color: #111827;">
    <div class="container my-5 flex-grow-1">
        <h2 class="text-center text-white fw-bold mb-4">GK Study Materials</h2>
        
        <div class="row">
            @foreach($documents as $document)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm bg-white rounded">
                        <div class="card-body text-center">
                            <h5 class="card-title text-dark">{{ $document->title }}</h5>

                            @if($document->description)
                                <p class="card-text text-muted">{{ $document->description }}</p>
                            @endif

                            <button 
                                wire:click="download('{{ $document->file_path }}')" 
                                class="btn btn-primary mt-3"
                            >
                                Download PDF
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center py-3">
        <a href="{{ route('home') }}" class="btn btn-light">Back to Home</a>
    </footer>
</div>
