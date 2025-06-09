@extends('layouts.master')

@section('title', 'Auto-Suggest Category Mapper')

@section('styles')
<style>
    .container {
        max-width: 600px;
        margin-top: 50px;
    }
    #result {
        margin-top: 20px;
        padding: 15px;
        border-radius: 5px;
    }
    .success {
        background-color: #d4edda;
        color: #155724;
    }
    .error {
        background-color: #f8d7da;
        color: #721c24;
    }
</style>
@endsection

@section('header')
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <span class="navbar-brand mb-0 h1">Category Auto-Suggest</span>
    </div>
</nav>
@endsection

@section('content')
<div class="container">
    <h2 class="mb-4">Category Auto-Suggest</h2>
    <div class="form-group">
        <input type="text" 
               class="form-control" 
               id="searchInput" 
               placeholder="Type at least 3 characters (e.g., banana, apple, carrot)">
    </div>
    <div id="result" class="d-none"></div>
</div>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        let timeout = null;
        
        $('#searchInput').on('input', function() {
            const query = $(this).val();
            const resultDiv = $('#result');
            
            clearTimeout(timeout);
            
            if (query.length < 3) {
                resultDiv.addClass('d-none');
                return;
            }
            
            timeout = setTimeout(function() {
                $.get('{{ url("autosuggest/suggest") }}', { query: query })
                    .done(function(response) {
                        resultDiv.removeClass('d-none')
                               .removeClass('success error')
                               .addClass(response.success ? 'success' : 'error')
                               .text(response.message);
                    })
                    .fail(function() {
                        resultDiv.removeClass('d-none')
                               .removeClass('success')
                               .addClass('error')
                               .text('An error occurred while fetching the result.');
                    });
            }, 300);
        });
    });
</script>
@endsection 