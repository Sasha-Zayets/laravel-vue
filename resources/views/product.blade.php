@extends('layouts.app')
@section('css')

@endsection

@section('content')
    <main>
        <ul>
            <li>2</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
    </main>

@endsection

@section('scripts')
<script>
    import Vue from 'vue'
    Vue.component('component-list', require('./components/List.vue').default);
</script>

@endsection
