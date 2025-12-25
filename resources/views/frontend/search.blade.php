@extends('frontend.layouts.masters')
@section('content')

<section class="page-header">
    <div class="container">
        <div class="page-header-box">
            <h1>Search Results</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $query = isset($_GET['q']) ? trim($_GET['q']) : '';
                if (!empty($query)) {
                    echo '<h2>Search results for: "' . htmlspecialchars($query) . '"</h2>';
                    // Here you would implement actual search logic
                    // For now, showing a placeholder message
                    echo '<p>No results found. Please try a different search term.</p>';
                } else {
                    echo '<h2>Please enter a search term.</h2>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

@endsection